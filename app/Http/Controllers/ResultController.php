<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResultController extends Controller
{
    public function getAllPost(){
        $posts= DB::table('pcr_results')->get();
        return view('phi/pcr_result/posts',compact('posts'));
    }
 
    public function addPost(){
        return view('phi/pcr_result/add-post');
    }
    public function addPostSubmit(Request $request){
        $request->validate([
            'nic_no' =>  'required|regex:/^[0-9]{9}v$/',
            'nic_owner' => 'required',
            'fname' =>  'required',
            'lname' => 'required',
            'email' => 'required|email',
            'address' => 'required', 
            'age' => 'required',
            'gender' =>  'required',
            'result' =>  'required',            
                       
        ],
        [
            'nic_no.required' => 'NIC number is required',
            'nic_no.max:10|min:10' => 'not valid NIC number',
            'nic_owner.required' => 'nic_owner is required',
            'fname.required' => 'first Name is required',
            'lname.required' => 'last Name is required',
            'email.required' => 'email is required',
            'age.required' => 'age is required',
            'gender.required' => 'gender is required',
            'address.required' => 'Address is required',
            'result.required' => 'result is required',
         

        ]);
        DB::table('pcr_results')->insert([
            'nic_no' => $request->nic_no,
            'nic_owner' => $request->nic_owner,
            'fname' => $request->fname,
            'lname' =>$request->lname,
            'email' => $request->email,
            'address' =>$request->address,
            'age' =>$request->age,
            'gender' => $request->gender,
            'result' =>$request->result,
             
               
        ]);
        return redirect()->route('post.getphi')->with('success','Post created successfully.');
      
    }
    public function getPostById($id){
        $post =DB::table('pcr_results')->where('id',$id)->first();
        return view('phi/pcr_result/single-post',compact('post'));
    }
    public function deletePost($id){
        DB::table('pcr_results')->where('id',$id)->delete();
        return back()->with('phi/post_deleted','Post has been deleted successfuly!');
 
    }
    public function editPost($id){
        $post=DB::table('pcr_results')->where('id',$id)->first();
     
        return view('phi/pcr_result/edit-post',compact('post'));
    }
    public function UpdatePosts(Request $request){

        $request->validate([
            'nic_no' =>  'required|max:10',
            'nic_owner' =>  'required',
            'fname' =>  'required',
            'lname' => 'required',
            'email' => 'required',
            'address' => 'required', 
            'age' => 'required',
            'gender' =>  'required',
            'result' =>  'required',
            
             ],
            [
                'nic_no.required' => 'NIC number is required',
            'nic_no.max:10|min:10' => 'not valid NIC number',
            'nic_owner.required' => 'nic owner is required',
            'fname.required' => 'First Name is required',
            'lname.required' => 'last Name is required',
            'email.required' => 'email is required',
            'age.required' => 'Age is required',
            'gender.required' => 'gender is required',
            'address.required' => 'Address is required',
            'result.required' => 'result is required',
            

            
        ]);
        DB::table('pcr_results')->where('id',$request->id)->update([
            'nic_no' => $request->nic_no,
            'nic_owner' => $request->nic_owner,
            'fname' => $request->fname,
            'lname' =>$request->lname,
            'email' => $request->email,
            'address' =>$request->address,
            'age' =>$request->age,
            'gender' => $request->gender,
            'result' =>$request->result,
             
            
        ]);
        return back()->with('post_updated','Post has been updated successfuly!');
      
    }
 }
  

