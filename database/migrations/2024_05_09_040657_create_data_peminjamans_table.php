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
        Schema::create('data_peminjamen', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("id_barang");
            $table->string("nama_peminjam");
            $table->string("tgl_pinjam");
            $table->integer("jml_barang");
            $table->string("ket_pinjam");
            $table->string("status_pinjam")->default(0);
            $table->timestamps();

            $table->foreign('id_barang')->references('id')->on('data_masuk')->onDelete('cascade');
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