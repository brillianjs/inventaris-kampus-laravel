<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('data_masuk', function (Blueprint $table) {
            $table->id();
            $table->string('kd_barang')->unique();
            $table->string('item_barang');
            $table->string('merek_barang');
            $table->integer('jml_barang');
            $table->integer('hrg_barang');
            $table->string('sts_barang');
            $table->integer('total_harga')->default(0);
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_masuks');
    }
};