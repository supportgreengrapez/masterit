<?php
namespace App\Http\Controllers;
use Config;
use Request;
use URL;
use Session;
use Carbon\Carbon;
use Crypt;
use Log;
use DateTime;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Redirect;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Refund;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\ExecutePayment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;
use PayPal\Api\Sale;
use DateTimeZone;

use PayPal\Api\ChargeModel;
use PayPal\Api\Currency;
use PayPal\Api\MerchantPreferences;
use PayPal\Api\PaymentDefinition;
use PayPal\Api\Plan;



use PayPal\Api\Patch;
use PayPal\Api\PatchRequest;
use PayPal\Common\PayPalModel;
use \PayPal\Api\VerifyWebhookSignature;
use \PayPal\Api\WebhookEvent;

use PayPal\Api\Agreement;

use PayPal\Api\AgreementStateDescriptor;
class PayPalController extends Controller
{
   
    private $_api_context;
    private $student_id;
    static $skill;
    private $mentor_id;
    private $review_type;
    private  $due_date;
    private  $charge_fee;
    private  $instruction;
    public function __construct()
    {
     
        // setup PayPal api context
        $paypal_conf = Config::get('paypal');

        $this->_api_context = new ApiContext(new OAuthTokenCredential('AVYjHQL_-SQPKvKmEQXsKUfRbcAN1LPVfsTOZqaCHoFGwOBwkh2p52zUXE4gX71wYhAhKEpij5DWNkae', 'ENYSylApw_7P8zbViFPtklQDhGrF086XI4zrr19Do7twZsGO0LBg_26zWr_6mcyPQOF6k8HcstPqLDuF'));
        $this->_api_context->setConfig($paypal_conf['settings']);
    
    }
    public function webhook(Request $request)
    {
    
    $requestBody = $request->all();
$value = new PayPalModel($requestBody);
   
    $header = $request->header();

   
    Log::info("Request body");
    
        Log::info($requestBody);     

$signatureVerification = new VerifyWebhookSignature();
$signatureVerification->setAuthAlgo($header['paypal-auth-algo'][0]);
$signatureVerification->setTransmissionId($header['paypal-transmission-id'][0]);
$signatureVerification->setCertUrl($header['paypal-cert-url'][0]);
$signatureVerification->setWebhookId("8HR77123XR316321B"); // Note that the Webhook ID must be a currently valid Webhook that you created with your client ID/secret.
$signatureVerification->setTransmissionSig($header["paypal-transmission-sig"][0]);
$signatureVerification->setTransmissionTime($header['paypal-transmission-time'][0]);

$signatureVerification->setRequestBody($value);

try {
    /** @var \PayPal\Api\VerifyWebhookSignatureResponse $output */
    $output = $signatureVerification->post($this->_api_context);
} catch (Exception $ex) {
  
    exit(1);
}

    Log::info("Verification status: ".$output->getVerificationStatus());
 

    $json = $request->input('id');
   $output = \PayPal\Api\WebhookEvent::get($json, $this->_api_context);
    $output = $output->getResource();
    if(!empty($output->id))
    {
     $result = DB::select("select* from entract_transaction where agreement_id ='$output->id'");
     $u = $result[0]->{'freelancer_username'};
     DB::update("update users set entract_plan='BASIC' where email='$u'");
     Log::info("Subscription Cancelled: DONE"."   BILLINGID ".$output->id);
    }
  Log::info("Subscription Cancelled: FAILLED"."   BILLINGID ".$output->id);
return "working";
    }
    
