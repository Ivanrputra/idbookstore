<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePembelianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembelian', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_buku');
            $table->string('id_pembeli');
            $table->string('harga');
            $table->enum('status_pembayaran', ['Belum Bayar', 'Sudah Bayar']);
            $table->enum('status_konfirmasi', ['Belum Dikonfirmasi', 'Sudah Dikonfirmasi']);
            $table->string('id_author');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembelian');
    }
}
