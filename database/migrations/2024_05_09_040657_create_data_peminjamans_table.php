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
        Schema::create('data_peminjamen', function (Blueprint $table) {
            $table->id("kode_barang");
            $table->string("item_barang");
            $table->string("merek_barang");
            $table->integer("jml_barang");
            $table->string("nama_peminjam");
            $table->string("tgl_pinjam");
            $table->string("ket_pinjam");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_peminjamen');
    }
};