<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderStatus extends Model
{
    use HasFactory;

    public const PENDING    = '0';
    public const PROCESSING = '1';
    public const DELIVERED  = '2';
    public const SHIPPING   = '3';
    public const CANCELLED  = '4';
}
