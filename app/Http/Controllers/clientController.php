<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Response;

class clientController extends Controller
{

    public function home_view()
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
        return view('index');
        }
    }
    public function about_us()
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
        return view('about-us');
        }
    }
    public function contact_us()
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
        return view('contact-us');
        }
    }
    public function faq()
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
        return view('FAQ');
        }
    }
    public function how_its_work()
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
        return view('how-it-works');
        }
    }
    public function mentor()
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
        $result = DB::select("select* from mentor,signup where signup.pk_id = mentor.user_id and signup.account_type = 'Mentor' and signup.status = '4'");
        $total = count($result);
        return view('mentor', compact('result', 'total'));
        }
    }
    
        public function Mentor_profiles($id)
    {
        if((session()->has('username') && session()->get('type')=='Admin'))
        {
            return redirect('/admin/list');
        }
        elseif((session()->has('username') && session()->get('type')=='Mentor'))
        {
            return redirect('/mentor/dashboard');
        }
        else{
        $result = DB::select("select* from signup where pk_id = '$id'");
        $result1 = $result[0]->pk_id;
        $result2 = DB::select("select* from mentor where user_id='$result1'");
        
        $result3 = DB::select("select* from education where user_id='$result1'");
        return view('mentor_profile', compact('result', 'result1', 'result2','result3'));
        }
    }
    public function signup()
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
        return view('signup1');
        }
    }
    public function signup2( Request $request)
    {
        return view('signup2');
    }

    public function education()
    {
        return view('signup3');
    }

    public function mentor_signup()
    {
        $result = DB::select("select * from skill");
        return view('mentor-signin', compact('result'));
    }
    public function student_signup()
    {
        $result = DB::select("select * from skill");
        return view('student-signin', compact('result'));
    }
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
        return view('login');
        }
    }
    public function signin(Request $request)
    {
        $request->session()
            ->put('fname', $request->input('fname'));
        $request->session()
            ->put('lname', $request->input('lname'));
        $request->session()
            ->put('username', $request->input('username'));
        $username = $request->input('username');
        $result = DB::select("select* from signup where username = '$username' ");
        if (count($result) > 0)
        {
            return Redirect::back()->withErrors('Username already Exist');
        }else
        return view('signup3', compact('result'));
    }
    public function signin2(Request $request)
    {
        $a = $request->input('account_type');
        if ($request->input('password') == $request->input('cpassword'))
        {
            $request->session()
                ->put('country', $request->input('country'));
            $request->session()
                ->put('password', $request->input('password'));
            $request->session()
                ->put('account_type', $request->input('account_type'));
            if ($request->input('account_type') == "Mentor")
            {
                return redirect('/mentor_signup');
            }
            elseif ($request->input('account_type') == "Student")
            {
                return redirect('/student_signup');
            }
            else
            {
                return Redirect::back()
                    ->withErrors('account_type not defined');
            }
        }
        else
        {
            return Redirect::back()
                ->withErrors('Password does not match');
        }
    }

    public function educations(Request $request)
    {
        $request->session()
            ->push('school', $request->input('school'));
        $request->session()
            ->push('start', $request->input('start'));
        $request->session()
            ->push('end', $request->input('end'));
        $request->session()
            ->push('degree', $request->input('degree'));
        $request->session()
            ->push('study', $request->input('study'));
            return redirect('/education')->with('message', 'Added Successfully');
    }
    public function mentor_signin(Request $request)
    {
        $username = session()->get('username');
        $fname = session()->get('fname');
        $lname = session()->get('lname');
        $password = session()->get('password');
        $country = session()->get('country');
        $school = session()->get('school');
        $start = session()->get('start');
        $end = session()->get('end');
        $area_study = session()->get('study');
        $degree = session()->get('degree');
        $account_type = session()->get('account_type');
        $status = 0;
        $skills = $request->input('skill');
        $final_skills = "";
        foreach ($skills as $skill)
        {
            $final_skills = $final_skills . $skill . ',';
        }
        $final_skills = rtrim($final_skills, ',');
    
$otherskills = $request->input('otherskill');
        $other_skills = "";
         if (!empty($otherskills))
        {
        foreach ($otherskills as $otherskill)
        {
            $other_skills = $other_skills . $otherskill . ',';
        }
        $other_skills = rtrim($other_skills, ',');

}


        $qualification = $request->input('qualification');

        $certificates = $request->input('certificate');

        $final_certificates = "";
        foreach ($certificates as $certificate)
        {
            $final_certificates = $final_certificates . $certificate . ',';
        }
        $final_certificates = rtrim($final_certificates, ',');

        $time = $request->input('time');
        $price = $request->input('price');
        $experince = $request->input('experince');

        $experties = $request->input('experties');
        $final_experties = "";
        foreach ($experties as $expertie)
        {
            $final_experties = $final_experties . $expertie . ',';
        }
        $final_experties = rtrim($final_experties, ',');

        $thumbnail = "";
        if ($request->hasFile('file'))
        {
            $image = $request->file('file');
            $uniqueFileName = uniqid() . $image->getClientOriginalName() . '.' . $image->getClientOriginalExtension();
            $input['imagename'] = time() . '.' . strtolower($image->getClientOriginalExtension());
            $image->storeAs('public/images', $uniqueFileName);
            $thumbnail = $uniqueFileName;
        }
        $question1 = $request->input('question1');
        $question2 = $request->input('question2');
        $question3 = $request->input('question3');
        $description = $request->input('description');
        DB::insert("insert into signup (fname,lname, username, password,country,account_type,status) values (?,?,?,?,?,?,?)", array(
            $fname,
            $lname,
            $username,
            md5($password) ,
            $country,
            $account_type,
            $status
        ));
        $result = DB::select("select* from signup where username = '$username'");
        if (count($result) > 0)
        {
            $user_id = $result[0]->pk_id;
            for($i=0; $i < count($school); $i++ )
            {
                $schl = implode(" ",$school[$i]);
                $strt = implode(" ",$start[$i]);
                $nd = implode(" ",$end[$i]);
                $dgr = implode(" ",$degree[$i]);
                $stdy = implode(" ",$area_study[$i]);
            DB::insert("insert into education (user_id,school,start,end,degree,area_study) values (?,?,?,?,?,?)", array($user_id,$schl,$strt,$nd,$dgr,$stdy));
            }
        }
        DB::insert("insert into mentor (user_id,skill,otherskill,qualification,certificate,time,price,experince,experties,image,description,question1,question2,question3) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?)", array(
            $user_id,
            $final_skills,
            $other_skills,
            $qualification,
            $final_certificates,
            $time,
            $price,
            $experince,
            $final_experties,
            $thumbnail,
            $description,
            $question1,
            $question2,
            $question3
        ));
        $data = array(
            'customer_name' =>$fname,
            'customer_username'=> $username,
            'customer_atype'=> $account_type,
            
            
        );
        Mail::send('confirm_user', $data, function ($message) use($username) {
               
            $message->from('info@masterit.world','MasterIT' );
           
            $message->to('info@masterit.world')->subject('A new User has been signup');
    
        });
        session()->flush();
        return redirect('/login')->with('message', 'Waiting for admin approval');
    }

    public function student_signin(Request $request)
    {

        $username = session()->get('username');
        $fname = session()->get('fname');
        $lname = session()->get('lname');
        $password = session()->get('password');
        $country = session()->get('country');
        $account_type = session()->get('account_type');
        $school = session()->get('school');
        $start = session()->get('start');
        $end = session()->get('end');
        $area_study = session()->get('study');
        $degree = session()->get('degree');
        $status = 1;
        $skills = $request->input('skill');
        $final_skills = "";
        foreach ($skills as $skill)
        {
            $final_skills = $final_skills . $skill . ',';
        }
        $final_skills = rtrim($final_skills, ',');
        $question1 = $request->input('question1');
        $question2 = $request->input('question2');
        $question3 = $request->input('question3');
        $thumbnail = "";
        if ($request->hasFile('file'))
        {
            $image = $request->file('file');
            $uniqueFileName = uniqid() . $image->getClientOriginalName() . '.' . $image->getClientOriginalExtension();
            $input['imagename'] = time() . '.' . strtolower($image->getClientOriginalExtension());
            $image->storeAs('public/images', $uniqueFileName);
            $thumbnail = $uniqueFileName;
        }
        DB::insert("insert into signup (fname,lname, username, password,country,account_type,status) values (?,?,?,?,?,?,?)", array(
            $fname,
            $lname,
            $username,
            md5($password) ,
            $country,
            $account_type,
            $status
        ));
        $result = DB::select("select* from signup where username = '$username'");
        if (count($result) > 0)
        {
            $user_id = $result[0]->pk_id;
            for($i=0; $i < count($school); $i++ )
            {
                $schl = implode(" ",$school[$i]);
                $strt = implode(" ",$start[$i]);
                $nd = implode(" ",$end[$i]);
                $dgr = implode(" ",$degree[$i]);
                $stdy = implode(" ",$area_study[$i]);
            DB::insert("insert into education (user_id,school,start,end,degree,area_study) values (?,?,?,?,?,?)", array($user_id,$schl,$strt,$nd,$dgr,$stdy));
            }
            DB::insert("insert into student (user_id,skill,image,question1,question2,question3) values (?,?,?,?,?,?)", array(
                $user_id,
                $final_skills,
                $thumbnail,
                $question1,
                $question2,
                $question3
            ));
        }
        $password = md5($password);
        $result = DB::select("select* from signup where username = '$username' and password = '$password' and account_type = 'Student'");

        if (count($result) > 0)
        {
            $firstname = $result[0]->fname;
            $lastname = $result[0]->lname;
            $id = $result[0]->pk_id;
            session()
                ->put('username', $username);
            session()->put('firstname', $firstname);
            session()->put('lastname', $lastname);
            session()->put('id', $id);
            $request->session()
                ->put('type', 'Student');
            return redirect('/student/dashboard');
            // return "true";
            
        }
        return redirect('/student/dashboard');
    }

    public function mentor_login(Request $request)
    {
        $username = $request->input('username');
        $password = md5($request->input('password'));
        $result = DB::select("select* from signup where username = '$username' and password = '$password' and account_type = 'Mentor'and status = '4'");

        if (count($result) > 0)
        {
            $firstname = $result[0]->fname;
            $lastname = $result[0]->lname;
            $id = $result[0]->pk_id;
            session()
                ->put('username', $username);
            session()->put('firstname', $firstname);
            session()->put('lastname', $lastname);
            session()->put('id', $id);
            $request->session()
                ->put('type', 'Mentor');
            return redirect('/mentor/dashboard');

        }
        else
        {
            return Redirect::back()
                ->withErrors('Status or Email or password does not match');
        }
    }

    public function student_login(Request $request,$o = 0)
    {
        $username = $request->input('username');
        $password = md5($request->input('password'));
        $result = DB::select("select* from signup where username = '$username' and password = '$password' and account_type = 'Student'");

        if (count($result) > 0)
        {
            $firstname = $result[0]->fname;
            $lastname = $result[0]->lname;
            $id = $result[0]->pk_id;
            session()
                ->put('username', $username);
            session()->put('firstname', $firstname);
            session()->put('lastname', $lastname);
            session()->put('id', $id);
            $request->session()
                ->put('type', 'Student');
        $skill = DB::select("select * from mentor_hire where user_id='$id'");
        $result = db::select("SELECT * FROM `skill` LIMIT 6 OFFSET $o");
        return redirect('/student/skill');
            // return "true";
            
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
        return redirect('/login');
    }

    public function mentor_dashboard()
    {
        if (!(session()
            ->has('type') && session()
            ->get('type') == 'Mentor'))
        {
            return redirect('/login');
        }
        return view('Mentor.dashboard');
    }

    public function mentor_profile($id)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Mentor'))
        {
            return redirect('/login');
        }
        $result = DB::select("select* from signup where pk_id = '$id'");
        $result1 = $result[0]->pk_id;
        $result2 = DB::select("select* from mentor where user_id='$result1'");
        
        $result3 = DB::select("select* from education where user_id='$result1'");
        return view('Mentor.mentor_profile', compact('result', 'result1', 'result2','result3'));
    }

    public function edit_mentor_profile($id)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Mentor'))
        {
            return redirect('/login');
        }
        $result = DB::select("select* from mentor,signup where signup.pk_id='$id' and mentor.user_id= signup.pk_id");
        $result1 = DB::select("select* from skill");
        return view('Mentor.edit_mentor_profile', compact('result', 'result1'));
    }
    public function edit_mentor_education($id)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Mentor'))
        {
            return redirect('/login');
        }
        $result = DB::select("select* from education where pk_id='$id'");
        return view('Mentor.edit_mentor_education', compact('result'));
    }

    public function edit_mentors_education(Request $request, $id)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Mentor'))
        {
            return redirect('/login');
        }
        $mentor_id = session()->get('id');
        DB::table('education')
            ->where('pk_id', $id)->update(['school' => $request->input('school') , 'start' => $request->input('start') ,'end' => $request->input('end'),'degree' => $request->input('degree'),'area_study' => $request->input('area_study') ]);
       return redirect('/mentor_profile/' . $mentor_id );
    }

    public function delete_mentors_education(Request $request, $id)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Mentor'))
        {
            return redirect('/login');
        }
        $result = DB::delete("delete from education where pk_id='$id'");
        return redirect()->back();
    }
    public function edit_student_profile($id)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Student'))
        {
            return redirect('/login');
        }
        $result = DB::select("select* from student,signup where signup.pk_id='$id' and student.user_id= signup.pk_id");

        return view('Student.edit_student', compact('result'));
    }

    public function change_student_password($id)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Student'))
        {
            return redirect('/login');
        }
        
        
        return view('Student.change_password');
    }

    public function edit_student_password(Request $request, $id)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Student'))
        {
            return redirect('/login');
        }
        if ($request->input('password') == $request->input('cpassword'))
        {
            DB::table('signup')
            ->where('pk_id', $id)->update(['password' => md5($request->input('password'))]);
            return redirect('/student/profile/' . $id );
        }
        else
        {
            return Redirect::back()
                ->withErrors('Password does not match');
        }
        
        
    }


    public function student_add_education()
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Student'))
        {
            return redirect('/login');
        }
            return view('Student.add_education');
    }

    public function student_add_educations(Request $request)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Student'))
        {
            return redirect('/login');
        }

        $school = $request->input('school');
        $start = $request->input('start');
        $end = $request->input('end');
        $degree = $request->input('degree');
        $area_study = $request->input('area_study');
        
        $student_id = session()->get('id');
            DB::insert("insert into education (user_id,school,start,end,degree,area_study) values (?,?,?,?,?,?)", array($student_id,$school,$start,$end,$degree,$area_study));

            return redirect('/student/profile/' . $student_id );
    }


    public function edit_student_education($id)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Student'))
        {
            return redirect('/login');
        }

        $result = DB::select("select* from education where pk_id='$id'");
        return view('Student.edit_student_education', compact('result'));
    }

    public function edit_students_education(Request $request, $id)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Student'))
        {
            return redirect('/login');
        }
        $student_id = session()->get('id');
        DB::table('education')
            ->where('pk_id', $id)->update(['school' => $request->input('school') , 'start' => $request->input('start') ,'end' => $request->input('end'),'degree' => $request->input('degree'),'area_study' => $request->input('area_study') ]);
            return redirect('/student/profile/' . $student_id );
    }

    public function delete_student_education($id)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Student'))
        {
            return redirect('/login');
        }
        $result = DB::delete("delete from education where pk_id='$id'");
        return redirect()->back();
    }

    public function change_mentor_password($id)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Mentor'))
        {
            return redirect('/login');
        }
        
        
        return view('Mentor.change_password');
    }

    public function edit_mentor_password(Request $request, $id)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Mentor'))
        {
            return redirect('/login');
        }
        if ($request->input('password') == $request->input('cpassword'))
        {
            DB::table('signup')
            ->where('pk_id', $id)->update(['password' => md5($request->input('password'))]);
            return redirect('/mentor_profile/' . $id );
        }
        else
        {
            return Redirect::back()
                ->withErrors('Password does not match');
        }
        
        
    }

    public function mentor_add_education()
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Mentor'))
        {
            return redirect('/login');
        }
            return view('Mentor.add_education');
    }

    public function mentor_add_educations(Request $request)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Mentor'))
        {
            return redirect('/login');
        }

        $school = $request->input('school');
        $start = $request->input('start');
        $end = $request->input('end');
        $degree = $request->input('degree');
        $area_study = $request->input('area_study');
        
        $mentor_id = session()->get('id');
            DB::insert("insert into education (user_id,school,start,end,degree,area_study) values (?,?,?,?,?,?)", array($mentor_id,$school,$start,$end,$degree,$area_study));

            return redirect('/mentor_profile/' . $mentor_id );
    }
    public function edit_student(Request $request, $id)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Student'))
        {
            return redirect('/login');
        }
        $skills = $request->input('skill');
        $final_skills = "";
        foreach ($skills as $skill)
        {
            $final_skills = $final_skills . $skill . ',';
        }
        $final_skills = rtrim($final_skills, ',');

        $thumbnail = "";
        if ($request->hasFile('file'))
        {
            $image = $request->file('file');
            $uniqueFileName = uniqid() . $image->getClientOriginalName() . '.' . $image->getClientOriginalExtension();
            $input['imagename'] = time() . '.' . strtolower($image->getClientOriginalExtension());
            $image->storeAs('public/images', $uniqueFileName);
            $thumbnail = $uniqueFileName;
        }
        DB::table('signup')
            ->where('pk_id', $id)->update(['fname' => $request->input('fname') , 'lname' => $request->input('lname') ,'country' => $request->input('country') ]);
        DB::table('student')
            ->where('user_id', $id)->update(['skill' => $final_skills,'image' => $thumbnail]);

        return redirect('/student/profile/' . $id );
    }

    public function edit_mentors_profile(Request $request, $id)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Mentor'))
        {
            return redirect('/login');
        }


        $skills = $request->input('skill');
        $final_skills = "";
        foreach ($skills as $skill)
        {
            $final_skills = $final_skills . $skill . ',';
        }
        $final_skills = rtrim($final_skills, ',');


        $otherskills = $request->input('otherskill');
        $other_skills = "";
         if (!empty($otherskills))
        {
        foreach ($otherskills as $otherskill)
        {
            $other_skills = $other_skills . $otherskill . ',';
        }
        $other_skills = rtrim($other_skills, ',');

}

        $qualification = $request->input('qualification');

        $certificates = $request->input('certificate');
        $final_certificates = "";
        foreach ($certificates as $certificate)
        {
            $final_certificates = $final_certificates . $certificate . ',';
        }
        $final_certificates = rtrim($final_certificates, ',');

        $time = $request->input('time');
        $price = $request->input('price');
        $experince = $request->input('experince');
        $experties = $request->input('experties');
        $final_experties = "";
        foreach ($experties as $expertie)
        {
            $final_experties = $final_experties . $expertie . ',';
        }
        $final_experties = rtrim($final_experties, ',');

        $thumbnail = "";
        if ($request->hasFile('file'))
        {
            $image = $request->file('file');
            $uniqueFileName = uniqid() . $image->getClientOriginalName() . '.' . $image->getClientOriginalExtension();
            $input['imagename'] = time() . '.' . strtolower($image->getClientOriginalExtension());
            $image->storeAs('public/images', $uniqueFileName);
            $thumbnail = $uniqueFileName;
        }
        $description = $request->input('description');
        DB::table('signup')
            ->where('pk_id', $id)->update(['fname' => $request->input('fname') , 'lname' => $request->input('lname'), 'country' => $request->input('country') ]);
        DB::table('mentor')
            ->where('user_id', $id)->update(['skill' => $final_skills, 'otherskill' => $other_skills, 'qualification' => $qualification, 'certificate' => $final_certificates, 'time' => $time, 'price' => $price,'experince' => $experince, 'experties' => $final_experties, 'image' => $thumbnail, 'description' => $description]);

        return redirect('/mentor_profile/' .$id );
    }

    public function student_dashboard($o = 0)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Student'))
        {
            return redirect('/login');
        }
        $result = db::select("SELECT * FROM `skill` LIMIT 6 OFFSET $o");
        return view('Student.dashboard', compact('result'));
    }

    public function show_skills_ajax($o)
    {

        $result = db::select("SELECT * FROM skill LIMIT 6 OFFSET $o");
        $str = "";
        foreach ($result as $s)
        {
            $str = $str . '<div class="col-lg-4 col-md-4 col-sm-12"> <a href="#">
         <div class="cardsout">
           <div class="cardsinimg"> <img src="" alt="img"> </div>
           <div class="cardsintext">
             <p>' . $s->sname . '</p>
           </div>
         </div>
         </a> 
       </div>';
        }
        return $str;
    }

    public function select_mentor($skills)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Student'))
        {
            return redirect('/login');
        }
        $result = DB::select("select* from mentor,signup where signup.pk_id = mentor.user_id and mentor.skill LIKE '%$skills%'");
        return view('Student.select-mentor', compact('result', 'skills'));
    }

    public function select_mentor_view($id, $skills)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Student'))
        {
            return redirect('/login');
        }

        $result = DB::select("select* from signup where pk_id = '$id'");
        $result1 = $result[0]->pk_id;
        $result2 = DB::select("select* from mentor where user_id='$result1'");
        
        $result3 = DB::select("select* from education where user_id='$result1'");
        return view('Student.Mentor-Profile', compact('result', 'result1', 'result2','result3', 'skills'));
    }

    public function time_track($id, $skills)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Student'))
        {
            return redirect('/login');
        }
        $result = DB::select("select* from mentor_hire,mentor,signup where mentor_hire.mentor_id = signup.pk_id and signup.pk_id = mentor.user_id and mentor.skill LIKE '%$skills%' order by mentor_hire.pk_id DESC");
        

        $student_id = session()->get('id');
        $time = DB::select("select* from time_tracker where student_id='$student_id' and skill='$skills'");
        $note = DB::select( DB::raw("SELECT * FROM notes WHERE student_id = :value"), array(
            'value' => $student_id,
          ));
        return view('Student.time-tracker', compact('result',  'skills', 'time','note','id'));
    }


    public function student_contact($id , $skills)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Student'))
        {
            return redirect('/login');
        }
        $result = DB::select("select* from mentor where user_id='$id'");
        $result1 = $result[0]->price;

        $chat=($result1*5)/100;
        $video=($result1*15)/100;
        $audio=($result1*10)/100;
        
            session()->put('mentor_id', $id);
            
            session()->put('skill', $skills);
            $student_id = session()->get('id');
        return view('Student.contact-with', compact('result','id','chat','video','audio','skills'));
    }

    public function student_chat_review($id , $skills)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Student'))
        {
            return redirect('/login');
        }

        $student_id = session()->get('id');
        $result= DB::select("select* from signup,answered_review where signup.pk_id=answered_review.mentor_id and signup.pk_id='$id' and answered_review.student_id= '$student_id' and answered_review.skill_name='$skills'");


        // $result1 = DB::select("SELECT * FROM signup,message_review  WHERE NOT EXISTS (SELECT * FROM answered_review WHERE message_review.pk_id = answered_review.question_id)and signup.pk_id=message_review.mentor_id and  message_review.student_id= '$student_id'");   


