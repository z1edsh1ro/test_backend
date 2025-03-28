<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function p2p(): BelongsTo
    {
        return $this->belongsTo(User::class, 'p2p_id');
    }

    public function market(): BelongsTo
    {
        return $this->belongsTo(User::class, 'market_id');
    }

}
