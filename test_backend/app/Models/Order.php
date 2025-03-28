<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id');
    }

    public function p2p(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id');
    }

    public function market(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id');
    }

}
