<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SheduleTwoController extends Controller
{
    public function getAllPost(){
        $posts= DB::table('sheduluetwos')->get();
        return view('gs/sheduluetwos/posts',compact('posts'));
    }
 
    public function addPost(){
        return view('gs/sheduluetwos/add-post');
    }
    public function addPostSubmit(Request $request){
        $request->validate([
            
            'date' =>  'required',
            'time' => 'required',
            'vaccine' => 'required'
           
            
        ],
        [
           
            'date.required' => 'date is required',
            'time.required' => 'time is required',
            'vaccine.required' => 'vaccine required',
            

        ]);
        DB::table('sheduluetwos')->insert([
            'date' => $request->date,
            'time' => $request->time,
            'vaccine' =>$request->vaccine,
                
        ]);

        //$this->sendUserId($send);
        return redirect()->route('post.getshedule2')->with('success','Post created successfully.');
      
      
    }

    //public function sendUserId($send){
       // Mail::to($send->email)->send(new UserMail($send));

   // }
    public function getPostById($id){
        $post =DB::table('sheduluetwos')->where('id',$id)->first();
        return view('gs/sheduluetwos/single-post',compact('post'));
    }
    public function deletePost($id){
        DB::table('sheduluetwos')->where('id',$id)->delete();
        return back()->with('gs/post_deleted2','Post has been deleted successfuly!');
 
    }
    public function editPost($id){
        $post=DB::table('sheduluetwos')->where('id',$id)->first();
     
        return view('gs/sheduluetwos/edit-post',compact('post'));
    }
    public function UpdatePost(Request $request){

        $request->validate([
            
            'date' =>  'required',
            'time' => 'required',
            'vaccine' => 'required'
           
            
        ],
        [
           
            'date.required' => 'date is required',
            'time.required' => 'time is required',
            'vaccine.required' => 'vaccine required',
            

        ]);
        DB::table('sheduluetwos')->insert([
            'date' => $request->date,
            'time' => $request->time,
            'vaccine' =>$request->vaccine,
                
        ]);
      
        return redirect()->route('post.getshedule2')->with('success','Post has been updated successfuly!');
      
    }
 }

