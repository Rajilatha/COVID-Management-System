<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class VaccineController extends Controller
{
    public function addPost(){
        return view('gs/shedule/edit.postv');
    }

    public function getAllPost(){
        $posts= DB::table('shedules')->get();
        return view('user/vaccine/posts',compact('posts'));
    }
    public function addPostSubmit(Request $request){

        
        $request->validate([
            'detail_id' =>  'required|unique:vaccineones',
            'time' =>  'required',
            'date' => 'required',
            'vaccine' => 'required',
           
            
        ],
        [
            'detail_id.required' => 'id is required',
            //'detail_id.unique' => 'you can get first vaccine appintment only on time',
            'time.required' => 'time is required',
            'date.required' => 'date is required',
            'vaccine.required' => 'vaccine is required',
           

        ]);
        DB::table('vaccineones')->insert([
            'detail_id' => $request->detail_id,
            'time' => $request->time,
            'vaccine' => $request->vaccine,
            'date' =>$request->date     
        ]);
        return back()->with('post_created','Post has been created sucessfully');
    } 
    public function editPost($id){
        $post=DB::table('shedules')->where('id',$id)->first();
     
        return view('user/vaccine/edit-post',compact('post'));
    }
    public function UpdatePost(Request $request){
        $request->validate([
            'detail_id' =>  'required|unique:vaccineones',
            'time' =>  'required',
            'date' => 'required',
            'vaccine' => 'required',
           
            
        ],
        [
            'detail_id.required' => 'id is required',
            //'detail_id.unique' => 'you can get first vaccine appintment only on time',
            'time.required' => 'time is required',
            'date.required' => 'date is required',
            'vaccine.required' => 'vaccine is required',
           

        ]);

        DB::table('vaccineones')->insert([
            'detail_id' => $request->detail_id,
            'time' => $request->time,
            'vaccine' => $request->vaccine,
            'date' =>$request->date     
        ]);
        return back()->with('post_updated','sucessfully Booked');
    }   
}
