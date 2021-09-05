<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SheduleController extends Controller
{
    public function getAllPost(){
        $posts= DB::table('shedules')->get();
        return view('gs/shedules/posts',compact('posts'));
    }
 
    public function addPost(){
        return view('gs/shedules/add-post');
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
        DB::table('shedules')->insert([
            'date' => $request->date,
            'time' => $request->time,
            'vaccine' =>$request->vaccine,
                
        ]);

        //$this->sendUserId($send);
        return redirect()->route('post.getshedule')->with('success','Post created successfully.');
      
      
    }

    //public function sendUserId($send){
       // Mail::to($send->email)->send(new UserMail($send));

   // }
    public function getPostById($id){
        $post =DB::table('shedules')->where('id',$id)->first();
        return view('gs/shedules/single-post',compact('post'));
    }
    public function deletePost($id){
        DB::table('shedules')->where('id',$id)->delete();
        return back()->with('gs/post_deleted','Post has been deleted successfuly!');
 
    }
    public function editPost($id){
        $post=DB::table('shedules')->where('id',$id)->first();
     
        return view('gs/shedules/edit-post',compact('post'));
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
        DB::table('shedules')->insert([
            'date' => $request->date,
            'time' => $request->time,
            'vaccine' =>$request->vaccine,
                
        ]);
      
        return redirect()->route('post.getshedule')->with('success','Post has been updated successfuly!');
      
    }
 }
  



