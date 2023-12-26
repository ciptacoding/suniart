<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pembayaran extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function penyewaan(): BelongsTo
    {
        return $this->belongsTo(Penyewaan::class);
    }
}