    public function postPayment($student_id,$mentor_id,$skill,$review_type,$due_date,$charge_fee,$instruction)
    {
        $this->freelancer_id = $student_id ;
        PayPalController::$skill = (int)$skill;
        $this->project_title = $skill;
        $this->due_date = $due_date;
        $this->mentor_id = $mentor_id;
        $this->charge_fee = (int)$charge_fee;
        $this->instruction = $instruction;
        
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');
        $item_1 = new Item();
        $item_1->setName($review_type) // item name
            ->setCurrency('USD')
            ->setQuantity(1)
            ->setPrice($charge_fee); // unit price
       
       session()->put('fee', $charge_fee);
       session()->put('review', $review_type);
        // add item to list
        $item_list = new ItemList();
        $item_list->setItems(array($item_1));
        $details = new Details();
        $details->setSubtotal($charge_fee);
        $amount = new Amount();
        $amount->setCurrency('USD')
            ->setTotal($charge_fee)
            ->setDetails($details);
        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($item_list)
            ->setDescription('Skill is '.$skill.' Milestone Payment Instructions: '.$instruction)
            ->setInvoiceNumber(uniqid());
        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(URL::route('payment.status'))
            ->setCancelUrl(URL::route('payment.status'));
        $payment = new Payment();
        $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaction));
        try {
            $payment->create($this->_api_context);
        } catch (\PayPal\Exception\PPConnectionException $ex) {
            if (\Config::get('app.debug')) {
                echo "Exception: " . $ex->getMessage() . PHP_EOL;
                $err_data = json_decode($ex->getData(), true);
                exit;
            } else {
                die('Some error occur, sorry for inconvenient');
            }
        }
        foreach($payment->getLinks() as $link) {
            if($link->getRel() == 'approval_url') {
                $redirect_url = $link->getHref();
                break;
            }
        }
        // add payment ID to session
        Session::put('paypal_payment_id', $payment->getId());
        if(isset($redirect_url)) {
            // redirect to paypal
            return Redirect::away($redirect_url);
        }
        return redirect('view/client/posted/jobs')
        ->with('error', 'Payment failed');
    }
//     public function getPaymentStatus()
// {


    
    
//     // Get the payment ID before session clear
//      $payment_id = Request::get('paymentId');
//     $skill = session('skill');
//     // clear the session payment ID
//     Session::forget('paypal_payment_id');
//     // return Input::get('PayerID');
//     // if (empty(Input::get('PayerID')) || empty(Input::get('token'))) {
//     //     $skill = session('title');
//     // $pid = session('pfid');
    
//     // return redirect("/student/contact/".$pid."/".$skill."/fail");
//     // }
//     $payment = Payment::get($skill, $this->_api_context);
//     // PaymentExecution object includes information necessary 
//     // to execute a PayPal account payment. 
//     // The payer_id is added to the request query parameters
//     // when the user is redirected from paypal back to your site
//     $payeer   = $payment->getPayer();
//       $payeer_info = $payeer->getPayerInfo();
//       $fname = $payeer_info->getFirstName();
//       $lname = $payeer_info->getLastName();
//       $email = $payeer_info->getEmail();
        

//     $execution = new PaymentExecution();
//     $execution->setPayerId(Input::get('PayerID'));
//     $payeer_id = Input::get('PayerID');
//     //Execute the payment
//     $result = $payment->execute($execution, $this->_api_context);
   
//     $transactions =$result->getTransactions();
// $related_resources = $transactions[0]->getRelatedResources();
// $sale = $related_resources[0]->getSale();
// $sale_id = $sale->getId();
  
//   $sale_state=  $sale->getState();
//   Session::put('transaction.payment_id',$payment_id);
//   Session::put('transaction.payeer_id',$payeer_id);
//   Session::put('transaction.sale_id',$sale_id);
//   Session::put('transaction.sale_state',$sale_state);
//   Session::put('transaction.buyer_first_name',$fname);
//   Session::put('transaction.buyer_last_name',$lname);
//   Session::put('transaction.buyer_email',$email);
   
//     if ($result->getState() == 'approved') { // payment made
//         return "true";
//         return redirect('/client/project/milestone/pay');
//     }
//     $project_title = session('title');
//     $pid = session('pfid');
    
