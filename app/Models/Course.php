<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title','desc','b_desc','price','price_off','d_price','d_price_off','seo_title','seo_desc','c_poster','c_demo',
        'time','status','status_upload','language','category_id','user_id','saved'
    ];

    public function isPurchased()
    {
        return PurchasedCourse::where('user_id',Auth::id())->where('course_id',$this->id)->exists();
    }
}
