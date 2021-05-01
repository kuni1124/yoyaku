<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Yoyaku extends Model
{
    protected $table = 'yoyakus';
    protected $fillable = [
        'name','tel',
    ];
}
