<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class OrderDetail extends Model
{
    use HasFactory;

    protected $table = 'order_detail';

    protected $fillable = [
        'product_id',
        'shop_id',
        'order_id',
        'product_name',
        'product_image',
        'product_price',
        'product_quantity',
    ];

  
    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }
}
