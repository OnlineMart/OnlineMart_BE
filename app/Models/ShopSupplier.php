<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopSupplier extends Model
{
    use HasFactory;

    protected $table = 'shop_suppliers';

    protected $fillable = [
        'shop_id',
        'supplier_id',
    ];
}