//     return redirect("/client/project/view/milestone/list/".$pid."/".$project_title."/fail");
// }

 public function getPaymentStatus()
{

    
    
    // Get the payment ID before session clear
    $payment_id = Request::get('paymentId');
    // clear the session payment ID
    Session::forget('paypal_payment_id');
    // if (empty(Input::get('PayerID')) || empty(Input::get('token'))) {
    //   $project_title = session('title');
    // $pid = session('pfid');
    
    // return redirect("/client/project/view/milestone/list/".$pid."/".$project_title."/fail");
    // }
    $payment = Payment::get($payment_id, $this->_api_context);
    // PaymentExecution object includes information necessary 
    // to execute a PayPal account payment. 
    // The payer_id is added to the request query parameters
    // when the user is redirected from paypal back to your site

    $payeer   = $payment->getPayer();
       $payeer_info = $payeer->getPayerInfo();
       $fname = $payeer_info->getFirstName();
       $lname = $payeer_info->getLastName();
       $email = $payeer_info->getEmail();
        

    $execution = new PaymentExecution();
    $execution->setPayerId(Request::get('PayerID'));
    $payeer_id = Request::get('PayerID');
    //Execute the payment
    $result = $payment->execute($execution, $this->_api_context);
   
    $transactions =$result->getTransactions();
$related_resources = $transactions[0]->getRelatedResources();
$sale = $related_resources[0]->getSale();
$sale_id = $sale->getId();
  
  $sale_state=  $sale->getState();
  Session::put('transaction.payment_id',$payment_id);
  Session::put('transaction.payeer_id',$payeer_id);
  Session::put('transaction.sale_id',$sale_id);
  Session::put('transaction.sale_state',$sale_state);
  Session::put('transaction.buyer_first_name',$fname);
  Session::put('transaction.buyer_last_name',$lname);
  Session::put('transaction.buyer_email',$email);
   
        $mentor_id = session()->get('mentor_id');
        $student_id = session()->get('id');
        $skill = session('skill');
        $fee = session('fee');
        
        $review = session('review');
        
    if ($result->getState() == 'approved') { // payment made
    
    DB::insert("insert into payments (mentor_id,student_id,skill_name,fee,paypal_email,status,review_type,created_at) values (?,?,?,?,?,?,?,?)", array(
            
            $mentor_id,
            $student_id,
            $skill,
            $fee,
            $email,
            $sale_state,
            
            $review,
            now()
        ));
        return redirect('/student/message/review/' . $mentor_id . '/' . $skill);
    }
    
     return "fail";
    $project_title = session('title');
    $pid = session('pfid');
    
    return redirect("/student/message/review/' . $mentor_id . '/' . $skill");
}
public function getSale($sale_id='')
{
    
    try {
     
      
      
      //  $payments = Payment::get('PAY-5VE440809E1740635LK6JEDQ', $this->_api_context);
        ;
        $payments = Sale::get('3G257975L96340342', $this->_api_context);
        ;
        dd($payments);
    } catch (Exception $ex) {
        // NOTE: PLEASE DO NOT USE RESULTPRINTER CLASS IN YOUR ORIGINAL CODE. FOR SAMPLE ONLY
        ResultPrinter::printError("List Payments", "Payment", null, $params, $ex);
        exit(1);
    }
}
public function getPaymentDetails($payment_id='')
{
    
    try {
     
      
       
       $payments = Payment::get('PAY-0Y455937UU369481NLLCGXOI', $this->_api_context);
       $payeer   = $payments->getPayer();
       $payeer_info = $payeer->getPayerInfo();
       $fname = $payeer_info->getFirstName();
       $lname = $payeer_info->getLastName();
       $email = $payeer_info->getEmail();
        echo $fname.' '.$lname.' '.$email;
        dd($payments);
    } catch (Exception $ex) {
        // NOTE: PLEASE DO NOT USE RESULTPRINTER CLASS IN YOUR ORIGINAL CODE. FOR SAMPLE ONLY
        ResultPrinter::printError("List Payments", "Payment", null, $params, $ex);
        exit(1);
    }
}
public function refundSale(Request $request,$sale_id,$total,$milestone_id)
{
   
    $amt = new Amount();
$amt->setTotal($total+($total*0.025))
  ->setCurrency('USD');

$refund = new Refund();
$refund->setAmount($amt);

$sale = new Sale();
$sale->setId($sale_id);
$reason = $request->input('reason');



try {
  $refundedSale = $sale->refund($refund, $this->_api_context);
  DB::update("update transactions set state='Refunded',refund_reason='$reason' where sale_id = '$sale_id'");
DB::update("update milestone set status='2',reason='$reason' where pk_id = '$milestone_id'");
  return redirect('/admin/transactions/complete/view');
} catch (PayPal\Exception\PayPalConnectionException $ex) {
  echo $ex->getCode();
  echo $ex->getData();
  die($ex);
} catch (Exception $ex) {
  die($ex);
}
}

