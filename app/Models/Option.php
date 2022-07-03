<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;
    protected $fillable = ['title','ico','ico','banner_txt_1','banner_img_1','video_poster','video_file','banner_txt_2','banner_img_2'];
}
