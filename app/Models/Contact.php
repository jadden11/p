<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'fristname',
        'lastname',
        'email',
        'phone',
        'message',
    ];
}
