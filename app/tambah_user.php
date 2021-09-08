<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tambah_user extends Model
{
    //
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $fillable = ['name','email','password','level'];

    public $timestamps =false;
}
