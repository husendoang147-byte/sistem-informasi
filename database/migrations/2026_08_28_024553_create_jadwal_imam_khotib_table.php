<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('jadwal_imam_khotib', function (Blueprint $table) {
            $table->id('id_jadwal_imam_khotib');

            $table->foreignId('id_user')
                ->constrained('users')
                ->onDelete('cascade');

            $table->date('tanggal');
            $table->string('imam');
            $table->string('khotib');
            $table->string('bilal')->nullable();
            $table->time('waktu')->nullable();
            $table->string('lokasi')->nullable();
            $table->text('keterangan')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jadwal_imam_khotib');
    }
};