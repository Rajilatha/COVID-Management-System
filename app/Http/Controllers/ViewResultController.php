<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pcr_result;

class ViewResultController extends Controller
{
    public function getAllDetails(){
        
        $posts = Pcr_result::join('pcr_appointments', 'pcr_appointments.pcr_id', '=', 'pcr_results.id')
        ->get(['pcr_results.fname','pcr_results.nic_no', 'pcr_results.nic_owner','pcr_results.age','pcr_results.result','pcr_appointments.date','pcr_appointments.pcr_id']);
        return view('user/result/posts',compact('posts'));

    
    }
    
    }
