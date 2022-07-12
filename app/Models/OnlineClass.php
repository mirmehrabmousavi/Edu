<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OnlineClass extends Model
{
    use HasFactory;
    public $fillable= ['user_id','meeting_id','topic','start_at','duration','password','start_url','join_url'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
