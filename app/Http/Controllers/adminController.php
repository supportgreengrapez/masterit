<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storhobby;
use Mail;
use Response;
use Auth;
use App\User; 
use App\enquire;
use Illuminate\Http\Request;


class adminController extends Controller
{
    public function login()
    {
        if((session()->has('username') && session()->get('type')=='Admin'))
        {
            return redirect('/admin/list');
        }
        elseif((session()->has('username') && session()->get('type')=='Mentor'))
        {
            return redirect('/mentor/dashboard');
        }elseif((session()->has('username') && session()->get('type')=='Student'))
        {
            return redirect('/student/skill');
        }else{
            return view('admin.login');
        }
        
    }

    public function create_admin_view()
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Admin'))
        {
            return redirect('/admin');
        }
        return view('admin.create_admin');
    }
    public function edit_admin_view($id)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Admin'))
        {
            return redirect('/admin');
        }

        $result = DB::select("select* from admin where pk_id='$id'");
        return view('admin.edit_admin', compact('result'));
    }

    public function edit_admin(Request $request, $id)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Admin'))
        {
            return redirect('/admin');
        }
        $manageapprovels = 0;
        $adminmanagement = 0;
        $mentormanagement = 0;
        $earnings = 0;
        $setting = 0;
        $skill = 0;
        $student = 0;
        if ($request->input('adminmanagement'))
        {
            $adminmanagement = 1;
        }
        if ($request->input('manageapprovels'))
        {
            $manageapprovels = 1;
        }
        if ($request->input('mentormanagement'))
        {
            $mentormanagement = 1;
        }
        if ($request->input('earnings'))
        {
            $earnings = 1;
        }
        if ($request->input('setting'))
        {
            $setting = 1;
        }
        if ($request->input('skill'))
        {
            $skill = 1;
        }
        if ($request->input('student'))
        {
            $student = 1;
        }
        $result = DB::select("select* from admin where pk_id = '$id' ");
        $thumbnail = $result[0]->image;
        if ($request->hasFile('file'))
        {
            $image = $request->file('file');
            $uniqueFileName = uniqid() . $image->getClientOriginalName() . '.' . $image->getClientOriginalExtension();
            $input['imagename'] = time() . '.' . strtolower($image->getClientOriginalExtension());
            $destinationPath = public_path('/storage/images');
            $image->storeAs('public/images', $uniqueFileName);
            $thumbnail = $uniqueFileName;
        }
        DB::table('admin')->where('pk_id', $id)->update(['fname' => $request->input('fname') , 'lname' => $request->input('lname') , 'address' => $request->input('address') , 'image' => $thumbnail, 'phone' => $request->input('phone') , 'manageapprovels' => $manageapprovels, 'mentormanagement' => $mentormanagement, 'earnings' => $earnings, 'settings' => $setting, 'skill' => $skill, 'student' => $student, 'adminmanagement' => $adminmanagement]);
        return redirect('/admin/list');
        // DB::update("update admin set fname=?,lname=?, username=?,address=?, password=?,thumbnail=?,phone=?,manageapprovels=?,mentormanagement=?,earnings=?,settings=?,skill=?,student=?,adminmanagement=? where pk_id=?",array($request->input('fname'),$request->input('lname'),$request->input('username'),$request->input('address'),md5($request->input('password')),$thumbnail,$request->input('phone'),$manageapprovels,$mentormanagement,$earnings,$setting,$skill,$student,$adminmanagement,$id));
        // return redirect('/admin/home');
        
    }
    public function admin_list()
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Admin'))
        {
            return redirect('/admin');
        }
        $result = DB::select("select* from admin");
        return view('admin.dashboard', compact('result'));
    }
    public function create_admin(Request $request)
    {
        $username = $request->input('username');
        $result = DB::select("select* from admin where username = '$username' ");
        if (count($result) > 0)
        {
            if ($request->input('password') == $request->input('cpassword'))
            {
                return Redirect::back()
                    ->withErrors('Password dose not match');
            }
            return Redirect::back()
                ->withErrors('Username already Exist');
        }

        else
        {
            $manageapprovels = 0;
            $adminmanagement = 0;
            $mentormanagement = 0;
            $earnings = 0;
            $setting = 0;
            $skill = 0;
            $student = 0;
            if ($request->input('adminmanagement'))
            {
                $adminmanagement = 1;
            }
            if ($request->input('manageapprovels'))
            {
                $manageapprovels = 1;
            }
            if ($request->input('mentormanagement'))
            {
                $mentormanagement = 1;
            }
            if ($request->input('earnings'))
            {
                $earnings = 1;
            }
            if ($request->input('setting'))
            {
                $setting = 1;
            }
            if ($request->input('skill'))
            {
                $skill = 1;
            }
            if ($request->input('student'))
            {
                $student = 1;
            }
            $thumbnail = "";
            if ($request->hasFile('file'))
            {
                $image = $request->file('file');
                $uniqueFileName = uniqid() . $image->getClientOriginalName();

                $input['imagename'] = time() . '.' . strtolower($image->getClientOriginalExtension());

                $image->storeAs('public/images', $uniqueFileName);
                $thumbnail = $uniqueFileName;
            }

            //     $input=$request->all();
            // $images=array();
            // if($files=$request->file('images')){
            //     foreach($files as $file){
            //         $name=$file->getClientOriginalName();
            //         $file->move('image',$name);
            //         $images[]=$name;
            //     }
            // }
            // return $images;
            DB::insert("insert into admin (fname,lname, username,address,password,image,phone,manageapprovels,mentormanagement,earnings,settings,skill,student,adminmanagement) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?)", array(
                $request->input('fname') ,
                $request->input('lname') ,
                $request->input('username') ,
                $request->input('address') ,
                md5($request->input('password')) ,
                $thumbnail,
                $request->input('phone') ,
                $manageapprovels,
                $mentormanagement,
                $earnings,
                $setting,
                $skill,
                $student,
                $adminmanagement
            ));
        }
        return redirect('/admin/list');
    }
    public function admin_login(Request $request)
    {
        $username = $request->input('username');
        $password = md5($request->input('password'));
        $result = DB::select("select* from admin where username = '$username' and password = '$password'");

        if (count($result) > 0)
        {
            $firstname = $result[0]->fname;
            $lastname = $result[0]->lname;
            $manageapprovels = $result[0]->manageapprovels;
            $adminmanagement = $result[0]->adminmanagement;
            $mentormanagement = $result[0]->mentormanagement;
            $earnings = $result[0]->earnings;
            $setting = $result[0]->settings;
            $skill = $result[0]->skill;
            $student = $result[0]->student;
            $id = $result[0]->pk_id;
            session()
                ->put('username', $username);
            session()->put('firstname', $firstname);
            session()->put('lastname', $lastname);
            session()->put('mentormanagement', $mentormanagement);
            session()->put('adminmanagement', $adminmanagement);
            session()->put('earnings', $earnings);
            session()->put('settings', $setting);
            session()->put('skill', $skill);
            session()->put('student', $student);
            session()->put('manageapprovels', $manageapprovels);
            session()->put('id', $id);
            $request->session()
                ->put('type', 'Admin');
            return redirect('/admin/list');

        }
        else
        {
            return Redirect::back()
                ->withErrors('Email or password does not match');
        }
    }

    public function logout()
    {
        session()
            ->flush();
        return redirect('/admin');
    }

    public function admin_delete($id)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Admin'))
        {
            return redirect('/admin');
        }
        $result = DB::delete("delete from admin where pk_id = '$id'");
        return redirect('/admin/list');
    }

    public function admin_view($id)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Admin'))
        {
            return redirect('/admin');
        }
        $result = DB::select("select* from admin where pk_id = '$id'");
        return view('admin.admin_view', compact('result'));
    }

    public function student_list()
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Admin'))
        {
            return redirect('/admin');
        }

        $result = DB::select("select* from signup where account_type='Student' ");
        return view('admin.student_management', compact('result'));
    }
    public function student_view($id)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Admin'))
        {
            return redirect('/admin');
        }

        $result = DB::select("select* from signup where pk_id = '$id'");
        $result1 = $result[0]->pk_id;
        $result2 = DB::select("select* from student where user_id='$result1'");
        $result3 = DB::select("select* from education where user_id='$result1'");
        
        $result4 = DB::select("select* from signup,payments where payments.student_id='$result1' and payments.mentor_id=signup.pk_id");
        return view('admin.student_view', compact('result', 'result1', 'result2','result3','result4'));
    }
    public function mentor_pending_list()
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Admin'))
        {
            return redirect('/admin');
        }

        $pending = DB::select("select signup.username,signup.fname,signup.lname,signup.status,signup.pk_id,mentor.skill,mentor.price,mentor.experince from signup ,mentor where signup.pk_id=mentor.user_id and signup.account_type = 'Mentor' and signup.status='0'");
        return view('admin.mentor_pending', compact('pending'));
    }

    public function mentor_approved_list()
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Admin'))
        {
            return redirect('/admin');
        }

        $pending = DB::select("select signup.username,signup.fname,signup.lname,signup.status,signup.pk_id,mentor.skill,mentor.price,mentor.experince from signup,mentor where signup.pk_id=mentor.user_id and signup.account_type = 'Mentor' and signup.status='4'");

        

        return view('admin.mentor_approved', compact('pending'));
    }

    public function mentor_unapproved_list()
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Admin'))
        {
            return redirect('/admin');
        }

        $pending = DB::select("select signup.username,signup.fname,signup.lname,signup.status,signup.pk_id,mentor.skill,mentor.price,mentor.experince from signup ,mentor where signup.pk_id=mentor.user_id and signup.account_type = 'Mentor' and signup.status='3'");
        
        return view('admin.mentor_unapproved', compact('pending'));
    }
    public function mentor_suspended_list()
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Admin'))
        {
            return redirect('/admin');
        }

        $pending = DB::select("select signup.username,signup.fname,signup.lname,signup.status,signup.pk_id,mentor.skill,mentor.price,mentor.experince from signup ,mentor where signup.pk_id=mentor.user_id and signup.account_type = 'Mentor' and signup.status='2'");
        
        return view('admin.mentor_suspended', compact('pending'));
    }
    public function update_mentor_status(Request $request)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Admin'))
        {
            return redirect('/admin');
        }

        $id = $request->input('id');
        DB::table('signup')
            ->where('pk_id', $id)->update(['status' => $request->input('status') ]);

    }

    public function skill_list()
    {
        if (!(session()
            ->has('type') && session()
            ->get('type') == 'Admin'))
        {
            return redirect('/admin');
        }

        $result = DB::select("select* from skill");
        return view('admin.skill_list', compact('result'));

    }
    public function create_skill()
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Admin'))
        {
            return redirect('/admin');
        }
        return view('admin.skill_set');

    }
    public function create_skill_form(Request $request)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Admin'))
        {
            return redirect('/admin');
        }

        $thumbnail = "";
        if ($request->hasFile('file'))
        {
            $image = $request->file('file');
            $uniqueFileName = uniqid() . $image->getClientOriginalName();

            $input['imagename'] = time() . '.' . strtolower($image->getClientOriginalExtension());

            $image->storeAs('public/images', $uniqueFileName);
            $thumbnail = $uniqueFileName;
        }
        DB::insert("insert into skill (sname,image) values (?,?)", array(
            $request->input('sname') ,
            $thumbnail
        ));
        return redirect('/admin/skill/list');
    }

    public function edit_skill($id)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Admin'))
        {
            return redirect('/admin');
        }
        $result = DB::select("select* from skill where pk_id='$id'");
        return view('admin.edit_skill', compact('result'));

    }

    public function edit_skill_form(Request $request,$id)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Admin'))
        {
            return redirect('/admin');
        }

        $thumbnail = "";
        if ($request->hasFile('file'))
        {
            $image = $request->file('file');
            $uniqueFileName = uniqid() . $image->getClientOriginalName();

            $input['imagename'] = time() . '.' . strtolower($image->getClientOriginalExtension());

            $image->storeAs('public/images', $uniqueFileName);
            $thumbnail = $uniqueFileName;
        }
        DB::table('skill')->where('pk_id', $id)->update(['sname' => $request->input('sname') , 'image' => $thumbnail]);
        
        return redirect('/admin/skill/list');
    }

    public function skill_delete($id)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Admin'))
        {
            return redirect('/admin');
        }
        $result = DB::delete("delete from skill where pk_id = '$id'");
        return redirect('/admin/skill/list');
    }
    public function mentor_unapproved_view($id)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Admin'))
        {
            return redirect('/admin');
        }

        $result = DB::select("select* from signup where pk_id = '$id'");
        $result1 = $result[0]->pk_id;
        $result2 = DB::select("select* from mentor where user_id='$result1'");
        $result3 = DB::select("select* from education where user_id='$result1'");
        return view('admin.unapproved_mentor_view', compact('result', 'result1', 'result2','result3'));
    }
    public function mentor_approved_view($id)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Admin'))
        {
            return redirect('/admin');
        }
        $result = DB::select("select* from signup where pk_id = '$id'");
        $result1 = $result[0]->pk_id;
        $result2 = DB::select("select* from mentor where user_id='$result1'");
        $result3 = DB::select("select* from education where user_id='$result1'");
        return view('admin.approved_mentor_view', compact('result', 'result1', 'result2','result3'));
    }
    public function mentor_suspended_view($id)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Admin'))
        {
            return redirect('/admin');
        }
        $result = DB::select("select* from signup where pk_id = '$id'");
        $result1 = $result[0]->pk_id;
        $result2 = DB::select("select* from mentor where user_id='$result1'");
        $result3 = DB::select("select* from education where user_id='$result1'");
        return view('admin.suspended_mentor_view', compact('result', 'result1', 'result2','result3'));
    }
    public function mentor_pending_view($id)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Admin'))
        {
            return redirect('/admin');
        }
        $result = DB::select("select* from signup where pk_id = '$id'");
        $result1 = $result[0]->pk_id;
        $result2 = DB::select("select* from mentor where user_id='$result1'");
        
        $result3 = DB::select("select* from education where user_id='$result1'");
        return view('admin.pending_mentor_view', compact('result', 'result1', 'result2','result3'));
    }


    public function chat_view()
    {
        $user = db::select("Select signup.*, (Select message from chats where chats.user_from = '1' and user_to=signup.pk_id  or (user_to='1' and user_from=signup.pk_id) order by chats.id desc limit 1) as lastmessage from signup where account_type = 'Mentor' and status='4'");
        return view('admin.chat_system',compact('user'));
    }
    
    public function mentor_earning()
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Admin'))
        {
            return redirect('/admin');
        }
        
        $result4 = DB::select("select signup.pk_id,signup.fname,signup.lname,payments.fee,payments.created_at,payments.skill_name,payments.review_type,payments.student_id from signup,payments where payments.mentor_id=signup.pk_id");
        return view('admin.mentor_earning',compact('result4'));
    }
    
    public function mentor_payout()
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Admin'))
        {
            return redirect('/admin');
        }
        
        $result4 = DB::select("select DISTINCT  signup.pk_id,signup.fname,signup.lname,signup.username,payments.fee,payments.created_at,payments.mentor_id from signup,payments where payments.mentor_id=signup.pk_id");

        return view('admin.mentor_payout',compact('result4'));
    }
    
     public function masterit_earning()
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Admin'))
        {
            return redirect('/admin');
        }
        
        $result4 = DB::select("select  SUM(fee) from payments");
                $payment = ( $result4[0]->{'SUM(fee)'} * 20)/100;
        return view('admin.masterit_earning',compact('result4','payment'));
    }
    
     public function review_detail($mentor_id)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Admin'))
        {
            return redirect('/login');
        }
        $result = DB::select("SELECT * FROM signup,message_review,payments  WHERE NOT EXISTS (SELECT * FROM answered_review WHERE message_review.pk_id = answered_review.question_id)and signup.pk_id=message_review.user_id and  message_review.mentor_id= '$mentor_id' and payments.mentor_id= '$mentor_id'");   

        $result1 = DB::select("select* from signup,message_review ,payments where signup.pk_id=message_review.user_id and message_review.mentor_id= '$mentor_id' and payments.mentor_id= '$mentor_id'");
        $message= DB::select("select* from message_review where mentor_id= '$mentor_id'");
        return view('admin.review_detail', compact('result','result1','message'));
    }
    
    
    
}

