<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pcr_result;
use Illuminate\Support\Facades\DB;

class AppointmentResultController extends Controller
{
    public function getAllDetails(){
        
        $posts = Pcr_result::join('pcr_appointments', 'pcr_appointments.pcr_id', '=', 'pcr_results.id')
        ->get(['pcr_results.fname','pcr_results.lname','pcr_results.nic_no', 'pcr_results.nic_owner','pcr_results.address','pcr_results.age','pcr_appointments.*']);
        return view('phi/pcr_result/postpcr',compact('posts'));

    
    }
    public function editPost($id){
        $post=DB::table('pcr_results')->where('id',$id)->first();
     
        return view('phi/pcr_result/edit-postpcr',compact('post'));
    }
    public function UpdatePost(Request $request){

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
            'nic_owner.required' => 'owner is required',
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
