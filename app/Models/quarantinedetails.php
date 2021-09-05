<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class quarantinedetails extends Model
{
    use HasFactory;
    protected $fillable = [
        'nic_no','fname','address','age','gender','start_date','end_date','status'
      ];
}
