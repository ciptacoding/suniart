<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('detail_penyewaans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('penyewaan_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('produk_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->bigInteger('jumlah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_penyewaans');
    }
};
