<?php

namespace App\Http\Controllers;
use App\Mail\UserMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;


class DetailController extends Controller
{
    public function getAllPost(){
        $posts= DB::table('details')->get();
        return view('gs/details/posts',compact('posts'));
    }
 
    public function addPost(){
        return view('gs/details/add-post');
    }
    public function addPostSubmit(Request $request){
        $request->validate([
            'nic_no' =>  'required',
            'fname' =>  'required',
            'lname' => 'required',
            'email' => 'required|email',
            'address' => 'required', 
            'age' => 'required',
            'gender' =>  'required',
            'v1' =>  'required',
            'v2' =>  'required',
            
        ],
        [
            'nic_no.required' => 'NIC number is required',
            'nic_no.max:10|min:10' => 'not valid NIC number',
            'fname.required' => 'First Name is required',
            'lname.required' => 'last Name is required',
            'email.required' => 'email is required',
            'age.required' => 'Age is required',
            'gender.required' => 'gender is required',
            'address.required' => 'Address is required',
            'v1.required' => 'gender is required',
            'v2.required' => 'Address is required',

        ]);
        DB::table('details')->insert([
            'nic_no' => $request->nic_no,
            'fname' => $request->fname,
            'lname' =>$request->lname,
            'email' => $request->email,
            'address' =>$request->address,
            'age' =>$request->age,
            'gender' => $request->gender,
            'v1' =>$request->v1,
            'v2' =>$request->v2     
        ]);

        //$this->sendUserId($send);
        return redirect()->route('post.get')->with('success','Post created successfully.');
      
      
    }

    //public function sendUserId($send){
       // Mail::to($send->email)->send(new UserMail($send));

   // }
    public function getPostById($id){
        $post =DB::table('details')->where('id',$id)->first();
        return view('gs/details/single-post',compact('post'));
    }
    public function deletePost($id){
        DB::table('details')->where('id',$id)->delete();
        return back()->with('gs/post_deleted','Post has been deleted successfuly!');
 
    }
    public function editPost($id){
        $post=DB::table('details')->where('id',$id)->first();
     
        return view('gs/details/edit-post',compact('post'));
    }
    public function UpdatePost(Request $request){

        $request->validate([
            'nic_no' =>  'required|max:10',
            'fname' =>  'required',
            'lname' => 'required',
            'email' => 'required',
            'address' => 'required', 
            'age' => 'required',
            'gender' =>  'required',
            'v1' =>  'required',
            'v2' =>  'required' ],
            [
                'nic_no.required' => 'NIC number is required',
            'nic_no.max:10|min:10' => 'not valid NIC number',
            'fname.required' => 'First Name is required',
            'lname.required' => 'last Name is required',
            'email.required' => 'email is required',
            'age.required' => 'Age is required',
            'gender.required' => 'gender is required',
            'address.required' => 'Address is required',
            'v1.required' => 'gender is required',
            'v2.required' => 'Address is required',

            
        ]);
        DB::table('details')->where('id',$request->id)->update([
            'nic_no' => $request->nic_no,
            'fname' => $request->fname,
            'lname' =>$request->lname,
            'email' => $request->email,
            'address' =>$request->address,
            'age' =>$request->age,
            'gender' => $request->gender,
            'v1' =>$request->v1,
            'v2' =>$request->v2  
        ]);
        return redirect()->route('post.get')->with('post_updated','Post has been updated successfuly!');
      
    }
 }
  

