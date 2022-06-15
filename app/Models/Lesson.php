<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = [
      'title','number','desc','seo_title','seo_desc','l_file','l_video','status','time','l_free','season','l_course','user_id'
    ];
}
