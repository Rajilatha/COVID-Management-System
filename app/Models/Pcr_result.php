<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pcr_result extends Model
{
    use HasFactory;
    protected $fillable =[
        'nic_no','nic_owner','fname','lname','email','address','age','gender', 'result'
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
        return $this->hasone('App\Models\pcr_appointment');
    }    

}
