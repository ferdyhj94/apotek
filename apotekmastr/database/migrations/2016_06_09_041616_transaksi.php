<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Transaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->increments('id_transaksi');
            $table->integer('id_obat');
            $table->integer('id_kategori');
            $table->string('nama_pembeli');
            $table->string('jk');
            $table->timestamps('jk');
            $table->string('jumlah');
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
