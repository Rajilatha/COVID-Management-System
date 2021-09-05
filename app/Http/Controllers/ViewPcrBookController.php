<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\testing;
use Illuminate\Support\Facades\DB;

class ViewPcrBookController extends Controller
{
    public function getAllDetails(){
        
        $posts= DB::table('testings')->get();
        return view('nonuserpcrbooking/posts',compact('posts'));
    
    }
}
