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
        Schema::create('detail_transaksi', function (Blueprint $table) {
                $table->id();
    $table->unsignedBigInteger('transaksi_id');
    $table->unsignedBigInteger('menu_id');
    $table->integer('jumlah');
    $table->integer('subtotal');
    // $table->foreign('transaksi_id')->references('transaksi_id')->on('transaksi');
    // $table->foreign('menu_id')->references('menu_id')->on('menu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_transaksi');
    }
};
