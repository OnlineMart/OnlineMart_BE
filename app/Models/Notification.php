<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    public const UNREAD = "unread";
    public const READ = "read";

    protected $table = 'notifications';

    protected $fillable = [
        'title',
        'content',
        'status',
        'type',
        'user_id'
    ];
}
