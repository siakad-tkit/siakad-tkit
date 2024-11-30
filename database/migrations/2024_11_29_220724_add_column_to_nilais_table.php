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
        Schema::table('nilais', function (Blueprint $table) {
            
            $table->string('agama');
            $table->string('jatidiri');
            $table->string('stem');
            $table->string('project');       
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('nilais', function (Blueprint $table) {
            $table->dropForeign(['siswa_id']);
            $table->dropForeign(['kelas_id']);
            $table->dropForeign(['akademik_id']);
            $table->dropColumn('siswa_id');
            $table->dropColumn('kelas_id');
            $table->dropColumn('akademik_id');
            $table->dropColumn('agama');
            $table->dropColumn('jatidiri');
            $table->dropColumn('stem');
            $table->dropColumn('project');
            
        });
    }
};
