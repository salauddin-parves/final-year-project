<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WhatsAppOrder extends Model
{
    protected $fillable = [
        'product_id', 
        'customer_name', 
        'customer_phone', 
        'message', 
        'channel', 
        'status',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
