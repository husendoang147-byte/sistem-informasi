<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('inventaris', function (Blueprint $table) {
            $table->id('id_inventaris');
            $table->string('nama_barang');
            $table->integer('jumlah_barang');
            $table->string('foto')->nullable();
            $table->text('keterangan')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('inventaris');
    }
};