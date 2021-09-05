<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vaccinetwo extends Model
{
    use HasFactory;
    protected $fillable = [
        'detail_id', 'date', 'time', 'vaccine'
       ];
       public function detail(){
        return $this->belongsTo('App\Models\Detail');
    }
}
