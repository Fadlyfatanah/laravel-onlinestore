<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Barang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_barang', function (Blueprint $table) {
            $table->bigIncrements('id_barang');
            $table->string('nama_produk');
            $table->float('harga');
            $table->string('gambar');
            $table->string('jenis');
            $table->string('spek');
            $table->integer('qty_produk');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