$result1= DB::select("select* from signup,message_review WHERE NOT EXISTS (SELECT * FROM answered_review WHERE message_review.pk_id = answered_review.question_id) and  signup.pk_id=message_review.user_id and message_review.user_id= '$student_id' and message_review.skill_name='$skills'");


        return view('Student.one_time_review', compact('result','skills','result1'));

    }

    public function student_message_review($id , $skills)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Student'))
        {
            return redirect('/login');
        }
        $result = DB::select("select* from signup where pk_id='$id'");
        return view('Student.message_review', compact('result','skills','id'));
    }

    public function student_message_reviews(Request $request,$mentor_id,$skills)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Student'))
        {
            return redirect('/login');
        }
        $review_type="Text Message Review";
        $student_id = session()->get('id');
        $fname = session()->get('fname');
        $lname = session()->get('lname');
        $mname = $request->input('mname');
        $skill = $request->input('skill');
        $question = $request->input('question');
$result = DB::select("select* from signup where pk_id='$mentor_id'");
$result1 = $result[0]->username;

        DB::insert("insert into message_review (user_id,mentor_id,mentor_name,skill_name,question,review_type,created_at) values (?,?,?,?,?,?,?)", array(
            $student_id,
            $mentor_id,
            $mname,
            $skill,
            $question,
            $review_type,
            now()
        ));
        
        $data = array(
            'mentor_name' =>$mname,
            'customer_name' =>$fname + $lname,
            'customer_username'=> $result1,
            
            
        );
        Mail::send('question_email', $data, function ($message) use($result1) {
               
            $message->from('info@masterit.world','MasterIT' );
           
            $message->to($result1)->subject('New Question');
    
        });
        return redirect('/student/time/track/' . $mentor_id . '/' . $skills);
    }
    public function notes(Request $request, $id,$skills)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Student'))
        {
            return redirect('/login');
        }
        $heading = $request->input('heading');
        $description = $request->input('description');
        $student_id = session()->get('id');

        DB::insert("insert into notes (header,description,student_id) values (?,?,?)", array(
            $heading,
            $description,
            $student_id
        ));
        return redirect('/student/time/track/' . $id . '/' . $skills);
    }
    public function student_skill($o=0)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Student'))
        {
            return redirect('/login');
        }
       $student_id = session()->get('id');
       $skill = DB::select("select * from mentor_hire,skill where skill.sname = mentor_hire.skill_name and mentor_hire.user_id='$student_id'");
       $result = DB::select("SELECT * FROM skill WHERE NOT EXISTS (SELECT * FROM mentor_hire WHERE skill.sname = mentor_hire.skill_name)");   
    return view('Student.skill-sets', compact('result','skill'));
    }


    public function time_tracks(Request $request, $id, $skills)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Student'))
        {
            return redirect('/login');
        }
        $student_id = session()->get('id');
        $counter = $request->input('counter');
        $description = $request->input('description');
        $counter = gmdate("H:i:s", $counter);

        DB::insert("insert into time_tracker (time,student_id,mentor_id,skill,description,created_at) values (?,?,?,?,?,?)", array(
            $counter,
            $student_id,
            $id,
            $skills,
            $description,
            now()
        ));
        return redirect('/student/time/track/' . $id . '/' . $skills);
    }

    public function mentor_hire(Request $request, $id, $skills)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Student'))
        {
            return redirect('/login');
        }

        $student_id = session()->get('id');
        $status = 0;

        DB::insert("insert into mentor_hire (user_id,mentor_id,skill_name,status) values (?,?,?,?)", array(
            $student_id,
            $id,
            $skills,
            $status
        ));
        return redirect('/student/time/track/' . $id . '/' . $skills);
    }

    public function update_student_status(Request $request)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Mentor'))
        {
            return redirect('/login');
        }
        $id = $request->input('id');
        DB::table('signup')
            ->where('pk_id', $id)->update(['status' => $request->input('status') ]);

    }

    public function new_student_list()
    {
        if (!(session()
            ->has('type') && session()
            ->get('type') == 'Mentor'))
        {
            return redirect('/login');
        }
        $rejected = DB::select("select* from signup,mentor_hire where signup.pk_id = mentor_hire.user_id and signup.account_type = 'Student' and signup.status ='0'");
        return view('Mentor.new_student_list', compact('rejected'));
    }
    public function rejected_student_list()
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Mentor'))
        {
            return redirect('/login');
        }

        $rejected = DB::select("select* from signup,mentor_hire where signup.pk_id = mentor_hire.user_id and  signup.account_type = 'Student' and  signup.status='2'");
        return view('Mentor.rejected_students', compact('rejected'));
    }
    public function approved_student_list()
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Mentor'))
        {
            return redirect('/login');
        }

        $rejected = DB::select("select* from signup,mentor_hire where signup.pk_id = mentor_hire.user_id and  signup.account_type = 'Student' and signup.status='1'");
        return view('Mentor.approved_students', compact('rejected'));
    }

    public function student_new_view($id)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Mentor'))
        {
            return redirect('/login');
        }
        $result = DB::select("select* from signup where pk_id = '$id'");
        $result1 = $result[0]->pk_id;
        $result2 = DB::select("select* from student where user_id='$result1'");
        $result3 = DB::select("select* from education where user_id='$result1'");
        return view('Mentor.new_student_view', compact('result', 'result1', 'result2','result3'));
    }
    public function student_approved_view($id)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Mentor'))
        {
            return redirect('/login');
        }
        $result = DB::select("select* from signup where pk_id = '$id'");
        $result1 = $result[0]->pk_id;
        $result2 = DB::select("select* from student where user_id='$result1'");
        $result3 = DB::select("select* from education where user_id='$result1'");
        return view('Mentor.approved_student_view', compact('result', 'result1', 'result2','result3'));
    }
    public function student_rejected_view($id)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Mentor'))
        {
            return redirect('/login');
        }
        $result = DB::select("select* from signup where pk_id = '$id'");
        $result1 = $result[0]->pk_id;
        $result2 = DB::select("select* from student where user_id='$result1'");
        $result3 = DB::select("select* from education where user_id='$result1'");
        return view('Mentor.rejected_student_view', compact('result', 'result1', 'result2','result3'));
    }

    public function student_profile($id)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Student'))
        {
            return redirect('/login');
        }
        $result = DB::select("select* from signup where pk_id = '$id'");
        $result1 = $result[0]->pk_id;
        $result2 = DB::select("select* from student where user_id='$result1'");
        $result3 = DB::select("select* from education where user_id='$result1'");
        return view('Student.student-Profile', compact('result', 'result1', 'result2','result3'));
    }

    public function student_card_detail($id)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Student'))
        {
            return redirect('/login');
        }
        $Primary = DB::select("select* from student_card where user_id='$id' and atype='Primary'");
        $Secondary = DB::select("select* from student_card where user_id='$id' and atype='Secondary'");
        return view('Student.card_detail', compact('Primary', 'Secondary'));
    }

    public function student_card($id)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Student'))
        {
            return redirect('/login');
        }
        $Primary = "Primary";
        $result = DB::select("select* from student_card where user_id='$id' and atype='$Primary'");

        return view('Student.add_card', compact('result'));
    }

    public function edit_student_card($id)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Student'))
        {
            return redirect('/login');
        }
        $result = DB::select("select* from student_card where pk_id='$id'");

        return view('Student.edit_card', compact('result'));
    }

    public function edit_student_card_form(Request $request ,$id)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Student'))
        {
            return redirect('/login');
        }
        $student_id = session()->get('id');
        DB::table('student_card')
            ->where('pk_id', $id)->update(['fname' => $request->input('fname'),'lname' => $request->input('lname'),'ctype' => $request->input('ctype'),'cnumb' => $request->input('cnumb'),'expiry' => $request->input('expiry'),'scode' => $request->input('scode'),'zcode' => $request->input('zcode'),'cvv' => $request->input('cvv'),'address' => $request->input('address'),'country' => $request->input('country'),'state' => $request->input('state'),'city' => $request->input('city'),'phone' => $request->input('phone'),'user_id' =>$student_id ]);

            return redirect('/student/card/' . $student_id);
    }
    public function student_card_form(Request $request, $id)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Student'))
        {
            return redirect('/login');
        }

        DB::insert("insert into student_card (fname,lname,ctype,cnumb,expiry,scode,zcode,cvv,address,country,state,city,phone,atype,user_id) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)", array(
            $request->input('fname') ,
            $request->input('lname') ,
            $request->input('ctype') ,
            $request->input('cnumb') ,
            $request->input('expiry') ,
            $request->input('scode') ,
            $request->input('zcode') ,
            $request->input('cvv') ,
            $request->input('address') ,
            $request->input('country') ,
            $request->input('state') ,
            $request->input('city') ,
            $request->input('phone') ,
            $request->input('atype') ,
            $id
        ));
        $Primary = DB::select("select* from student_card where user_id='$id' and atype='Primary'");
        $Secondary = DB::select("select* from student_card where user_id='$id' and atype='Secondary'");
        return view('Student.card_detail', compact('Primary', 'Secondary'));
    }

    public function mentor_setting()
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Mentor'))
        {
            return redirect('/login');
        }
        $user_id = session()->get('id');
        $result = DB::select("select* from mentor_card where user_id='$user_id'");
        return view('Mentor.setting', compact('result'));
    }

    public function mentor_card($id)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Mentor'))
        {
            return redirect('/login');
        }
        $Primary = "Primary";
        $result = DB::select("select* from mentor_card where user_id='$id' and atype='$Primary'");

        return view('Mentor.add_mentor_card', compact('result'));
    }

    public function edit_mentor_card_form(Request $request ,$id)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Mentor'))
        {
            return redirect('/login');
        }
        $mentor_id = session()->get('id');
        DB::table('mentor_card')
            ->where('pk_id', $id)->update(['fname' => $request->input('fname'),'lname' => $request->input('lname'),'ctype' => $request->input('ctype'),'cnumb' => $request->input('cnumb'),'expiry' => $request->input('expiry'),'scode' => $request->input('scode'),'zcode' => $request->input('zcode'),'cvv' => $request->input('cvv'),'address' => $request->input('address'),'country' => $request->input('country'),'state' => $request->input('state'),'city' => $request->input('city'),'phone' => $request->input('phone'),'user_id' =>$mentor_id ]);

            return redirect('/mentor/setting');
    }

    public function edit_mentor_card($id)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Mentor'))
        {
            return redirect('/login');
        }
        $result = DB::select("select* from mentor_card where pk_id='$id'");
        return view('Mentor.edit_mentor_card', compact('result'));
       
    }
    public function mentor_card_form(Request $request, $id)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Mentor'))
        {
            return redirect('/login');
        }

        DB::insert("insert into mentor_card (fname,lname,ctype,cnumb,expiry,scode,zcode,cvv,address,country,state,city,phone,atype,user_id) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)", array(
            $request->input('fname') ,
            $request->input('lname') ,
            $request->input('ctype') ,
            $request->input('cnumb') ,
            $request->input('expiry') ,
            $request->input('scode') ,
            $request->input('zcode') ,
            $request->input('cvv') ,
            $request->input('address') ,
            $request->input('country') ,
            $request->input('state') ,
            $request->input('city') ,
            $request->input('phone') ,
            $request->input('atype') ,
            $id
        ));
        return redirect('/mentor/setting/');
    }

    public function student_detailed()
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Mentor'))
        {
            return redirect('/login');
        }
        $user_id = session()->get('id');
        $result = DB::select("select* from time_tracker,signup where time_tracker.mentor_id='$user_id' and time_tracker.student_id=signup.pk_id");
        return view('Mentor.student_detail', compact('result'));
    }
    public function delete_mentor_card($id)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Mentor'))
        {
            return redirect('/login');
        }
        $result = DB::delete("delete from mentor_card where pk_id='$id'");
        return redirect()->back();
    }

    public function delete_card($id)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Student'))
        {
            return redirect('/login');
        }
        $result = DB::delete("delete from student_card where pk_id='$id'");
        return redirect()->back();
    }

    public function intialize_payment($id,$skills,$review)
    
    {
        $result = DB::select("select* from mentor where user_id='$id'");

        $result1 = $result[0]->price;

        $chat=($result1*5)/100;
        $video=($result1*15)/100;
        $audio=($result1*10)/100;
        
        if($review=="Live Chat")
        {
            $student_id = session()->get('id');
        $mentor_id = $id;
        $skill = "$skills";
        $review_type = $review;
        $due_date = "12-04-2019";
        $charge_fee = $result1;
        $instruction = "instruction";

        }

        if($review=="Live Video Call")
        {
            $student_id = session()->get('id');
        $mentor_id = $id;
        $skill = "$skills";
        $review_type = $review;
        $due_date = "12-04-2019";
        $charge_fee = $result1;
        $instruction = "instruction";

        }
        if($review=="Live Audio Call")
        {
            $student_id = session()->get('id');
        $mentor_id = $id;
        $skill = "$skills";
        $review_type = $review;
        $due_date = "12-04-2019";
        $charge_fee = $result1;
        $instruction = "instruction";

        }

        if($review=="Audio Review")
        {
            $student_id = session()->get('id');
        $mentor_id = $id;
        $skill = "$skills";
        $review_type = $review;
        $due_date = "12-04-2019";
        $charge_fee = $audio;
        $instruction = "instruction";

        }

        if($review=="Video Review")
        {
            $student_id = session()->get('id');
        $mentor_id = $id;
        $skill = "$skills";
        $review_type = $review;
        $due_date = "12-04-2019";
        $charge_fee = $video;
        $instruction = "instruction";

        }

        if($review=="Chat Review")
        {
            $student_id = session()->get('id');
        $mentor_id = $id;
        $skill = "$skills";
        $review_type = $review;
        $due_date = "12-04-2019";
        $charge_fee = $chat;
        $instruction = "instruction";

        }

        $paypal = new PayPalController();
      return  $paypal->postPayment($student_id,$mentor_id,$skill,$review_type,$due_date,$charge_fee,$instruction);
    }


    public function verify_code($username,$code)
        {
            $result = DB::select("select* from reset_password where username= '$username' and verification_code= '$code' and TIMESTAMPDIFF(MINUTE,reset_password.created_at,NOW()) <=30 ");
            
            
            if(count($result)>0)
            {
                return view('change_password',compact('username'));
            }
            else
            return "The Verification code is expired";
        }
    public function reset_password_view() {
            
        return view('password_reset');
    
    }
    
           public function reset_password(Request $request) {


       $username = $request->input('username');
       $result = DB::select("select* from signup where username = '$username'");
       if(count($result)>0)
       {
           $vcode = uniqid();
           DB::insert("insert into reset_password (username,verification_code) values('$username','$vcode') ");
           $customer_name= $result[0]->{'fname'};
           $data = array(
               'customer_name' =>$customer_name,
               'customer_username'=> $username,
               'customer_verification_code'=> $vcode,
               
               
           );
           Mail::send('email_reset_password', $data, function ($message) use($username) {
               
                       $message->from('info@masterit.world','MasterIT' );
                      
                       $message->to($username)->subject('Password Reset Confirmation Link');
               
                   });
           return redirect()->back()->with('message', 'A Password reset link sent to your email');
       } 
       else
       {
           return Redirect::back()->withErrors('Username not found');
       }

       

           
        
        }
        
             public function password_change(Request $request,$username)
{
   $password = md5($request->input('password'));
   DB::update("update signup set password ='$password' where username='$username'");
   return redirect('/login')->with('message', 'Your Password has been changed Successfully');
}

    public function student_text_message()
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Mentor'))
        {
            return redirect('/login');
        }
        $mentor_id = session()->get('id');
        $result = DB::select("SELECT * FROM signup,message_review  WHERE NOT EXISTS (SELECT * FROM answered_review WHERE message_review.pk_id = answered_review.question_id)and signup.pk_id=message_review.user_id and  message_review.mentor_id= '$mentor_id'");   

        $result1 = DB::select("select* from signup,message_review where signup.pk_id=message_review.user_id and message_review.mentor_id= '$mentor_id'");
        $message= DB::select("select* from message_review where mentor_id= '$mentor_id'");
        return view('Mentor.text_message', compact('result','result1','result2','message'));
    }

    public function mentor_new_answered(Request $request,$pk_id)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Mentor'))
        {
            return redirect('/login');
        }
        
        $mentor_id = session()->get('id');
        $answered = $request->input('answered');
        $review_type="Text Message Review";
        $result = DB::select("select* from signup,message_review where signup.pk_id=message_review.user_id and  message_review.mentor_id= '$mentor_id' and message_review.pk_id= '$pk_id'");

         $skill = $result[0]->skill_name;
         $question=$result[0]->question;
         $user_id=$result[0]->user_id;
        DB::insert("insert into answered_review (mentor_id,student_id,question_id,skill_name,question,answered,review_type,created_at) values (?,?,?,?,?,?,?,?)", array(
           $mentor_id,
           $user_id,
           $pk_id,
           $skill,
           $question,
           $answered,
           $review_type,
           now()    
        ));
        return redirect('/mentor/student/text/message');
    }

    public function mentor_more_answered(Request $request,$question_id)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Mentor'))
        {
            return redirect('/login');
        }
        
        $mentor_id = session()->get('id');
        $answered = $request->input('answered');
        $review_type="Text Message Review";
        $result = DB::select("select* from signup,message_review where signup.pk_id=message_review.user_id and  message_review.mentor_id= '$mentor_id' and message_review.pk_id= '$question_id'");

         $skill = $result[0]->skill_name;
         $question=$result[0]->question;
         $user_id=$result[0]->user_id;
         DB::insert("insert into answered_review (mentor_id,student_id,question_id,skill_name,question,answered,review_type,created_at) values (?,?,?,?,?,?,?,?)", array(
            $mentor_id,
            $user_id,
            $question_id,
            $skill,
            $question,
            $answered,
            $review_type,
            now()    
         ));
        return redirect('/mentor/student/text/message');
    }

