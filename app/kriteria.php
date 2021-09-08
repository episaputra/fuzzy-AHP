<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kriteria extends Model
{
    //

    protected $table = 'kriteria';
    protected $primaryKey = 'kriId';
    protected $fillable = ['kriJenis','bobot'];
}
