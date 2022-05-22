<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title','slug','desc','b_desc','price','price_off','seo_title','seo_desc','c_poster','c_file','c_demo','c_alt_img','c_slider_img',
        'time','status','status_upload'
    ];
}
