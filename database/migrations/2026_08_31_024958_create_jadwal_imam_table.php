<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('jadwal_imam', function (Blueprint $table) {
            $table->id('id_jadwal_imam');

            $table->foreignId('id_user')
                ->constrained('users', 'id')
                ->onDelete('cascade');

            $table->date('tanggal');
            $table->string('imam');
            $table->string('khotib');
            $table->string('bilal')->nullable();
            $table->text('keterangan')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('jadwal_imam');
    }
};