public function create_plan()
{
    $plan = new Plan();
    $plan->setName('15 entracts Entrelance')
    ->setDescription('Testing')->setType('infinite');

    $paymentDefinition = new PaymentDefinition();

    $paymentDefinition->setName('Regular Payments')
    ->setType('REGULAR')
    ->setFrequency('Month')
    ->setFrequencyInterval("1")
    ->setCycles(0)
    ->setAmount(new Currency(array('value' => 10, 'currency' => 'USD')));
    

    $merchantPreferences = new MerchantPreferences();
$baseUrl = URL('/');

$merchantPreferences->setReturnUrl(URL('/')."/paypal/execute/agreement/success")
    ->setCancelUrl(URL('/')."/paypal/execute/agreement/cancel")
    ->setAutoBillAmount("no")
    ->setInitialFailAmountAction("CANCEL")
    ->setMaxFailAttempts("1")
    ->setSetupFee(new Currency(array('value' => 10, 'currency' => 'USD')));

    $plan->setMerchantPreferences($merchantPreferences);
    $plan->setPaymentDefinitions(array($paymentDefinition));
    $request = clone $plan;

    try {
        $output = $plan->create($this->_api_context);
        
    }  catch (PayPal\Exception\PayPalConnectionException $ex) {
        echo $ex->getCode();
        echo $ex->getData();
        die($ex);
      } catch (Exception $ex) {
        die($ex);
      }


      try {
        $patch = new Patch();
    
        $value = new PayPalModel('{
               "state":"ACTIVE"
             }');
    
        $patch->setOp('replace')
            ->setPath('/')
            ->setValue($value);
        $patchRequest = new PatchRequest();
        $patchRequest->addPatch($patch);
    
        $output->update($patchRequest, $this->_api_context);
    
        $plan = Plan::get($output->getId(), $this->_api_context);
        
    } catch (Exception $ex) {
        ResultPrinter::printError("Updated the Plan to Active State", "Plan", null, $patchRequest, $ex);
    exit(1);
}

$agreement = new Agreement();
///$time = microtime(true);
// Determining the microsecond fraction
//$microSeconds = sprintf("%06d", ($time - floor($time)) * 1000000);
// Creating our DT object
//$tz = new DateTimeZone("Etc/UTC"); // NOT using a TZ yields the same result, and is actually quite a bit faster. This serves just as an example.
//$dt = new DateTime(date('Y-m-d H:i:s', $time), $tz);
// Compiling the date. Limiting to milliseconds, without rounding

// Formatting according to ISO 8601-extended
//$d= $dt->format("Y-m-d\TH:i:s\Z");
$result = DB::select("SELECT NOW()");

$dt =  date("Y-m-d\TH:i:s\Z",strtotime("+30 day",strtotime($result[0]->{'NOW()'})));
//$dt =  date("Y-m-d\TH:i:s\Z",strtotime($result[0]->{'NOW()'}));


$agreement->setName('Entract Agreement')
    ->setDescription('This agreement is between Entrelance and the buyer for the 15 more entracts, each entract cost 1$')
    ->setStartDate($dt);

    $plan = new Plan();
$plan->setId($output->getId());
$agreement->setPlan($plan);

$payer = new Payer();
$payer->setPaymentMethod('paypal');
$agreement->setPayer($payer);


try {
    $agreement = $agreement->create($this->_api_context);

    $approvalUrl = $agreement->getApprovalLink();
} catch (Exception $ex) {
    exit(1);
}
return $approvalUrl;
return Redirect::away($approvalUrl);
//return $approvalUrl.'\n'.$agreement;



}
public function execute_plan($type)
{
    
   
    if ($type =="success") {
        $token = $_GET['token'];
        
        $agreement = new \PayPal\Api\Agreement();
        try {
            $agreement->execute($token, $this->_api_context);

    } catch (Exception $ex) {
        ResultPrinter::printError("Executed an Agreement", "Agreement", $agreement->getId(), $_GET['token'], $ex);
        exit(1);
    }
    try {
        $agreement = \PayPal\Api\Agreement::get($agreement->getId(), $this->_api_context);
        
        $id = session('id');
        $username = session('username');
        $aid = $agreement->getId();
        $state = $agreement->getState();   
        $rc = $agreement->getAgreementDetails()->getCyclesRemaining();
        $cc =$agreement->getAgreementDetails()->getCyclesCompleted();
        $nb = $agreement->getAgreementDetails()->getNextBillingDate();
        DB::insert("insert into entract_transaction (agreement_id,freelancer_username,state) values('$aid','$username','$state')");
        $result = DB::select("select* from signup where pk_id = '$id'");
        $entract = $result[0]->{'entract'} + 15; 
        $plan = session('plan');
        if($entract>=100)
        {
            DB::update("update users set entract_plan='$plan',entract = '100',entract_updated =CURRENT_TIMESTAMP() where id = '$id'");
        }
        else
        {
            DB::update("update users set entract_plan='$plan',entract = users.entract+15,entract_updated =CURRENT_TIMESTAMP() where id = '$id'");
        }
        
        return redirect('/entract/plans');
    } catch (Exception $ex) {
        ResultPrinter::printError("Get Agreement", "Agreement", null, null, $ex);
        exit(1);
    }
    //return $agreement->getId();
   // return $agreement;

} else {
   return "user cancel the agreement";
}


}

