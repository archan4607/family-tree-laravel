<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AdminCtrl;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\DB;
use App\Models\User;
// use App\Models\Relation;

use PHPUnit\Framework\Constraint\IsNull;
use function PHPUnit\Framework\isNull;

class AuthCtrl extends Controller
{
    // public function register_form()
    // {
    //     return view('register');
    // }
    private function format_string($string){ //format username
        $str_lower=strtolower($string);
        $first_cap= ucfirst($str_lower);
        return $first_cap;
    }
    public function insert_regdata(Request $req_data)
    {
        $trim_pass = trim($req_data['reg_pass'], '');
        $u_data = new User;
        if (User::where('mobile', $req_data['num'])->exists()) {
            $find_user = User::where('mobile', $req_data['num'])->first();
            if ($find_user->user_status == 3) {
                if ($find_user['role'] == 1) {
                    $find_user->fname = $this->format_string($req_data['fname']);
                    $find_user->lname = $this->format_string($req_data['lname']);
                    $find_user->user_status = 1;
                    $find_user->password_original = $trim_pass;
                    $find_user->password_hash = Hash::make($trim_pass);
                    $find_user->remember_token = $req_data['_token'];
                    $find_user->save();
                    return redirect('/login')->with('success', 'Register Successfully!');
                    // return redirect('/register')->with('message', 'Mobile Number Already Exist!');
                } else {
                    return redirect('/register')->with('message', 'Seems like you are not user!');
                }
            } else {
                return redirect('/register')->with('message', 'Already register!');
            }
        } else {
            $u_data = new User;
            $u_data->fname = $this->format_string($req_data['fname']);
            $u_data->lname = $this->format_string($req_data['lname']);
            $u_data->mobile = $req_data['num'];
            $u_data->password_original = $trim_pass;
            $u_data->password_hash = Hash::make($trim_pass);
            $u_data->remember_token = $req_data['_token'];
            $u_data->save();
            // $u_data->id;
            //insert query END
            // $last_id = md5($u_data->id);

            return redirect('/login')->with('success', 'Register Successfully!');
        }
    }
    public function login(Request $req_data)
    {
        $num = $req_data['num'];
        $trim_pass = trim($req_data['login_pass'], '');
        $user = User::where(['mobile' => $num])->first();
        if ($user) {
            if (Hash::check($trim_pass, $user->password_hash)) {
                // The passwords match...
                if ($user['role'] == 1) {
                    $req_data->session()->put('user', $user);
                    return redirect('/')->with('message', 'User Logged In!');
                } else if ($user['role'] == 2) {
                    $req_data->session()->put('admin', $user);
                    // $totaluser=User::count('id');
                    // $totalrelation=Relation::count('id');
                    // echo $a_relation;
                    // die;
                    // return redirect('/');
                    return redirect()->route('admin');
                }
            } else {
                return redirect('/login')->with('message', 'Invalid Password!');
            }
        } else {
            return redirect('/login')->with('message', 'Invalid Number!');
        }
        // if($user==null){
        //     return redirect('/login')->with('message', 'Invalid Number or Password!');
        // }elseif($user['role']==1){
        //     $req_data->session()->put('user',$user);
        //     return redirect('/')->with('message', 'User Logged In!');
        // }else if($user['role']==2){
        //     $req_data->session()->put('admin',$user);
        //     return redirect('/admin')->with('message', 'Admin Logged In!');
        // }
        // else{
        //     return redirect('/login')->with('message', 'Invalid Number or Password!');
        // }
    }
    public function logout()
    {
        if (session()->has('admin')) {
            session()->forget('admin');
            return redirect('/login')->with('message', 'Logout Successfully!');
        } else if (session()->has('user')) {
            session()->forget('user');
            return redirect('/login')->with('message', 'Logout Successfully!');
        }
    }

    public function redirect_check()
    {
        if (session()->has('admin')) {
            // return redirect('/admin');
            $data = User::find(session()->get('admin')['id']);
            return view('admin/index')->with(compact('data'));
            // return redirect()->route('admin_user')->with(compact('data'));
        } else 
        if (session()->has('user')) {
            $data = User::find(session()->get('user')['id']);
            return view('user/index')->with(compact('data'));
        } else {
            return redirect('/login');
        }
    }
}
