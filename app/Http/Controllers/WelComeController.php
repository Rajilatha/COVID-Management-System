<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
//use App\Models\Country;
class WelComeController extends Controller
{
    public function getAllPost(){
        $posts= DB::table('coronas')->get();
        return view('welcome',compact('posts'));
    }
    public function getAll(){
        $covids= DB::table('covids')->get();
        return view('districts',compact('covids'));
    }
  

}
