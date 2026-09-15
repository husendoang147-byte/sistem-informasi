<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pengaturan', function (Blueprint $table) {
            $table->id();

            $table->string('nama_masjid')->default('Masjid');
            $table->text('deskripsi')->nullable();
            $table->string('logo')->nullable();
            $table->text('alamat')->nullable();
            $table->string('no_hp', 30)->nullable();
            $table->string('email')->nullable();
            $table->string('tahun_berdiri', 10)->nullable();
            $table->string('website')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pengaturan');
    }
};