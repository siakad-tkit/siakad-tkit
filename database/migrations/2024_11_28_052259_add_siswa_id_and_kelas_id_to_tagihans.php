<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSiswaIdAndKelasIdToTagihans extends Migration
{
    public function up()
    {
        Schema::table('tagihans', function (Blueprint $table) {
            $table->unsignedBigInteger('siswa_id');  // Menambahkan kolom siswa_id sebagai unsigned integer
            $table->unsignedBigInteger('kelas_id');  // Menambahkan kolom kelas_id sebagai unsigned integer

            // Menambahkan foreign key
            $table->foreign('siswa_id')->references('id')->on('siswas')->onDelete('cascade');
            $table->foreign('kelas_id')->references('id')->on('kelas')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('tagihans', function (Blueprint $table) {
            $table->dropForeign(['siswa_id']);  // Menghapus foreign key untuk siswa_id
            $table->dropForeign(['kelas_id']);  // Menghapus foreign key untuk kelas_id
            $table->dropColumn(['siswa_id', 'kelas_id']);  // Menghapus kolom siswa_id dan kelas_id
        });
    }
};