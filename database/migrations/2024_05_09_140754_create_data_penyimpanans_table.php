<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration {
    public function up(): void
    {
        Schema::create('data_penyimpanan', function (Blueprint $table) {
            $table->id();
            $table->string('item_barang');
            $table->string('merek_barang');
            $table->integer('total_jml_barang');
            $table->integer('total_hrg_barang');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('data_penyimpanans');
    }
};