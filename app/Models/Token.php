<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Token extends Model
{
    use HasFactory;

    protected $table = 'tokens';
    protected $fillable = array(
        'user_id',
        'refresh_token_value',
        'expires_at'
    );

    public function user() {
        return $this->belongsTo(User::class);
    }
}
