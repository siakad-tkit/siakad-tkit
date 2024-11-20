<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('gurus', function (Blueprint $table) {
            $table->id();
            $table->string('foto')->nullable;
            $table->string('status');
            $table->string('bagian');
            $table->string('nama');
            $table->string('nip')->unique();
            $table->string('nuptk')->unique();
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->string('agama');
            $table->string('status_nikah');
            $table->string('kelamin');
            $table->string('alamat');
            $table->string('no');
            $table->string('email')->unique();
            $table->string('mulai_kerja');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gurus');
    }
};
