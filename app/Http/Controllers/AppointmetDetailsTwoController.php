<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail;
use Illuminate\Support\Facades\DB;


class AppointmetDetailsTwoController extends Controller
{
    public function getAllDetails(){
        /*$posts = appointment::join('details', 'details.id', '=', 'vaccinetwos.detail_id')
        ->get(['details.fname','details.lname','details.nic_no', 'vaccinetwos.*']);
        return view('gs/details/postv',compact('posts'));*/
        
        $posts = Detail::join('vaccinetwos', 'vaccinetwos.detail_id', '=', 'details.id')
        //->where('vaccinetwos.date', date('Y-m-d'))
        ->get(['details.fname','details.lname','details.nic_no', 'details.age', 'details.v2','vaccinetwos.*']);
        return view('gs/details/postv2',compact('posts'));

       // select `vaccinetwos`.*, `details`.`nic_no` from `vaccinetwos` 
//inner join `details` on `details`.`id` = `vaccinetwos`.`detail_id`;
    }
    public function getPostById($id){
        $post =DB::table('details')->where('id',$id)->first();
        return view('gs/details/single-post',compact('post'));
    }
    /**public function editPost($detail_id){
        $post=Detail::join('vaccinetwos', 'vaccinetwos.detail_id', '=', 'details.id')->where('detail_id',$detail_id)->first();
     
        return view('gs/details/edit-postv2',compact('post'));
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
        Detail::join('vaccinetwos', 'vaccinetwos.detail_id', '=', 'details.id')->where('detail_id',$request->detail_id)->update([
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
        return redirect()->route('postv.get2')->with('success','Post has been updated successfuly!');
      
    }**/
    public function editPost($id){
        $post=DB::table('details')->where('id',$id)->first();
     
        return view('gs/details/edit-postv2',compact('post'));
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
        return redirect()->route('postv.get2')->with('post_updated','Post has been updated successfuly!');
      
    }
}

