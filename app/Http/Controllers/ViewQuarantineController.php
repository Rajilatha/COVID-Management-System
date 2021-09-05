<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ViewQuarantineController extends Controller
{
  
    public function getAllDetails(){
        $posts= DB::table('quarantinedetails')->get();
        return view('user/quarantine/posts',compact('posts'));
    }
    
    }
