<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// app/Models/Inquiry.php
class Inquiry extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'message',
    ];
}
