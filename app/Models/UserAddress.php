<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    use HasFactory;

    protected $table = "user_addresses";

    protected $fillable = [
        "name",
        "phone",
        "city",
        "district",
        "ward",
        "is_default",
        "user_id"
    ];
}
