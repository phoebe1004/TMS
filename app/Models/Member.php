<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $table = 'members';
    protected $fillable = [
        'username',
        'email_address',
        'first_name',
        'last_name',
        'address',
        'city',
        'country',
        'postal_code',
        'about_me',
    ];
}
