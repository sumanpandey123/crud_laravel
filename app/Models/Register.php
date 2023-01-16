<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Libraries\Globallibrary;
use DB;

class Register extends Model
{
    use HasFactory;
    protected $table= "register";
    protected $fillable=[
        'id',
        'name',
        'number',
        'email',
        'password'
    ];
}
