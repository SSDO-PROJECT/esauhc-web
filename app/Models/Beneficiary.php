<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beneficiary extends Model
{
    use HasFactory;
    protected $fillable = [
        'nin',
        'id	plan',
        'nin_number',
        'beneficiary_id',
        'agent_id',
        'beneficiary_ref',
        'first_name',
        'last_name',
        'middle_name',
        'dob',
        'mobile_no',
        'email',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
          

    ];

}
