<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pengembalian extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function penyewaan(): BelongsTo
    {
        return $this->belongsTo(Penyewaan::class);
    }
}
