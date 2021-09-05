<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Detail;
use App\Models\vaccinetwo;

class SecondCertificateController extends Controller
{
    public function editPost($detail_id){
        $post=Detail::join('vaccinetwos', 'vaccinetwos.detail_id', '=', 'details.id')->where('detail_id',$detail_id)->first();
     
        return view('gs/details/postc2',compact('post'));
    }
}
