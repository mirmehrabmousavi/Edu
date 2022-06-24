<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title','desc','b_desc','price','price_off','d_price','d_price_off','seo_title','seo_desc','c_poster','c_demo',
        'time','status','status_upload','language','category_id','user_id','saved'
    ];
}
