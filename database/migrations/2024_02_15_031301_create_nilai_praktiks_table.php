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
        Schema::create('nilai_praktiks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users'); 
            $table->string('nama_sekolah'); 
            $table->string('nilai');
            $table->string('aspek_penilaian');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilai_praktiks');
    }
};
