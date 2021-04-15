<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Pusher\Pusher;
use DB;
use Auth;
use App\User;
class chatController extends Controller
{
    
    public function sendAdminMessage(Request $request)
    {
        $message = $request->input('message');

       
        $pmessage = $message;
        $message =  DB::connection()->getPdo()->quote($message);
        $to = $request->input('selected_user');
        $file = '';
        $name = $file;
        $file = url('/') .'/'.'storage'.'/'.'images'.'/'.$file;
        $from = session('id');
        
        if($name =='')
        {
            DB::insert("insert into chats (user_to,user_from,message) values('$to','$from',$message)");
        }
        else
        {
        DB::insert("insert into chats (user_to,user_from,message,file,name) values('$to','$from',$message,'$file','$name')");
        }
        
     $pusher = new Pusher("081bae5046917cee39dc", "f67af9ca4bbe39244ad1", "770597", array('cluster' => 'ap2'));
 
     $pusher->trigger('private-admin-channel', 'my-event', array('message' => $pmessage,
     'from' => $from,
     'file' => ''));
       return "ok";
    }
    public function sendCustomerMessage(Request $request)
    {
      
        $to = $request->input('selected_user');
        $message = $request->input('message');
        $pmessage = $message;
        $message =  DB::connection()->getPdo()->quote($message);
        
        $file = '';
        $name = $file;
        $file = url('/') .'/'.'storage'.'/'.'images'.'/'.$file;
        $from = session()->get('id');
        if($name =='')
        {
            DB::insert("insert into chats (user_to,user_from,message) values('$to','$from',$message)");
        }
        else
        DB::insert("insert into chats (user_to,user_from,message,file,name) values('$to','$from',$message,'$file','$name')");
     $pusher = new Pusher("081bae5046917cee39dc", "f67af9ca4bbe39244ad1", "770597", array('cluster' => 'ap2'));
 
     $pusher->trigger('private-user-channel'.$to, 'my-event', array('message' => $pmessage,
     'from' => $from,
     'file' => ''));
    }
    public function auth()
    {
     $pusher = new Pusher("081bae5046917cee39dc", "f67af9ca4bbe39244ad1", "770597", array('cluster' => 'ap2'));
     $str= $pusher->socket_auth($_POST['channel_name'], $_POST['socket_id']);
     return $str;
    }
    public function getClientMessages($id)
    {
        
 
        $me = session('id');
        
        $result = DB::select("select* from chats where (user_to='$id' and user_from='$me') or (user_to='$me' and user_from='$id')");
        $str= "<ul>";
        if(count($result)>0)
        {
            foreach($result as $r)
            {
                if($r->user_from == $me)
                {
                    $str .= "<li class='sent'>
                    <img src='http://emilcarlsson.se/assets/mikeross.png' alt='' />
                    <p>".$r->message."</p>
                </li>";
                }
                else
                {
                    $str .= "<li class='replies'>
                    <img src='http://emilcarlsson.se/assets/mikeross.png' alt='' />
                    <p>".$r->message."</p>
                </li>";
                }
            }
            $str.="</ul>";
        }
        return $str;
    }
    public function getAdminMessages($id)
    {
        $me = session()->get('id');
        $result = DB::select("select* from chats where (user_to='$id' and user_from='$me') or (user_to='$me' and user_from='$id')");
        $str= "<ul>";
        if(count($result)>0)
        {
            foreach($result as $r)
            {
                if($r->user_from == $me)
                {
                    $str .= "<li class='sent'>
                    <img src='http://emilcarlsson.se/assets/mikeross.png' alt='' />
                    <p>".$r->message."</p>
                </li>";
                }
                else
                {
                    $str .= "<li class='replies'>
                    <img src='http://emilcarlsson.se/assets/mikeross.png' alt='' />
                    <p>".$r->message."</p>
                </li>";
                }
            }
            $str.="</ul>";
        }
        return $str;
        
    }

    public function getFirstUser()
    {
        $u = user::all()->first();

        return $u->id;
    }
}
