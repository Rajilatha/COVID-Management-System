<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Corona extends Model
{
    use HasFactory;
    protected $fillable = [
        'total_cases','active_cases','new_cases', 'recover','deaths'
    ];
}
