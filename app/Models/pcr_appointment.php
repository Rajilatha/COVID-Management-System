<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pcr_appointment extends Model
{
    use HasFactory;
    protected $fillable = [
        'pcr_id', 'date', 'time_slot', 'place'
       ];
       public function pcr_result(){
         return $this->belongsTo('App\Models\Pcr_result');
     }
 }
 

