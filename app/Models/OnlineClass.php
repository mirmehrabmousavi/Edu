<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OnlineClass extends Model
{
    use HasFactory;
    public $fillable= ['user_id','topic','start_time','duration','password','join_url','poster','price','d_price'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
