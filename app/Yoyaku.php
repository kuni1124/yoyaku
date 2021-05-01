<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Yoyaku extends Model
{
    protected $table = 'yoyakus';
    protected $fillable = [
        'name','tel',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
