<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\Relation;


class AdminCtrl extends Controller
{
    public function manage_user(){
        // $data=Admin::find(session()->get('admin')['id']);
        $user = User::all();
        return view('admin/manage-user')->with(compact('user'));
    }
    public function manage_request(){
        // $data=Admin::find(session()->get('admin')['id']);
        $user = User::where('user_status','1')->get();
        // print_r($user);
        return view('admin/manage-request')->with(compact('user'));
    }
    public function admin_profile(){
        $admin = User::find(session()->get('admin')['id']);
        // print_r($admin);
        return view('admin.admin-profile')->with(compact('admin'));       
    }
    public function view_user_profile($id){
        $user = User::where('id',$id)->first();
        $msg="data sent";
        return view('admin.edit-profile')->with(compact('user','msg'));
    }
    public function view_admin_profile(){
        $user = User::where('id',session()->get('admin')['id'])->first();
        $msg="data sent";
        return view('admin.edit-profile')->with(compact('user','msg'));
    }

    public function view_relations(){
        $rel=Relation::select(
            'users1.fname AS user_fname',
            'users1.lname AS user_lname',
            'users2.fname AS rel_user_fname',
            'users2.lname AS rel_user_lname',
            'users1.id AS relation_id',
            'users1.*',
            'relations.*'
        )   
            ->join('users AS users1', 'relations.user_id', '=', 'users1.id')
            ->join('users AS users2', 'relations.rel_user_id', '=', 'users2.id')
            ->get();
            // echo $rel;
        return view('admin.view-relations')->with(compact('rel'));
    }
    public function admin_dashboard(){
        $totaluser=User::count('id');
        $totalrelation=Relation::count('id');
        $admin_data=['tuser'=>$totaluser,'trelation'=>$totalrelation];
        return view('admin.index')->with(compact('admin_data'));
    }

    public function approved_user(Request $req,$id){
        echo "APPROVED";
        // $data = User::find($id);
        // $data->user_status = "2";
        // $data->save();
        // return redirect('/admin/manage-request');
    }
    public function reject_user($id){
        echo "REJECT";
        // $data = User::find($id);
        // $data->user_status = "2";
        // $data->save();
        // return redirect('/admin/manage-request');
    }

    public function delete_user($id){
        $data = User::find($id);
        if(!empty($data)){
            $data->delete();
            return redirect()->back()->with('successDelete','User Deleted Successfully!');
        }else{
            return redirect()->back()->with('error','User Not Found!');
        }
    }
    public function delete_relation($id){
        $data = Relation::find($id);
        if(!empty($data)){
            $data->delete();
            return redirect()->back()->with('successDelete','Relation Deleted Successfully!');
        }else{
            return redirect()->back()->with('error','Relation Not Found!');
        }
    }

    public function find_relations(Request $request)
    {
        function findRelationship($user1Id, $user2Id)
        {
            $relations = DB::table('relations')
                ->where('user_id', $user1Id)
                ->orWhere('rel_user_id', $user1Id)
                ->orWhere('user_id', $user2Id)
                ->orWhere('rel_user_id', $user2Id)
                ->get();

            $user1 = DB::table('users')->where('id', $user1Id)->first();
            $user2 = DB::table('users')->where('id', $user2Id)->first();

            foreach ($relations as $relation) {
                if (($relation->user_id == $user1Id && $relation->rel_user_id == $user2Id) ||
                    ($relation->user_id == $user2Id && $relation->rel_user_id == $user1Id)
                ) {
                    $relationship = getRelationshipString($relation->relation);
                    $relationResultFound = "Relationship between <strong>{$user1->fname} {$user1->lname} </strong> and <strong>{$user2->fname} {$user2->lname}</strong>:";
                    $relationResult="<i class='icofont icofont-ui-check' style='color: lawngreen'></i> {$user1->fname} {$user1->lname} <strong>$relationship</strong> {$user2->fname} {$user2->lname}";
                    return redirect()->route('find-relation')->with(['success'=>$relationResultFound,'relationResult'=>$relationResult]);
                    // die;
                }
            }
            $relationResultFound = "<i class='icofont icofont-ui-close' style='color: red'></i>  No direct relationship found between {$user1->fname} {$user1->lname} and {$user2->fname} {$user2->lname}";
            return redirect()->route('find-relation')->with('success', $relationResultFound);
        }

        function getRelationshipString($relationCode)
        {
            switch ($relationCode) {
                case 1:
                    return 'Father';
                case 2:
                    return 'Mother';
                case 3:
                    return 'Brother';
                case 4:
                    return 'Sister';
                case 5:
                    return 'Husband';
                case 6:
                    return 'Wife';
                case 7:
                    return 'Son';
                case 8:
                    return 'Daughter';
                default:
                    return 'Unknown Relationship';
            }
        }

        $userData1=User::where(['fname'=>$request->fname_us1,'lname'=>$request->lname_us1])->first();
        $userData2=User::where(['fname'=>$request->fname_us2,'lname'=>$request->lname_us2])->first();
        // Example usage:
        if(empty($userData1 )){
            return redirect()->route('find-relation')->with('error', 'User 1 not found');
        }elseif(empty($userData2)){
            return redirect()->route('find-relation')->with('error', 'User 2 not found');
        }elseif(!empty($userData1 && $userData2)){
            $user1Id = $userData1->id;
            $user2Id = $userData2->id;
            $relationship = findRelationship($user1Id, $user2Id);
            echo $relationship;
        }else{
            return redirect()->route('find-relation')->with('error', 'User not found');
        }
    }
}