public function chat_view($id)
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Student'))
        {
            return redirect('/login');
        }
        
        return view('Student.live_chat',compact('id'));
    }
    
    
    public function mentor_chat_view()
    {
        if (!(session()->has('type') && session()
            ->get('type') == 'Mentor'))
        {
            return redirect('/login');
        }
        
          $me = session()->get('id');
 
            $user = db::select("Select student.*, (Select message from chats where chats.user_from = '$me' and user_to=student.user_id  or (user_to='$me' and user_from=student.user_id) order by chats.id desc limit 1) as lastmessage from student order by pk_id DESC");
        return view('Mentor.chat_system',compact('user'));
    }
    
    
        public function payment_list()
    {
        if (!(session()
            ->has('type') && session()
            ->get('type') == 'Mentor'))
        {
            return redirect('/login');
        }
$mentor_id = session()->get('id');
        $result = DB::select("select* from signup,payments where payments.mentor_id='$mentor_id' and payments.student_id=signup.pk_id");

        return view('Mentor.payments', compact('result'));
    }
    
    public function mentor_earning()
    {
        if (!(session()
            ->has('type') && session()
            ->get('type') == 'Mentor'))
        {
            return redirect('/login');
        }
        $mentor_id = session()->get('id');
        $result4 = DB::select("select  SUM(fee) from payments where mentor_id ='$mentor_id'");
                $payment = ( $result4[0]->{'SUM(fee)'} * 80)/100;
        return view('Mentor.mentor_earning',compact('result4','payment'));
    }
    
    public function student_payment()
    {
        if (!(session()
            ->has('type') && session()
            ->get('type') == 'Student'))
        {
            return redirect('/login');
        }
$student_id = session()->get('id');
        $result = DB::select("select* from signup,payments where payments.student_id='$student_id' and payments.mentor_id=signup.pk_id");

        return view('Student.payments', compact('result'));
    }
}

