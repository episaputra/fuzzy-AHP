<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    //
    protected $table = 'profile';
    protected $primaryKey = 'id';
    protected $fillable = ['nama','pekerjaan','kriteria','hobi','job','sn'];

    public $timestamps =false;
}
