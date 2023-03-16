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
        Schema::table('students', function (Blueprint $table) {
            $table->unsignedBigInteger('class_id')->after('nis')->required();
            $table->foreign('class_id')->references('id')->on('class')->onDelete('restrict'); // dihubungkan ke table class dengan referensi id, foreign->class_id
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {
            $table->dropForeign(['class_id']);// sebelum menghapus foreign ini ketikkan perintah dropForeign 
            $table->dropColumn('class_id');
        });
    }
};
