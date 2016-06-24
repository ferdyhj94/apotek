<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Obat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obat', function (Blueprint $table) {
            $table->increments('id_obat');
            $table->integer('id_kategori');
            $table->string('nama_obat');
            $table->string('kode_obat');
            $table->string('produsen');
            $table->string('distributor');
            $table->string('satuan');
            $table->string('harga_beli');
            $table->integer('stok');
            $table->date('expired');
            $table->timestamps('tgl_masuk');
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
