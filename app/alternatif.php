<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class alternatif extends Model
{
    //
    protected $table = 'alternatif';
    protected $primaryKey = 'id';
    protected $fillable = ['alJenis','alBobot'];
}