public function cancel_agreement($id)
{
 $agreementStateDescriptor = new AgreementStateDescriptor();
    $agreementStateDescriptor->setNote("Cancelling the agreement");
    $createdAgreement = Agreement::get($id, $this->_api_context);;
   // $createdAgreement->reActivate($agreementStateDescriptor, $this->_api_context);
   // $createdAgreement = Agreement::get('I-HLGK6DE9H654', $this->_api_context);;
   // return $createdAgreement->getAgreementDetails()->getCyclesRemaining().' '.$createdAgreement->getAgreementDetails()->getCyclesCompleted().' '.$createdAgreement->getAgreementDetails()->getNextBillingDate();
    try {
    $id = session('id');
        $createdAgreement->cancel($agreementStateDescriptor, $this->_api_context);
        DB::update("update users set entract_plan='BASIC' where id ='$id'");
        return redirect()->back()->with('message', 'Your Subscription has been Updated');
} catch (Exception $ex) {
    ResultPrinter::printError("Suspended the Agreement", "Agreement", null, $agreementStateDescriptor, $ex);
    exit(1);
}

return redirect()->back()->with('message', 'Some Error Occured');      
}
public function getAgreement()
{
    $params = array('start_date' => date('Y-m-d', strtotime('-15 years')), 'end_date' => date('Y-m-d', strtotime('+5 days')));
    $createdAgreement = Agreement::get('I-KBC1S3NSCEMH', $this->_api_context);
    //$createdAgreement = Agreement::searchTransactions('I-C01W8R06K4EL',$params, $this->_api_context);
   //return $createdAgreement->getAgreementDetails()->setFinalPaymentDate('2018-05-14T10:00:00Z');
  
$createdAgreement = Agreement::get('I-KBC1S3NSCEMH', $this->_api_context);
   return dd($createdAgreement);
   //$output = \PayPal\Api\Webhook::getAll($this->_api_context);
    $output = \PayPal\Api\WebhookEventType::subscribedEventTypes('7B6039666T665894K', $this->_api_context);
    $output = \PayPal\Api\Webhook::get('7B6039666T665894K', $this->_api_context);

    $output = \PayPal\Api\WebhookEvent::get('WH-0AJ93006UJ461313Y-4CY9773247786653N', $this->_api_context);
    $output = $output->getResource();
    if(!empty($output->billing_agreement_id))
    return $output->billing_agreement_id;
    else
    return "this is not a billing agreement hook";
}


}