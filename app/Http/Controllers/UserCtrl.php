<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Relation;
use Illuminate\Support\Collection;

class UserCtrl extends Controller
{
    public function get_data()
    {
        if (session()->has('user')) {
            $data = User::find(session()->get('user')['id']);
            return view('user/detail-register')->with(compact('data'));
        } else {
            // echo 'user not set';
            return redirect('/login');
        }
    }
    public function detail_register(Request $req)
    {
        // echo "<br><br><br><br><br><pre>";
        // dd($req->all());
        // die;
        $ud = User::find($req['us_id']);
        // echo $ud;
        $ud->fname = $this->format_string($req['fname']);
        $ud->lname = $this->format_string($req['lname']);
        $ud->email = $req['email'];
        $ud->gender = $req['gender'];
        $ud->user_status = "1";
        $ud->dob = $req['dob'];
        $ud->user_status = '1';
        $ud->email_verified_at;
        $ud->martial_status = $req['mar_status'];
        $ud->save();
        // session()->put('apply_for_verify');
        return redirect()->route('add-relations');
        // $ud->gender =$req[]
        // $ud->remember_token = $req['_token'];
    }
    public function user_profile()
    {
        $data = User::find(session()->get('user')['id']);
        if ($data->user_status == '2') {
            $data = User::find(session()->get('user')['id']);
            $rel = Relation::join('users', 'users.id', '=', 'relations.rel_user_id')->where('relations.user_id', $data->id)->get();
            return view('user.view-profile')->with(compact('data', 'rel'));
        }
        return view('user/view-profile');
        // $user = User::find(session()->get('user')['id']);
        // // print_r($user);
        // return view('user.view-profile')->with(compact('user'));       
    }
    public function view_user_profile()
    {
        $user = User::where('id', session()->get('user')['id'])->first();
        $msg = "data sent";
        return view('user.edit-profile')->with(compact('user', 'msg'));
    }
    public function relations_check()
    {
        function check_relation($data_id, $relation){
            $rel = Relation::select(
                'users1.fname AS user_fname',
                'users1.lname AS user_lname',
                'users2.fname AS rel_user_fname',
                'users2.lname AS rel_user_lname',
                // 'relation_user_id AS user_id',
                'users1.*',
                'relations.*'
            )
                ->where(['relations.user_id' => $data_id, 'relations.relation' => $relation])
                ->join('users AS users1', 'relations.user_id', '=', 'users1.id')
                ->join('users AS users2', 'relations.rel_user_id', '=', 'users2.id')
                ->first();
                // echo $rel;
                // die;
                if($rel){
                return view('user/add-relations')->with(compact('rel'));
            }
            else{
                false;
            }
            // if (!empty($rel)) {
            //     // echo "status add relation";
            //     // return view('user/add-relations')->with('error', 'Please add relations');
            //     return view('user/add-relations')->with(compact('rel'));
            // }
        }
        if (session()->has('user')) {
            $data = User::find(session()->get('user')['id']);
            // $rel = Relation::select(
            //     'users1.fname AS user_fname',
            //     'users1.lname AS user_lname',
            //     'users2.fname AS rel_user_fname',
            //     'users2.lname AS rel_user_lname',
            //     // 'relation_user_id AS user_id',
            //     'users1.*',
            //     'relations.*'
            // )
            //     ->where(['relations.user_id' => $data->id, 'relations.relation' => 1])
            //     ->join('users AS users1', 'relations.user_id', '=', 'users1.id')
            //     ->join('users AS users2', 'relations.rel_user_id', '=', 'users2.id')
            //     ->first();
                $temp=false;
                for($i=0; $i<8; $i++){
                    // echo d$i;
                    if($temp==false){
                        $temp =   check_relation($data->id, $i);
                        echo $temp;
                    }
                }
                if($temp==false){
                    // echo 'done';
                return view('user/add-relations');
                }
            
                
            // echo $rel;
            // die;
            // if (empty($rel)) {
                
            // } else {
            //     return view('user/add-relations')->with(compact('rel'));
            //     // return redirect()->route('user-view-relations');
            //     // return redirect()->route('add-relation');
            // }
            // echo $data;
        }
    }
    public function confirm_relation(Request $req)
    {
        function confirm_accept($user_id){
            $user = User::find($user_id);
            $user->user_status = '2';
            $user->save();
            return response()->json(['status' => 'Relation Confirmed']);
        }
        if ($req->relation == 1) {
           return confirm_accept($req->user_id);
        } 
        else if ($req->relation == 2) {
            return confirm_accept($req->user_id);
        } 
        else if ($req->relation == 3) {
            return confirm_accept($req->user_id);
        } 
        else if ($req->relation == 4) {
            return confirm_accept($req->user_id);
        } 
        else if ($req->relation == 5) {
            return confirm_accept($req->user_id);
        } 
        else if ($req->relation == 6) {
            return confirm_accept($req->user_id);
        } 
        else if ($req->relation == 7) {
            return confirm_accept($req->user_id);
        } 
        else if ($req->relation == 8) {
            return confirm_accept($req->user_id);
        } 
        else {
            return response()->json(['status' => 'Relation Not Confirmed']);
        }
    }
    public function reject_relation(Request $req) //currently not in use
    {
        $data = Relation::where('user_id', $req->user_id)->get();
        for ($i = 0; $i < count($data); $i++) {
            // echo $data[$i]->user_id;
            // $data[$i]->delete();
            if ($data[$i]->relation == 1) {
                return response()->json(['status' => 'Relation Rejected']);
            }
            if ($data[$i]->relation == 2) {
                return response()->json(['status' => 'Relation Rejected']);
            }
        }

        // else

    }  

    public function request_relations(Request $req){
        $req=$req->all();
        // $this->add_relations($req, 1);
        echo "<pre>";
        print_r($req);
        die;
    }

