<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    const STATUS_SUCCESS = 2;
    const STATUS_PENDING = 1;
    const STATUS_FAILED = 0;

    protected $fillable = ['payment_id','user_id','course_id','paid','status','invoice_detail','transaction_id','transaction_result'];

    public function course()
    {
        return $this->belongsTo(Course::class,'course_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function setInvoiceDetailAttribute($data)
    {
        $this->attributes['invoice_detail'] = serialize($data);
    }

    public function getInvoiceDetailAttribute()
    {
        return unserialize($this->attributes['invoice_detail']);
    }

    public function setTransactionResultAttribute($data)
    {
        $this->attributes['transaction_result'] = serialize($data);
    }

    public function getTransactionResultAttribute()
    {
        return unserialize($this->attributes['transaction_result']);
    }
}
