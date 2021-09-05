<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;
    protected $fillable =[
        'nic_no','fname','lname','email','address','age','gender', 'v1', 'v2'
    ];

    //public function Appointment()
    //{
        //return $this->hasone('App\Models\appointment');
   // }

    //public function Appointment2()
   // {
        //return $this->hasone('App\Models\Appointment2');
   // }
    public function Appointment()
    {
        return $this->hasone('App\Models\vaccineone');
    }

    public function Appointment2()
    {
        return $this->hasone('App\Models\vaccinetwo');
    }

}
