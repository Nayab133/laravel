<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class crud extends Model
{
    public $timestamps = false;
    protected $fillable =['Email','pass'];
    protected $table = 'login';
}
