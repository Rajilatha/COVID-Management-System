<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuarantineController extends Controller
{
    public function getAllPost(){
        $posts= DB::table('quarantinedetails')->get();
        return view('phi/quarantine/posts',compact('posts'));
    }
 
    public function addPost(){
        return view('phi/quarantine/add-post');
    }
    public function addPostSubmit(Request $request){
        $request->validate([
            'nic_no' =>  'required',            
            'fname' =>  'required',            
            'address' => 'required', 
            'age' => 'required',
            'gender' =>  'required',
            'start_date'=>  'required',
            'end_date'=>  'required',
            'status' =>  'required',            
                       
        ],
        [
            'nic_no.required' => 'NIC number is required',
            'nic_no.max:10|min:10' => 'not valid NIC number',            
            'fname.required' => 'first Name is required',            
            'age.required' => 'age is required',
            'gender.required' => 'gender is required',
            'address.required' => 'Address is required',
            'status.required' => 'result is required',
            'start_date.required' => 'start date is required',
            'end_date.required' => 'end date is required',
         

        ]);
        DB::table('quarantinedetails')->insert([
            'nic_no' => $request->nic_no,            
            'fname' => $request->fname,            
            'address' =>$request->address,
            'age' =>$request->age,
            'gender' => $request->gender,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'status' =>$request->status,
             
               
        ]);
        return redirect()->route('post.getq')->with('success','Post created successfully.');
      
    }
    public function getPostById($id){
        $post =DB::table('quarantinedetails')->where('id',$id)->first();
        return view('phi/quarantine/single-post',compact('post'));
    }
    public function deletePost($id){
        DB::table('quarantinedetails')->where('id',$id)->delete();
        return back()->with('phi/post_deleted','Post has been deleted successfuly!');
 
    }
    public function editPost($id){
        $post=DB::table('quarantinedetails')->where('id',$id)->first();
     
        return view('phi/quarantine/edit-post',compact('post'));
    }
    public function UpdatePosts(Request $request){

        $request->validate([
            'nic_no' =>  'required|max:10',           
            'fname' =>  'required',            
            'address' => 'required', 
            'age' => 'required',
            'gender' =>  'required',
            'start_date'=>  'required',
            'end_date'=>  'required',
            'status' =>  'required',            
                       
            
             ],
            [
                'nic_no.required' => 'NIC number is required',
                'nic_no.max:10|min:10' => 'not valid NIC number',            
                'fname.required' => 'first Name is required',            
                'age.required' => 'age is required',
                'gender.required' => 'gender is required',
                'address.required' => 'Address is required',
                'status.required' => 'result is required',
                'start_date.required' => 'start date is required',
                'end_date.required' => 'end date is required',

            
        ]);
        DB::table('quarantinedetails')->where('id',$request->id)->update([
            'nic_no' => $request->nic_no,            
            'fname' => $request->fname,            
            'address' =>$request->address,
            'age' =>$request->age,
            'gender' => $request->gender,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'status' =>$request->status,
            
        ]);
        return back()->with('post_updated','Post has been updated successfuly!');
      
    }
 }
  

