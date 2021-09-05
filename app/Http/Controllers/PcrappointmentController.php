<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PcrappointmentController extends Controller
{
    public function addPost(){
        return view('phi/pcr_schedule/edit.postpcr');
    }

    public function getAllPost(){
        $posts= DB::table('testings')->get();
        return view('user/pcr/posts',compact('posts'));
    }
    public function addPostSubmit(Request $request){        
        $request->validate([
            'pcr_id' =>  'required|unique:pcr_appointments',
            'time_slot' =>  'required',
            'date' => 'required',
            'place' => 'required',
           
            
        ],
        [
            'pcr_id.required' => 'pcr id is required',            
            'time_slot.required' => 'time is required',
            'date.required' => 'date is required',
            'place.required' => 'vaccine is required',
           

        ]);
        DB::table('pcr_appointments')->insert([
            'pcr_id' => $request->pcr_id,
            'time_slot' => $request->time_slot,
            'place' => $request->place,
            'date' =>$request->date     
        ]);
        return back()->with('post_created','Post has been created sucessfully');
    } 
    public function editPost($id){
        $post=DB::table('testings')->where('id',$id)->first();
     
        return view('user/pcr/edit-post',compact('post'));
    }
    public function UpdatePost(Request $request){
        $request->validate([
            'pcr_id' =>  'required|unique:pcr_appointments',
            'time_slot' =>  'required',
            'date' => 'required',
            'place' => 'required',
           
            
        ],
        [
            'pcr_id.required' => 'pcr id is required',            
            'time_slot.required' => 'time is required',
            'date.required' => 'date is required',
            'place.required' => 'vaccine is required',
           

        ]);

        DB::table('pcr_appointments')->insert([
            'pcr_id' => $request->pcr_id,
            'time_slot' => $request->time_slot,
            'place' => $request->place,
            'date' =>$request->date     
        ]);
        return back()->with('post_updated','sucessfully Booked');
    }   
}
