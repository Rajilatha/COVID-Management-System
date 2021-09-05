<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PcrScheduleController extends Controller
{
    public function getAllPost(){
        $posts= DB::table('testings')->get();
        return view('phi/pcr_schedules/posts',compact('posts'));
    }
 
    public function addPost(){
        return view('phi/pcr_schedules/add-post');
    }
    public function addPostSubmit(Request $request){
        $request->validate([
            
            'date' =>  'required',
            'time_slot' => 'required',
            'place' => 'required'
           
            
        ],
        [
           
            'date.required' => 'date is required',
            'time_slot.required' => 'time_slot is required',
            'place.required' => 'place required',
            

        ]);
        DB::table('testings')->insert([
            'date' => $request->date,
            'time_slot' => $request->time_slot,
            'place' =>$request->place,
                
        ]);

        //$this->sendUserId($send);
        return redirect()->route('post.getpcrschedule')->with('success','Post created successfully.');
      
      
    }

    //public function sendUserId($send){
       // Mail::to($send->email)->send(new UserMail($send));

   // }
    public function getPostById($id){
        $post =DB::table('testings')->where('id',$id)->first();
        return view('phi/pcr_schedules/single-post',compact('post'));
    }
    public function deletePost($id){
        DB::table('testings')->where('id',$id)->delete();
        return back()->with('phi/post_deleted','Post has been deleted successfuly!');
 
    }
    public function editPost($id){
        $post=DB::table('testings')->where('id',$id)->first();
     
        return view('phi/pcr_schedules/edit-post',compact('post'));
    }
    public function UpdatePost(Request $request){

        $request->validate([
            
            'date' =>  'required',
            'time_slot' => 'required',
            'place' => 'required'
           
            
        ],
        [
           
            'date.required' => 'date is required',
            'time_slot.required' => 'time is required',
            'place.required' => 'place required',
            

        ]);
        DB::table('testings')->insert([
            'date' => $request->date,
            'time_slot' => $request->time_slot,
            'place' =>$request->place,
                
        ]);
      
        return redirect()->route('post.getpcrschedule')->with('success','Post has been updated successfuly!');
      
    }
 }
  



