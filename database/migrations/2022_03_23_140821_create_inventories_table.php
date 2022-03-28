<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_barang');
            $table->string('tanggal_pembelian');
            $table->string('kuantitas');
            $table->string('pembuat')->nullable();
            $table->string('harga');
            $table->string('sumber_dana');
            $table->string('referensi')->nullable();
            $table->string('tanggal_penerimaan');
            $table->string('tempat_pembelian');
            $table->string('kondisi_barang')->nullable();
            $table->string('dokumen')->nullable();

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
        Schema::dropIfExists('inventories');
    }
}
