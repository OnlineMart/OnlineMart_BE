<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    public const DISABLED = "0";
    public const ENABLED  = "1";

    protected $table = 'brands';

    protected $fillable = ['name', 'description', 'image'];
}