    public function add_relations(Request $req,$is_request=null)
    {
        // echo "hey";
        // die;
        // here mobile number check using ajax and send responseto view page
        if($req['mobile']){
            if($user_mob_data=User::where('mobile', $req['mobile'])->first()){
                $find_relation=Relation::where('user_id',$user_mob_data->id)->first();
                if($find_relation){
                    echo $user_mob_data->fname.'###'.$user_mob_data->lname.'###'.$find_relation->relation.'###'.$req['temprelation'];
                }else{
                    echo "can't found relation record";
                }
                // echo 'num matches'; 
                // print_r(json_decode($user_mob_data));
                // die;
            }else{
                echo "can't found user record";
            }
        }

        //relations added in database
        $udf = User::find($req['us_id']);
        
        function first_relation($req_id,$relation,$lid){
            $relation1 = new Relation;
            $relation1->user_id = $req_id;
            $relation1->relation = $relation;
            $relation1->rel_user_id = $lid;
            $relation1->save();
        }
        function second_relation_gender($udf, $ud_id,$para_1,$para_2,$req_us_id){
            $relation2 = new Relation;
            if ($udf == 1) {
                $relation2->user_id = $ud_id;
                $relation2->relation = $para_1; //Son
                $relation2->rel_user_id = $req_us_id;
                $relation2->save();
            } else {
                $relation2->user_id = $ud_id;
                $relation2->relation = $para_2; //Daughter
                $relation2->rel_user_id = $req_us_id;
                $relation2->save();
            }
        }
        function primary_details($mobile_num, $fname, $lname, $martial_st, $user_st, $req_userid, $gender){
            $ud = new User;
            $ud->mobile = $mobile_num;
            $ud->lname = $fname;
            $ud->fname = $lname;
            // $ud->is_request = $is_request;
            $ud->martial_status = $martial_st;
            $ud->user_status = $user_st;
            $ud->save();
            first_relation($req_userid,1,$ud->id);
            second_relation_gender($gender, $ud->id, 7 , 8, $req_userid);
        }
        if ($req['us_martial_status'] == 1) {
            $count = 0;
            for ($i = 0; $i < 4; $i++) {
                if (empty($req['fname' . $i] || $req['lname' . $i])) {
                    $count++;
                    echo 'count' . $count;
                }
            }
            if ($count == 4) {
                // echo 'all fields empty inside';
                return redirect()->route('add-relations')->with('error', 'Please fill atleast one field');
            }
            if ($count != 4) {
                // echo 'all fields emptyds out';
                $udf->user_status = '2';
                $udf->save();
                //Father
                if ($req['rel0'] == 0) {
                    $ud = new User;
                    $relation1 = new Relation;
                    $relation2 = new Relation;
                    if (!empty($req['fname0'] && $req['lname0'])) {
                        if (User::where('mobile', $req['num0'])->exists()) {
                            return redirect('/add-relations')->with('error', 'Father Mobile Number Already Exist!');
                        } else {
                            $ud->mobile = $req['num0'];
                            $ud->fname = $this->format_string($req['fname0']);
                            $ud->lname = $this->format_string($req['lname0']);
                            $ud->martial_status = '2';
                            $ud->user_status = '3';
                            $ud->save();
                            echo 'F-';
                            echo $lid = $ud->id;
                            echo '<br>';
                            $relation1->user_id = $req['us_id'];
                            $relation1->relation = '1'; //Father
                            $relation1->rel_user_id = $ud->id;
                            $relation1->save();
                            if ($udf->gender == 1) {
                                $relation2->user_id = $ud->id;
                                $relation2->relation = '7'; //Son
                                $relation2->rel_user_id = $req['us_id'];
                                $relation2->save();
                            } else {
                                $relation2->user_id = $ud->id;
                                $relation2->relation = '8'; //Daughter
                                $relation2->rel_user_id = $req['us_id'];
                                $relation2->save();
                            }
                        }
                    } elseif (!empty($req['fname0']) && empty($req['lname0'])) {
                        return redirect()->route('add-relations')->with('error', 'Please fill Last name of Father');
                    } elseif (empty($req['fname0']) && !empty($req['lname0'])) {
                        return redirect()->route('add-relations')->with('error', 'Please fill Fisrt name of Father');
                    }
                }
                //Mother
                if ($req['rel1'] == 1) {
                    $ud = new User;
                    $relation1 = new Relation;
                    $relation2 = new Relation;
                    if (!empty($req['fname1'] && $req['lname1'])) {
                        if (User::where('mobile', $req['num1'])->exists()) {
                            return redirect('/add-relations')->with('error', 'Mother Mobile Number Already Exist!');
                        } else {
                            $ud->mobile = $req['num1'];
                            $ud->fname = $this->format_string($req['fname1']);
                            $ud->lname = $this->format_string($req['lname1']);
                            $ud->gender = '2';
                            $ud->martial_status = '2';
                            $ud->user_status = '3';
                            $ud->save();
                            echo 'M-';
                            echo $lid = $ud->id;
                            echo '<br>';
                            $relation1->user_id = $req['us_id'];
                            $relation1->relation = '2'; //Mother
                            $relation1->rel_user_id = $ud->id;
                            $relation1->save();
                            if ($udf->gender == 1) {
                                $relation2->user_id = $ud->id;
                                $relation2->relation = '7'; //Son
                                $relation2->rel_user_id = $req['us_id'];
                                $relation2->save();
                            } else {
                                $relation2->user_id = $ud->id;
                                $relation2->relation = '8'; //Daughter
                                $relation2->rel_user_id = $req['us_id'];
                                $relation2->save();
                            }
                        }
                    } elseif (!empty($req['fname1']) && empty($req['lname1'])) {
                        return redirect()->route('add-relations')->with('error', 'Please fill Last name of Mother');
                    } elseif (empty($req['fname1']) && !empty($req['lname1'])) {
                        return redirect()->route('add-relations')->with('error', 'Please fill Fisrt name of Mother');
                    }
                }
                //Brother
                if ($req['rel2'] == 2) {
                    $ud = new User;
                    $relation1 = new Relation;
                    $relation2 = new Relation;
                    if (!empty($req['fname2'] && $req['lname2'])) {
                        if (User::where('mobile', $req['num2'])->exists()) {
                            return redirect('/add-relations')->with('error', 'Brother Mobile Number Already Exist!');
                        } else {
                            $ud->mobile = $req['num2'];
                            $ud->fname = $this->format_string($req['fname2']);
                            $ud->lname = $this->format_string($req['lname2']);
                            $ud->user_status = '3';
                            $ud->save();
                            echo 'B-';
                            echo $lid = $ud->id;
                            echo '<br>';
                            $relation1->user_id = $req['us_id'];
                            $relation1->relation = '3'; //Brother
                            $relation1->rel_user_id = $ud->id;
                            $relation1->save();
                            if ($udf->gender == 1) {
                                $relation2->user_id = $ud->id;
                                $relation2->relation = '3'; //Brother
                                $relation2->rel_user_id = $req['us_id'];
                                $relation2->save();
                            } else {
                                $relation2->user_id = $ud->id;
                                $relation2->relation = '4'; //Sister
                                $relation2->rel_user_id = $req['us_id'];
                                $relation2->save();
                            }
                            if (!empty($req['fname0'] && $req['lname0'])) {
                                $user_find = User::where(['fname' => $req['fname0'], 'lname' => $req['lname0']])->first();
                                $relation3 = new Relation;
                                $relation4 = new Relation;
                                $relation3->user_id = $user_find->id;
                                $relation3->relation = '7'; //Son
                                $relation3->rel_user_id = $ud->id;
                                $relation3->save();
                                $relation4->user_id = $ud->id;
                                $relation4->relation = '1'; //Father
                                $relation4->rel_user_id = $user_find->id;
                                $relation4->save();
                            }
                            if (!empty($req['fname1'] && $req['lname1'])) {
                                $user_find = User::where(['fname' => $req['fname1'], 'lname' => $req['lname1']])->first();
                                $relation3 = new Relation;
                                $relation4 = new Relation;
                                $relation3->user_id = $user_find->id;
                                $relation3->relation = '7'; //Son
                                $relation3->rel_user_id = $ud->id;
                                $relation3->save();
                                $relation4->user_id = $ud->id;
                                $relation4->relation = '2'; //Mother
                                $relation4->rel_user_id = $user_find->id;
                                $relation4->save();
                            }
                        }
                    } elseif (!empty($req['fname2']) && empty($req['lname2'])) {
                        return redirect()->route('add-relations')->with('error', 'Please fill Last name of Brother');
                    } elseif (empty($req['fname2']) && !empty($req['lname2'])) {
                        return redirect()->route('add-relations')->with('error', 'Please fill Fisrt name of Brother');
                    }
                }
                //Sister
                if ($req['rel3'] == 3) {
                    $ud = new User;
                    $relation1 = new Relation;
                    $relation2 = new Relation;
                    if (!empty($req['fname3'] && $req['lname3'])) {
                        if (User::where('mobile', $req['num3'])->exists()) {
                            return redirect('/add-relations')->with('error', 'Sister Mobile Number Already Exist!');
                        } else {
                            $ud->mobile = $req['num3'];
                            $ud->fname = $this->format_string($req['fname3']);
                            $ud->lname = $this->format_string($req['lname3']);
                            $ud->gender = '2';
                            $ud->user_status = '3';
                            $ud->save();
                            echo 'S-';
                            echo $lid = $ud->id;
                            echo '<br>';
                            $relation1->user_id = $req['us_id'];
                            $relation1->relation = '4'; //Sister
                            $relation1->rel_user_id = $ud->id;
                            $relation1->save();
                            if ($udf->gender == 1) {
                                $relation2->user_id = $ud->id;
                                $relation2->relation = '3'; //Brother
                                $relation2->rel_user_id = $req['us_id'];
                                $relation2->save();
                            } else {
                                $relation2->user_id = $ud->id;
                                $relation2->relation = '4'; //Sister
                                $relation2->rel_user_id = $req['us_id'];
                                $relation2->save();
                            }
                            if (!empty($req['fname0'] && $req['lname0'])) {
                                $user_find = User::where(['fname' => $req['fname0'], 'lname' => $req['lname0']])->first();
                                $relation3 = new Relation;
                                $relation4 = new Relation;
                                $relation3->user_id = $user_find->id;
                                $relation3->relation = '8'; //Daughter
                                $relation3->rel_user_id = $ud->id;
                                $relation3->save();
                                $relation4->user_id = $ud->id;
                                $relation4->relation = '1'; //Father
                                $relation4->rel_user_id = $user_find->id;
                                $relation4->save();
                            }
                            if (!empty($req['fname1'] && $req['lname1'])) {
                                $user_find = User::where(['fname' => $req['fname1'], 'lname' => $req['lname1']])->first();
                                $relation3 = new Relation;
                                $relation4 = new Relation;
                                $relation3->user_id = $user_find->id;
                                $relation3->relation = '8'; //Daughter
                                $relation3->rel_user_id = $ud->id;
                                $relation3->save();
                                $relation4->user_id = $ud->id;
                                $relation4->relation = '2'; //Mother
                                $relation4->rel_user_id = $user_find->id;
                                $relation4->save();
                            }
                        }
                    } elseif (!empty($req['fname3']) && empty($req['lname3'])) {
                        return redirect()->route('add-relations')->with('error', 'Please fill Last name of Sister');
                    } elseif (empty($req['fname3']) && !empty($req['lname3'])) {
                        return redirect()->route('add-relations')->with('error', 'Please fill Fisrt name of Sister');
                    }
                }
                if (!empty($req['fname0'] && $req['lname0']) && !empty($req['fname1'] && $req['lname1'])) {
                    $relation = Relation::where('user_id', $req['us_id'])->whereIn('relation', [1, 2])->get();
                    if (!empty($relation)) {
                        $relation1 = new Relation;
                        $relation1->user_id = $relation[0]['rel_user_id'];
                        $relation1->relation = '6'; //Wife
                        $relation1->rel_user_id = $relation[1]['rel_user_id'];
                        $relation1->save();
                        $relation2 = new Relation;
                        $relation2->user_id = $relation[1]['rel_user_id'];
                        $relation2->relation = '5'; //Son
                        $relation2->rel_user_id = $relation[0]['rel_user_id'];
                        $relation2->save();
                        return redirect()->route('user-view-relations');
                    } else {
                        return redirect()->route('user-view-relations');
                    }
                } else {
                    return redirect()->route('user-view-relations');
                }
            }
        } elseif ($req['us_martial_status'] == 2) {
            $count = 0;
            for ($i = 0; $i < 8; $i++) {
                if (empty($req['fname' . $i] || $req['lname' . $i])) {
                    $count++;
                }
            }
            if ($count == 8) {
                // echo 'all fields empty inside';
                return redirect()->route('add-relations')->with('error', 'Please fill atleast one field');
            }
            if ($count != 8) {
                $udf->user_status = '2';
                $udf->save();
                //Father
                if ($req['rel0'] == 0) {
                    // $ud = new User;
                    // $relation1 = new Relation;
                    // $relation2 = new Relation;
                    if (!empty($req['fname0'] && $req['lname0'])) {
                        if (User::where('mobile', $req['mobile'])->exists()) {
                            // $num_check=User::where('mobile', $req['num0'])->first();
                            // print_r($num_check->fname);
                            return redirect('/add-relations')->with('error', 'Father Mobile Number Already Exist!');
                        } else {
                            $fname=$this->format_string($req['fname0']);
                            $lname=$this->format_string($req['lname0']);
                            // $ud->mobile = $req['num0'];
                            // $ud->fname = $this->format_string($req['fname0']);
                            // $ud->lname = $this->format_string($req['lname0']);
                            // // $ud->is_request = $is_request;
                            // $ud->martial_status = '2';
                            // $ud->user_status = '3';
                            // $ud->save();
                            // first_relation($req['us_id'],1,$ud->id);
                            // second_relation_gender($udf->gender, $ud->id, 7 , 8, $req['us_id']);
                            
                            primary_details($req['num0'],$fname,$lname,2,3,$req['us_id'],$udf->gender);
                            // $relation1->user_id = $req['us_id'];
                            // $relation1->relation = '1'; //Father
                            // $relation1->rel_user_id = $ud->id;
                            // $relation1->save();
                            // if ($udf->gender == 1) {
                            //     $relation2->user_id = $ud->id;
                            //     $relation2->relation = '7'; //Son
                            //     $relation2->rel_user_id = $req['us_id'];
                            //     $relation2->save();
                            // } else {
                            //     $relation2->user_id = $ud->id;
                            //     $relation2->relation = '8'; //Daughter
                            //     $relation2->rel_user_id = $req['us_id'];
                            //     $relation2->save();
                            // }
                        }
                    } elseif (!empty($req['fname0']) && empty($req['lname0'])) {
                        return redirect()->route('add-relations')->with('error', 'Please fill Last name of Father');
                    } elseif (empty($req['fname0']) && !empty($req['lname0'])) {
                        return redirect()->route('add-relations')->with('error', 'Please fill Fisrt name of Father');
                    }
                }
                //Mother
                if ($req['rel1'] == 1) {
                    $ud = new User;
                    $relation1 = new Relation;
                    $relation2 = new Relation;
                    if (!empty($req['fname1'] && $req['lname1'])) {
                        if (User::where('mobile', $req['num1'])->exists()) {
                            return redirect('/add-relations')->with('error', 'Mother Mobile Number Already Exist!');
                        } else {
                            $ud->mobile = $req['num1'];
                            $ud->fname = $this->format_string($req['fname1']);
                            $ud->lname = $this->format_string($req['lname1']);
                            $ud->gender = '2';
                            $ud->martial_status = '2';
                            $ud->user_status = '3';
                            $ud->save();
                            echo 'M-';
                            echo $lid = $ud->id;
                            echo '<br>';
                            $relation1->user_id = $req['us_id'];
                            $relation1->relation = '2'; //Mother
                            $relation1->rel_user_id = $ud->id;
                            $relation1->save();
                            if ($udf->gender == 1) {
                                $relation2->user_id = $ud->id;
                                $relation2->relation = '7'; //Son
                                $relation2->rel_user_id = $req['us_id'];
                                $relation2->save();
                            } else {
                                $relation2->user_id = $ud->id;
                                $relation2->relation = '8'; //Daughter
                                $relation2->rel_user_id = $req['us_id'];
                                $relation2->save();
                            }
                        }
                    } elseif (!empty($req['fname1']) && empty($req['lname1'])) {
                        return redirect()->route('add-relations')->with('error', 'Please fill Last name of Mother');
                    } elseif (empty($req['fname1']) && !empty($req['lname1'])) {
                        return redirect()->route('add-relations')->with('error', 'Please fill Fisrt name of Mother');
                    }
                }
                //Brother
                if ($req['rel2'] == 2) {
                    $ud = new User;
                    $relation1 = new Relation;
                    $relation2 = new Relation;
                    if (!empty($req['fname2'] && $req['lname2'])) {
                        if (User::where('mobile', $req['num2'])->exists()) {
                            return redirect('/add-relations')->with('error', 'Brother Mobile Number Already Exist!');
                        } else {
                            $ud->mobile = $req['num2'];
                            $ud->fname = $this->format_string($req['fname2']);
                            $ud->lname = $this->format_string($req['lname2']);
                            $ud->user_status = '3';
                            $ud->save();
                            echo 'B-';
                            echo $lid = $ud->id;
                            echo '<br>';
                            $relation1->user_id = $req['us_id'];
                            $relation1->relation = '3'; //Brother
                            $relation1->rel_user_id = $ud->id;
                            $relation1->save();
                            if ($udf->gender == 1) {
                                $relation2->user_id = $ud->id;
                                $relation2->relation = '3'; //Brother
                                $relation2->rel_user_id = $req['us_id'];
                                $relation2->save();
                            } else {
                                $relation2->user_id = $ud->id;
                                $relation2->relation = '4'; //Sister
                                $relation2->rel_user_id = $req['us_id'];
                                $relation2->save();
                            }
                            if (!empty($req['fname0'] && $req['lname0'])) {
                                $user_find = User::where(['fname' => $req['fname0'], 'lname' => $req['lname0']])->first();
                                $relation3 = new Relation;
                                $relation4 = new Relation;
                                $relation3->user_id = $user_find->id;
                                $relation3->relation = '7'; //Son
                                $relation3->rel_user_id = $ud->id;
                                $relation3->save();
                                $relation4->user_id = $ud->id;
                                $relation4->relation = '1'; //Father
                                $relation4->rel_user_id = $user_find->id;
                                $relation4->save();
                            }
                            if (!empty($req['fname1'] && $req['lname1'])) {
                                $user_find = User::where(['fname' => $req['fname1'], 'lname' => $req['lname1']])->first();
                                $relation3 = new Relation;
                                $relation4 = new Relation;
                                $relation3->user_id = $user_find->id;
                                $relation3->relation = '7'; //Son
                                $relation3->rel_user_id = $ud->id;
                                $relation3->save();
                                $relation4->user_id = $ud->id;
                                $relation4->relation = '2'; //Mother
                                $relation4->rel_user_id = $user_find->id;
                                $relation4->save();
                            }
                        }
                    } elseif (!empty($req['fname2']) && empty($req['lname2'])) {
                        return redirect()->route('add-relations')->with('error', 'Please fill Last name of Brother');
                    } elseif (empty($req['fname2']) && !empty($req['lname2'])) {
                        return redirect()->route('add-relations')->with('error', 'Please fill Fisrt name of Brother');
                    }
                }
                //Sister
                if ($req['rel3'] == 3) {
                    $ud = new User;
                    $relation1 = new Relation;
                    $relation2 = new Relation;
                    if (!empty($req['fname3'] && $req['lname3'])) {
                        if (User::where('mobile', $req['num3'])->exists()) {
                            return redirect('/add-relations')->with('error', 'Sister Mobile Number Already Exist!');
                        } else {
                            $ud->mobile = $req['num3'];
                            $ud->fname = $this->format_string($req['fname3']);
                            $ud->lname = $this->format_string($req['lname3']);
                            $ud->gender = '2';
                            $ud->user_status = '3';
                            $ud->save();
                            echo 'S-';
                            echo $lid = $ud->id;
                            echo '<br>';
                            $relation1->user_id = $req['us_id'];
                            $relation1->relation = '4'; //Sister
                            $relation1->rel_user_id = $ud->id;
                            $relation1->save();
                            if ($udf->gender == 1) {
                                $relation2->user_id = $ud->id;
                                $relation2->relation = '3'; //Brother
                                $relation2->rel_user_id = $req['us_id'];
                                $relation2->save();
                            } else {
                                $relation2->user_id = $ud->id;
                                $relation2->relation = '4'; //Sister
                                $relation2->rel_user_id = $req['us_id'];
                                $relation2->save();
                            }
                            if (!empty($req['fname0'] && $req['lname0'])) {
                                $user_find = User::where(['fname' => $req['fname0'], 'lname' => $req['lname0']])->first();
                                $relation3 = new Relation;
                                $relation4 = new Relation;
                                $relation3->user_id = $user_find->id;
                                $relation3->relation = '8'; //Daughter
                                $relation3->rel_user_id = $ud->id;
                                $relation3->save();
                                $relation4->user_id = $ud->id;
                                $relation4->relation = '1'; //Father
                                $relation4->rel_user_id = $user_find->id;
                                $relation4->save();
                            }
                            if (!empty($req['fname1'] && $req['lname1'])) {
                                $user_find = User::where(['fname' => $req['fname1'], 'lname' => $req['lname1']])->first();
                                $relation3 = new Relation;
                                $relation4 = new Relation;
                                $relation3->user_id = $user_find->id;
                                $relation3->relation = '8'; //Daughter
                                $relation3->rel_user_id = $ud->id;
                                $relation3->save();
                                $relation4->user_id = $ud->id;
                                $relation4->relation = '2'; //Mother
                                $relation4->rel_user_id = $user_find->id;
                                $relation4->save();
                            }
                            if (!empty($req['fname2'] && $req['lname2'])) {
                                $user_find = User::where(['fname' => $req['fname2'], 'lname' => $req['lname2']])->first();
                                $relation3 = new Relation;
                                $relation4 = new Relation;
                                $relation3->user_id = $user_find->id;
                                $relation3->relation = '4'; //Sister
                                $relation3->rel_user_id = $ud->id;
                                $relation3->save();
                                $relation4->user_id = $ud->id;
                                $relation4->relation = '3'; //Brother
                                $relation4->rel_user_id = $user_find->id;
                                $relation4->save();
                            }
                        }
                    } elseif (!empty($req['fname3']) && empty($req['lname3'])) {
                        return redirect()->route('add-relations')->with('error', 'Please fill Last name of Sister');
                    } elseif (empty($req['fname3']) && !empty($req['lname3'])) {
                        return redirect()->route('add-relations')->with('error', 'Please fill Fisrt name of Sister');
                    }
                }
                //Husband
                if ($req['rel4'] == 4) {
                    $ud = new User;
                    $relation1 = new Relation;
                    $relation2 = new Relation;
                    if (!empty($req['fname4'] && $req['lname4'])) {
                        if (User::where('mobile', $req['num4'])->exists()) {
                            $num_check=User::where('mobile', $req['num0'])->first();
                            // print_r($num_check->fname);
                            // die;
                            // echo "works";
                            $response = [
                                'message' => 'Mobile number exists',
                                'fname' => $num_check->fname,
                                'lname' => $num_check->lname
                            ];
                            echo $num_check;
                            // die;
                            return response()->json($response);
                            // return redirect('/add-relations')->with('error', 'Husband Mobile Number Already Exist!');
                        } else {
                            $ud->mobile = $req['num4'];
                            $ud->fname = $this->format_string($req['fname4']);
                            $ud->lname = $this->format_string($req['lname4']);
                            $ud->martial_status = '2';
                            $ud->user_status = '3';
                            $ud->save();
                            echo 'H-';
                            echo $lid = $ud->id;
                            echo '<br>';
                            $relation1->user_id = $req['us_id'];
                            $relation1->relation = '5'; //Husband
                            $relation1->rel_user_id = $ud->id;
                            $relation1->save();
                            $relation2->user_id = $ud->id;
                            $relation2->relation = '6'; //Wife
                            $relation2->rel_user_id = $req['us_id'];
                            $relation2->save();
                        }
                    } elseif (!empty($req['fname4']) && empty($req['lname4'])) {
                        return redirect()->route('add-relations')->with('error', 'Please fill Last name of Husband');
                    } elseif (empty($req['fname4']) && !empty($req['lname4'])) {
                        return redirect()->route('add-relations')->with('error', 'Please fill Fisrt name of Husband');
                    }
                }
                //Wife
                if ($req['rel5'] == 5) {
                    $ud = new User;
                    $relation1 = new Relation;
                    $relation2 = new Relation;
                    if (!empty($req['fname5'] && $req['lname5'])) {
                        if (User::where('mobile', $req['num5'])->exists()) {
                            return redirect('/add-relations')->with('error', 'Wife Mobile Number Already Exist!');
                        } else {
                            $ud->mobile = $req['num5'];
                            $ud->fname = $this->format_string($req['fname5']);
                            $ud->lname = $this->format_string($req['lname5']);
                            $ud->gender = '2';
                            $ud->martial_status = '2';
                            $ud->user_status = '3';
                            $ud->save();
                            echo 'W-';
                            echo $lid = $ud->id;
                            echo '<br>';
                            $relation1->user_id = $req['us_id'];
                            $relation1->relation = '6'; //Wife
                            $relation1->rel_user_id = $ud->id;
                            $relation1->save();
                            $relation2->user_id = $ud->id;
                            $relation2->relation = '5'; //Husband
                            $relation2->rel_user_id = $req['us_id'];
                            $relation2->save();
                        }
                    } elseif (!empty($req['fname5']) && empty($req['lname5'])) {
                        return redirect()->route('add-relations')->with('error', 'Please fill Last name of Wife');
                    } elseif (empty($req['fname5']) && !empty($req['lname5'])) {
                        return redirect()->route('add-relations')->with('error', 'Please fill Fisrt name of Wife');
                    }
                }
                //Son
                if ($req['rel6'] == 6) {
                    $ud = new User;
                    $relation1 = new Relation;
                    $relation2 = new Relation;
                    if (!empty($req['fname6'] && $req['lname6'])) {
                        if (User::where('mobile', $req['num6'])->exists()) {
                            return redirect('/add-relations')->with('error', 'Son Mobile Number Already Exist!');
                        } else {
                            $ud->mobile = $req['num6'];
                            $ud->fname = $this->format_string($req['fname6']);
                            $ud->lname = $this->format_string($req['lname6']);
                            $ud->user_status = '3';
                            $ud->save();
                            echo 'SON-';
                            echo $lid = $ud->id;
                            echo '<br>';
                            $relation1->user_id = $req['us_id'];
                            $relation1->relation = '7'; //Son
                            $relation1->rel_user_id = $ud->id;
                            $relation1->save();
                            if ($udf->gender == 1) {
                                $relation2->user_id = $ud->id;
                                $relation2->relation = '1'; //Father
                                $relation2->rel_user_id = $req['us_id'];
                                $relation2->save();
                            } else {
                                $relation2->user_id = $ud->id;
                                $relation2->relation = '2'; //Mother
                                $relation2->rel_user_id = $req['us_id'];
                                $relation2->save();
                            }
                            if (!empty($req['fname5'] && $req['lname5'])) {
                                $user_find = User::where(['fname' => $req['fname5'], 'lname' => $req['lname5']])->first();
                                $relation3 = new Relation;
                                $relation4 = new Relation;
                                $relation3->user_id = $user_find->id;
                                $relation3->relation = '7'; //Son
                                $relation3->rel_user_id = $ud->id;
                                $relation3->save();
                                $relation4->user_id = $ud->id;
                                $relation4->relation = '2'; //Mother
                                $relation4->rel_user_id = $user_find->id;
                                $relation4->save();
                            }
                            if (!empty($req['fname4'] && $req['lname4'])) {
                                $user_find = User::where(['fname' => $req['fname4'], 'lname' => $req['lname4']])->first();
                                $relation3 = new Relation;
                                $relation4 = new Relation;
                                $relation3->user_id = $user_find->id;
                                $relation3->relation = '7'; //Son
                                $relation3->rel_user_id = $ud->id;
                                $relation3->save();
                                $relation4->user_id = $ud->id;
                                $relation4->relation = '1'; //Father
                                $relation4->rel_user_id = $user_find->id;
                                $relation4->save();
                            }
                        }
                    } elseif (!empty($req['fname6']) && empty($req['lname6'])) {
                        return redirect()->route('add-relations')->with('error', 'Please fill Last name of Son');
                    } elseif (empty($req['fname6']) && !empty($req['lname6'])) {
                        return redirect()->route('add-relations')->with('error', 'Please fill Fisrt name of Son');
                    }
                }
                //Daghter
                if ($req['rel7'] == 7) {
                    $ud = new User;
                    $relation1 = new Relation;
                    $relation2 = new Relation;
                    if (!empty($req['fname7'] && $req['lname7'])) {
                        if (User::where('mobile', $req['num7'])->exists()) {
                            return redirect('/add-relations')->with('error', 'Daughter Mobile Number Already Exist!');
                        } else {
                            $ud->mobile = $req['num7'];
                            $ud->fname = $this->format_string($req['fname7']);
                            $ud->lname = $this->format_string($req['lname7']);
                            $ud->gender = '2';
                            $ud->user_status = '3';
                            $ud->save();
                            echo 'DAU-';
                            echo $lid = $ud->id;
                            echo '<br>';
                            $relation1->user_id = $req['us_id'];
                            $relation1->relation = '8'; //Daghter
                            $relation1->rel_user_id = $ud->id;
                            $relation1->save();
                            if ($udf->gender == 1) {
                                $relation2->user_id = $ud->id;
                                $relation2->relation = '1'; //Father
                                $relation2->rel_user_id = $req['us_id'];
                                $relation2->save();
                            } else {
                                $relation2->user_id = $ud->id;
                                $relation2->relation = '2'; //Mother
                                $relation2->rel_user_id = $req['us_id'];
                                $relation2->save();
                            }
                            if (!empty($req['fname5'] && $req['lname5'])) {
                                $user_find = User::where(['fname' => $req['fname5'], 'lname' => $req['lname5']])->first();
                                $relation3 = new Relation;
                                $relation4 = new Relation;
                                $relation3->user_id = $user_find->id;
                                $relation3->relation = '8'; //Daughter
                                $relation3->rel_user_id = $ud->id;
                                $relation3->save();
                                $relation4->user_id = $ud->id;
                                $relation4->relation = '2'; //Mother
                                $relation4->rel_user_id = $user_find->id;
                                $relation4->save();
                            }
                            if (!empty($req['fname4'] && $req['lname4'])) {
                                $user_find = User::where(['fname' => $req['fname4'], 'lname' => $req['lname4']])->first();
                                $relation3 = new Relation;
                                $relation4 = new Relation;
                                $relation3->user_id = $user_find->id;
                                $relation3->relation = '8'; //Daughter
                                $relation3->rel_user_id = $ud->id;
                                $relation3->save();
                                $relation4->user_id = $ud->id;
                                $relation4->relation = '1'; //Father
                                $relation4->rel_user_id = $user_find->id;
                                $relation4->save();
                            }
                            if (!empty($req['fname6'] && $req['lname6'])) {
                                $user_find = User::where(['fname' => $req['fname6'], 'lname' => $req['lname6']])->first();
                                $relation3 = new Relation;
                                $relation4 = new Relation;
                                $relation3->user_id = $user_find->id;
                                $relation3->relation = '4'; //Sister
                                $relation3->rel_user_id = $ud->id;
                                $relation3->save();
                                $relation4->user_id = $ud->id;
                                $relation4->relation = '3'; //Brother
                                $relation4->rel_user_id = $user_find->id;
                                $relation4->save();
                            }
                        }
                    } elseif (!empty($req['fname7']) && empty($req['lname7'])) {
                        return redirect()->route('add-relations')->with('error', 'Please fill Last name of Daughter');
                    } elseif (empty($req['fname7']) && !empty($req['lname7'])) {
                        return redirect()->route('add-relations')->with('error', 'Please fill Fisrt name of Daughter');
                    }
                }
                if (!empty($req['fname0'] && $req['lname0']) && !empty($req['fname1'] && $req['lname1'])) {
                    $relation = Relation::where('user_id', $req['us_id'])->whereIn('relation', [1, 2])->get();
                    if (!empty($relation)) {
                        // echo $relation;
                        $relation1 = new Relation;
                        $relation1->user_id = $relation[0]['rel_user_id'];
                        $relation1->relation = '6'; //Wife
                        $relation1->rel_user_id = $relation[1]['rel_user_id'];
                        $relation1->save();
                        $relation2 = new Relation;
                        $relation2->user_id = $relation[1]['rel_user_id'];
                        $relation2->relation = '5'; //Son
                        $relation2->rel_user_id = $relation[0]['rel_user_id'];
                        $relation2->save();
                        return redirect()->route('user-view-relations');
                    } else {
                        return redirect()->route('user-view-relations');
                    }
                } else {
                    return redirect()->route('user-view-relations');
                }
            }
        }
    }
    public function view_relation()
    {
        $data = User::find(session()->get('user')['id']);
        $rel = Relation::join('users', 'users.id', '=', 'relations.rel_user_id')->where('relations.user_id', $data->id)->get();
        // echo $data;
        return view('user/view-relations')->with(compact('data', 'rel'));
    }
    private function extra_modal_relation($rel_us_id, $search_rel, $ud_id, $rel3, $rel4)
    {
        // extra_modal_relation(user id who fill form, relation search, id of inserted user, relation 1, relation 2);
        $rel = Relation::select(
            'users1.fname AS user_fname',
            'users1.lname AS user_lname',
            'users2.fname AS rel_user_fname',
            'users2.lname AS rel_user_lname',
            // 'relation_user_id AS user_id',
            'users1.*',
            'relations.*'
        )
            ->where(['relations.user_id' => $rel_us_id, 'relations.relation' => $search_rel])
            ->where('relations.user_id', '!=', $ud_id)
            ->where('relations.rel_user_id', '!=', $ud_id)
            ->join('users AS users1', 'relations.user_id', '=', 'users1.id')
            ->join('users AS users2', 'relations.rel_user_id', '=', 'users2.id')
            ->get();

        $decode_data = json_decode($rel, true);
        if ($decode_data) {
            foreach ($decode_data as $decode_data) {
                $relation3 = new Relation;
                $relation4 = new Relation;
                $relation3->user_id = $decode_data['rel_user_id'];
                $relation3->relation = $rel3;
                $relation3->rel_user_id = $ud_id;
                $relation3->save();
                $relation4->user_id = $ud_id;
                $relation4->relation = $rel4;
                $relation4->rel_user_id = $decode_data['rel_user_id'];
                $relation4->save();
            }
        }
    }
    private function format_string($string){ //format username
        $str_lower=strtolower($string);
        $first_cap= ucfirst($str_lower);
        return $first_cap;
    }
    private function deep_search($rel_us_id, $search_rel, $ud_id, $rel3, $rel4){
        if($search_rel==1){
            $this->extra_modal_relation($rel_us_id, 1, $ud_id, 6, 5); // father -> husband and wife
            //brother and sister of user not mother 
            $this->extra_modal_relation($rel_us_id, 3, $ud_id, 2, 7); // brother -> mother and son
            $this->extra_modal_relation($rel_us_id, 4, $ud_id, 2, 8); // sister -> mother and daughter
        }else if($search_rel==2){
            $this->extra_modal_relation($rel_us_id, 2, $ud_id, 5, 6); // father -> wife and husband
            //brother and sister of user not mother 
            $this->extra_modal_relation($rel_us_id, 3, $ud_id, 1, 7); // brother -> father and son
            $this->extra_modal_relation($rel_us_id, 4, $ud_id, 1, 8); // sister -> father and daughter
        }else{

        }

    }
    public function add_modal_relation(Request $req)
    {
        echo '<pre>';
        // print_r($req->all());
        // die;
        $udf = User::find($req['us_id']);
        $udf->save();
        //Father
        if ($req->modal_relation == 0) {
            $ud = new User;
            $relation1 = new Relation;
            $relation2 = new Relation;
            if (!empty($req['modal_fname'] && $req['modal_lname'])) {
                if (User::where('mobile', $req['num'])->exists()) {
                    return back()->withErrors(['error' => 'Mobile Number Already Exist!']);
                } else {
                    $ud->mobile = $req['num'];
                    $ud->fname = $this->format_string($req['modal_fname']);
                    $ud->lname = $this->format_string($req['modal_lname']);
                    $ud->martial_status = $req['mar_status'];
                    $ud->user_status = '3';
                    $ud->save();
                    echo 'F-';
                    echo $lid = $ud->id;
                    echo '<br>';
                    $relation1->user_id = $req['us_id'];
                    $relation1->relation = '1'; //Father
                    $relation1->rel_user_id = $ud->id;
                    $relation1->save();
                    if ($udf->gender == 1) {
                        $relation2->user_id = $ud->id;
                        $relation2->relation = '7'; //Son
                        $relation2->rel_user_id = $req['us_id'];
                        $relation2->save();
                    } else {
                        $relation2->user_id = $ud->id;
                        $relation2->relation = '8'; //Daughter
                        $relation2->rel_user_id = $req['us_id'];
                        $relation2->save();
                    }
                    // extra_modal_relation(user id who fill form, id of inserted user, relation search, relation 1, relation 2);
                    
                    //brother and sister of user not father 
                    // $this->extra_modal_relation($req['us_id'], 3, $ud->id, 1, 7); // brother -> father and son
                    // $this->extra_modal_relation($req['us_id'], 4, $ud->id, 1, 8); // sister -> father and daughter
                    $this->deep_search($req['us_id'], 2, $ud->id, 6, 5); // father -> husband and wife
                    return redirect()->back()->with('modalSuccess', 'Relation Added Successfully!!!');
                }
            } elseif (!empty($req['modal_fname']) && empty($req['modal_lname'])) {
                return back()->withErrors(['error' => 'Please fill Last name of Father']);
            } elseif (empty($req['modal_fname']) && !empty($req['modal_lname'])) {
                return back()->withErrors(['error' => 'Please fill First name of Father']);
            }
        }
        //Mother
        if ($req->modal_relation == 1) {
            $ud = new User;
            $relation1 = new Relation;
            $relation2 = new Relation;
            if (!empty($req['modal_fname'] && $req['modal_lname'])) {
                if (User::where('mobile', $req['num'])->exists()) {
                    return back()->withErrors(['error' => 'Mobile Number Already Exist!']);
                } else {
                    $ud->mobile = $req['num'];
                    $ud->fname = $this->format_string($req['modal_fname']);
                    $ud->lname = $this->format_string($req['modal_lname']);
                    $ud->gender = '2';
                    $ud->martial_status = $req['mar_status'];
                    $ud->user_status = '3';
                    $ud->save();
                    echo 'M-';
                    echo $lid = $ud->id;
                    echo '<br>';
                    $relation1->user_id = $req['us_id'];
                    $relation1->relation = '2'; //Mother
                    $relation1->rel_user_id = $ud->id;
                    $relation1->save();
                    if ($udf->gender == 1) {
                        $relation2->user_id = $ud->id;
                        $relation2->relation = '7'; //Son
                        $relation2->rel_user_id = $req['us_id'];
                        $relation2->save();
                    } else {
                        $relation2->user_id = $ud->id;
                        $relation2->relation = '8'; //Daughter
                        $relation2->rel_user_id = $req['us_id'];
                        $relation2->save();
                    }
                    //brother and sister of user not mother 
                    // $this->extra_modal_relation($req['us_id'], 3, $ud->id, 2, 7); // brother -> mother and son
                    // $this->extra_modal_relation($req['us_id'], 4, $ud->id, 2, 8); // sister -> mother and daughter

                    //find father of user if exists the add them as husband and wife also mother and father of son/daughter
                    $this->deep_search($req['us_id'], 1, $ud->id, 6, 5); // father -> husband and wife
                    return redirect()->back()->with('modalSuccess', 'Relation Added Successfully!!!');
                }
            } elseif (!empty($req['modal_fname']) && empty($req['modal_lname'])) {
                return back()->withErrors(['error' => 'Please fill Last name of Mother']);
            } elseif (empty($req['modal_fname']) && !empty($req['modal_lname'])) {
                return back()->withErrors(['error' => 'Please fill First name of Mother']);
            }
        }
        //Brother
        if ($req->modal_relation == 2) {
            $ud = new User;
            $relation1 = new Relation;
            $relation2 = new Relation;
            if (!empty($req['modal_fname'] && $req['modal_lname'])) {
                if (User::where('mobile', $req['num'])->exists()) {
                    return back()->withErrors(['error' => 'Mobile Number Already Exist!']);
                } else {
                    $ud->mobile = $req['num'];
                    $ud->fname = $this->format_string($req['modal_fname']);
                    $ud->lname = $this->format_string($req['modal_lname']);
                    $ud->martial_status = $req['mar_status'];
                    $ud->user_status = '3';
                    $ud->save();
                    // echo 'B-';
                    // echo $lid = $ud->id;
                    // echo '<br>';
                    $relation1->user_id = $req['us_id'];
                    $relation1->relation = '3'; //Brother
                    $relation1->rel_user_id = $ud->id;
                    $relation1->save();
                    if ($udf->gender == 1) {
                        $relation2->user_id = $ud->id;
                        $relation2->relation = '3'; //Brother
                        $relation2->rel_user_id = $req['us_id'];
                        $relation2->save();
                    } else {
                        $relation2->user_id = $ud->id;
                        $relation2->relation = '4'; //Sister
                        $relation2->rel_user_id = $req['us_id'];
                        $relation2->save();
                    }
                    // extra_modal_relation(user id who fill form, id of inserted user, relation search, relation 1, relation 2);
                    $this->extra_modal_relation($req['us_id'], 1, $ud->id, 7, 1);// father -> son and father
                    $this->extra_modal_relation($req['us_id'], 2, $ud->id, 7, 2);// mother -> son and mother
                    $this->extra_modal_relation($req['us_id'], 3, $ud->id, 3, 3); // brother -> brother and brother
                    $this->extra_modal_relation($req['us_id'], 4, $ud->id, 3, 4);// sister -> brother and sister
                    return redirect()->back()->with('modalSuccess', 'Relation Added Successfully!!!');
                }
            } elseif (!empty($req['modal_fname']) && empty($req['modal_lname'])) {
                return back()->withErrors(['error' => 'Please fill Last name of Brother']);
            } elseif (empty($req['modal_fname']) && !empty($req['modal_lname'])) {
                return back()->withErrors(['error' => 'Please fill First name of Brother']);
            }
        }
        //Sister
        if ($req->modal_relation == 3) {
            $ud = new User;
            $relation1 = new Relation;
            $relation2 = new Relation;
            if (!empty($req['modal_fname'] && $req['modal_lname'])) {
                if (User::where('mobile', $req['num'])->exists()) {
                    return back()->withErrors(['error' => 'Mobile Number Already Exist!']);
                } else {
                    $ud->mobile = $req['num'];
                    $ud->fname = $this->format_string($req['modal_fname']);
                    $ud->lname = $this->format_string($req['modal_lname']);
                    $ud->gender = '2';
                    $ud->martial_status = $req['mar_status'];
                    $ud->user_status = '3';
                    $ud->save();
                    echo 'S-';
                    echo $lid = $ud->id;
                    echo '<br>';
                    $relation1->user_id = $req['us_id'];
                    $relation1->relation = '4'; //Sister
                    $relation1->rel_user_id = $ud->id;
                    $relation1->save();
                    if ($udf->gender == 1) {
                        $relation2->user_id = $ud->id;
                        $relation2->relation = '3'; //Brother
                        $relation2->rel_user_id = $req['us_id'];
                        $relation2->save();
                    } else {
                        $relation2->user_id = $ud->id;
                        $relation2->relation = '4'; //Sister
                        $relation2->rel_user_id = $req['us_id'];
                        $relation2->save();
                    }
                    // extra_modal_relation(user id who fill form, id of inserted user, relation search, relation 1, relation 2);
                    $this->extra_modal_relation($req['us_id'], 1, $ud->id, 8, 1); // father -> daughter and father
                    $this->extra_modal_relation($req['us_id'], 2, $ud->id, 8, 2); // mother -> daughter and mother
                    $this->extra_modal_relation($req['us_id'], 3, $ud->id, 4, 3); // brother -> sister and brother
                    $this->extra_modal_relation($req['us_id'], 4, $ud->id, 4, 4); // sister -> sister and sister
                    return redirect()->back()->with('modalSuccess', 'Relation Added Successfully!!!');
                }
            } elseif (!empty($req['modal_fname']) && empty($req['modal_lname'])) {
                return back()->withErrors(['error' => 'Please fill Last name of Sister']);
            } elseif (empty($req['modal_fname']) && !empty($req['modal_lname'])) {
                return back()->withErrors(['error' => 'Please fill First name of Sister']);
            }
        }
        //Husband
        if ($req->modal_relation == 4) {
            $ud = new User;
            $relation1 = new Relation;
            $relation2 = new Relation;
            if (!empty($req['modal_fname'] && $req['modal_lname'])) {
                if (User::where('mobile', $req['num'])->exists()) {
                    return back()->withErrors(['error' => 'Mobile Number Already Exist!']);
                } else {
                    $ud->mobile = $req['num'];
                    $ud->fname = $this->format_string($req['modal_fname']);
                    $ud->lname = $this->format_string($req['modal_lname']);
                    $ud->martial_status = $req['mar_status'];
                    $ud->user_status = '3';
                    $ud->save();
                    echo 'H-';
                    echo $lid = $ud->id;
                    echo '<br>';
                    $relation1->user_id = $req['us_id'];
                    $relation1->relation = '5'; //Husband
                    $relation1->rel_user_id = $ud->id;
                    $relation1->save();
                    $relation2->user_id = $ud->id;
                    $relation2->relation = '6'; //Wife
                    $relation2->rel_user_id = $req['us_id'];
                    $relation2->save();

                    // extra_modal_relation(user id who fill form, id of inserted user, relation search, relation 1, relation 2);
                    $this->extra_modal_relation($req['us_id'], 7, $ud->id, 1, 7); // son -> father and mother
                    $this->extra_modal_relation($req['us_id'], 8, $ud->id, 1, 8); // daughter -> father and mother
                    return redirect()->back()->with('modalSuccess', 'Relation Added Successfully!!!');
                }
            } elseif (!empty($req['modal_fname']) && empty($req['modal_lname'])) {
                return back()->withErrors(['error' => 'Please fill Last name of Husband']);
            } elseif (empty($req['modal_fname']) && !empty($req['modal_lname'])) {
                return back()->withErrors(['error' => 'Please fill First name of Husband']);
            }
        }
        //Wife
        if ($req->modal_relation == 5) {
            $ud = new User;
            $relation1 = new Relation;
            $relation2 = new Relation;
            if (!empty($req['modal_fname'] && $req['modal_lname'])) {
                if (User::where('mobile', $req['num'])->exists()) {
                    return back()->withErrors(['error' => 'Mobile Number Already Exist!']);
                } else {
                    $ud->mobile = $req['num'];
                    $ud->fname = $this->format_string($req['modal_fname']);
                    $ud->lname = $this->format_string($req['modal_lname']);
                    $ud->gender = '2';
                    $ud->martial_status = $req['mar_status'];
                    $ud->user_status = '3';
                    $ud->save();
                    echo 'W-';
                    echo $lid = $ud->id;
                    echo '<br>';
                    $relation1->user_id = $req['us_id'];
                    $relation1->relation = '6'; //Wife
                    $relation1->rel_user_id = $ud->id;
                    $relation1->save();
                    $relation2->user_id = $ud->id;
                    $relation2->relation = '5'; //Husband
                    $relation2->rel_user_id = $req['us_id'];
                    $relation2->save();

                    // extra_modal_relation(user id who fill form, id of inserted user, relation search, relation 1, relation 2);
                    $this->extra_modal_relation($req['us_id'], 7, $ud->id, 2, 7); // son -> father and mother
                    $this->extra_modal_relation($req['us_id'], 8, $ud->id, 2, 8); // daughter -> father and mother
                    return redirect()->back()->with('modalSuccess', 'Relation Added Successfully!!!');
                }
            } elseif (!empty($req['modal_fname']) && empty($req['modal_lname'])) {
                return back()->withErrors(['error' => 'Please fill Last name of Wife']);
            } elseif (empty($req['modal_fname']) && !empty($req['modal_lname'])) {
                return back()->withErrors(['error' => 'Please fill First name of Wife']);
            }
        }
        //Son
        if ($req->modal_relation == 6) {
            $ud = new User;
            $relation1 = new Relation;
            $relation2 = new Relation;
            if (!empty($req['modal_fname'] && $req['modal_lname'])) {
                if (User::where('mobile', $req['num'])->exists()) {
                    return back()->withErrors(['error' => 'Mobile Number Already Exist!']);
                } else {
                    $ud->mobile = $req['num'];
                    $ud->fname = $this->format_string($req['modal_fname']);
                    $ud->lname = $this->format_string($req['modal_lname']);
                    $ud->martial_status = $req['mar_status'];
                    $ud->user_status = '3';
                    $ud->save();
                    echo 'SON-';
                    echo $lid = $ud->id;
                    echo '<br>';
                    $relation1->user_id = $req['us_id'];
                    $relation1->relation = '7'; //Son
                    $relation1->rel_user_id = $ud->id;
                    $relation1->save();
                    if ($udf->gender == 1) {
                        $relation2->user_id = $ud->id;
                        $relation2->relation = '1'; //Father
                        $relation2->rel_user_id = $req['us_id'];
                        $relation2->save();
                        $this->extra_modal_relation($req['us_id'], 6, $ud->id, 7, 2); // father -> son and daughter 
                    } else {
                        $relation2->user_id = $ud->id;
                        $relation2->relation = '2'; //Mother
                        $relation2->rel_user_id = $req['us_id'];
                        $relation2->save();
                        $this->extra_modal_relation($req['us_id'], 5, $ud->id, 7, 1); // father -> son and daughter 
                    }
                    // extra_modal_relation(user id who fill form, id of inserted user, relation search, relation 1, relation 2);
                    $this->extra_modal_relation($req['us_id'], 7, $ud->id, 3, 3); // son -> brother and brother
                    $this->extra_modal_relation($req['us_id'], 8, $ud->id, 3, 4); // daughter -> brother and sister
                    return redirect()->back()->with('modalSuccess', 'Relation Added Successfully!!!');
                }
            } elseif (!empty($req['modal_fname']) && empty($req['modal_lname'])) {
                return back()->withErrors(['error' => 'Please fill Last name of Son']);
            } elseif (empty($req['modal_fname']) && !empty($req['modal_lname'])) {
                return back()->withErrors(['error' => 'Please fill First name of Son']);
            }
        }
        //Daghter
        if ($req->modal_relation == 7) {
            $ud = new User;
            $relation1 = new Relation;
            $relation2 = new Relation;
            if (!empty($req['modal_fname'] && $req['modal_lname'])) {
                if (User::where('mobile', $req['num'])->exists()) {
                    return back()->withErrors(['error' => 'Mobile Number Already Exist!']);
                } else {
                    $ud->mobile = $req['num'];
                    $ud->fname = $this->format_string($req['modal_fname']);
                    $ud->lname = $this->format_string($req['modal_lname']);
                    $ud->martial_status = $req['mar_status'];
                    $ud->gender = '2';
                    $ud->user_status = '3';
                    $ud->save();
                    echo 'DAU-';
                    echo $lid = $ud->id;
                    echo '<br>';
                    $relation1->user_id = $req['us_id'];
                    $relation1->relation = '8'; //Daghter
                    $relation1->rel_user_id = $ud->id;
                    $relation1->save();
                    if ($udf->gender == 1) {
                        $relation2->user_id = $ud->id;
                        $relation2->relation = '1'; //Father
                        $relation2->rel_user_id = $req['us_id'];
                        $relation2->save();
                        $this->extra_modal_relation($req['us_id'], 6, $ud->id, 8, 2); // father -> son and daughter 
                    } else {
                        $relation2->user_id = $ud->id;
                        $relation2->relation = '2'; //Mother
                        $relation2->rel_user_id = $req['us_id'];
                        $relation2->save();
                        $this->extra_modal_relation($req['us_id'], 5, $ud->id, 8, 1); // father -> son and daughter 
                    }
                    // extra_modal_relation(user id who fill form, id of inserted user, relation search, relation 1, relation 2);
                    $this->extra_modal_relation($req['us_id'], 7, $ud->id, 4, 3); // son -> brother and brother
                    $this->extra_modal_relation($req['us_id'], 8, $ud->id, 4, 4); // daughter -> brother and sister
                    return redirect()->back()->with('modalSuccess', 'Relation Added Successfully!!!');
                }
            } elseif (!empty($req['modal_fname']) && empty($req['modal_lname'])) {
                return back()->withErrors(['error' => 'Please fill Last name of Daughter']);
            } elseif (empty($req['modal_fname']) && !empty($req['modal_lname'])) {
                return back()->withErrors(['error' => 'Please fill First name of Daughter']);
            }
        }
        // $user->save();
    }
    public function find_relations(Request $request) //this function use to find the relations between two users.
    {
        // Function to find the relationship between two users
        function find_relationship($user1, $user2)
        {
            // Initialize variables for the breadth-first search
            $queue = new Collection();
            $visited = [];
            $parents = [];
            $relationships = [];
            $found = false;

            $queue->push($user1);
            $visited[$user1] = true;
            $parents[$user1] = null;

            // Perform a breadth-first search
            while (!$queue->isEmpty()) {
                $current = $queue->shift();

                if ($current == $user2) {
                    $found = true;
                    break;
                }

                // Query the relations table for connections
                $results = Relation::select('rel_user_id', 'relation')
                    ->where('user_id', $current)
                    ->get();

                foreach ($results as $row) {
                    $next_user = $row->rel_user_id;
                    $relationship = $row->relation;

                    if (!isset($visited[$next_user])) {
                        $queue->push($next_user);
                        $visited[$next_user] = true;
                        $parents[$next_user] = $current;
                        $relationships[$next_user] = $relationship;
                    }
                }
            }

            // If a relationship is found, format and return the result
            if ($found) {
                $path = [];
                $current = $user2;

                // Build the path from user2 to user1
                while ($current != $user1) {
                    $path[] = $current;
                    $current = $parents[$current];
                }

                $path[] = $user1;
                $path = array_reverse($path);

                $relationship_path = [];
                $prev_user_name = get_user_name($user1);

                foreach ($path as $user_id) {
                    if (isset($relationships[$user_id])) {
                        $relationship = get_relationship_name($relationships[$user_id]);
                        $user_name = get_user_name($user_id);

                        if ($relationship !== "") {
                            $relationship_path[] = "<strong>$relationship</strong>";
                        }

                        if ($user_name !== "") {
                            $relationship_path[] = "$user_name";
                        }

                        $prev_user_name = $user_name;
                    } else {
                        // Handle the case where a relationship is undefined for a user.
                        // You can choose to log an error or handle it as needed.
                    }
                }

                $user1_name = get_user_name($user1);
                $user2_name = get_user_name($user2);
                $relationship_path = implode(" ", $relationship_path);
                $relationResultFound = "Relationship between <strong>$user1_name</strong> and <strong>$user2_name</strong>: ";
                $relationResult = "<i class='icofont icofont-ui-check' style='color: lawngreen'></i> $user1_name $relationship_path";
                return response()->json(['success' => $relationResultFound, 'relationResult' => $relationResult]);
            }

            // If no relationship is found, return an appropriate message
            $user1_name = get_user_name($user1);
            $user2_name = get_user_name($user2);
            $relationResultFound = "Relationship between <strong>$user1_name</strong> and <strong>$user2_name</strong>: ";
            $relationResult = "<i class='icofont icofont-ui-close' style='color: red'></i> Relation Not Found";
            // $"<i class='icofont icofont-ui-close' style='color: red'></i>  No direct relationship found between {$user1->fname} {$user1->lname} and {$user2->fname} {$user2->lname}";
            //         // return redirect()->route('find-relation')->with('success', $relationResultFound);
            return response()->json(['success' => $relationResultFound, 'relationResult' => $relationResult]);
        }

        // Function to get the name of a relationship based on its code
        function get_relationship_name($relationship_code)
        {
            switch ($relationship_code) {
                case '1':
                    return "Father";
                case '2':
                    return "Mother";
                case '3':
                    return "Brother";
                case '4':
                    return "Sister";
                case '5':
                    return "Husband";
                case '6':
                    return "Wife";
                case '7':
                    return "Son";
                case '8':
                    return "Daughter";
                default:
                    return "";
            }
        }

        // Function to get the full name of a user based on their ID
        function get_user_name($user_id)
        {
            $result = User::select('fname', 'lname')
                ->where('id', $user_id)
                ->first();

            if ($result) {
                $fname = $result->fname;
                $lname = $result->lname;
                return "$fname $lname";
            }

            return "";
        }

        // Get user data for User 1 and User 2
        $user1 = User::where(['fname' => $request->fname_us1, 'lname' => $request->lname_us1])->first();
        $user2 = User::where(['fname' => $request->fname_us2, 'lname' => $request->lname_us2])->first();

        // Example usage:
        if (empty($user1)) {
            return response()->json(['error' => 'User 1 not found']);
        } elseif (empty($user2)) {
            return response()->json(['error' => 'User 2 not found']);
        } elseif ($user1 == $user2) {
            return response()->json(['error' => 'User 1 and User 2 are the same person']);
        } elseif (!empty($user1 && $user2)) {
            $relationship_result = find_relationship($user1->id, $user2->id);
            return response()->json(['success' => $relationship_result]);
        } else {
            return response()->json(['error' => 'User not found']);
        }
    }
}
