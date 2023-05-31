<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamilyMember extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id',
        'relation',
        'live',
        'image',
        'phone',
        'dob',
        'birth_city',
        'birth_state',
        'birth_country',
    ];

}
