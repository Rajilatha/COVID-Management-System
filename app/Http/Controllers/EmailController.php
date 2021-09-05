<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Detail;
class EmailController extends Controller
{
    public function editPost($id){
        $post=DB::table('details')->where('id',$id)->first();
     
        return view('gs/details/poste',compact('post'));
    }
}
