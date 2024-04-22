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
        Schema::create('data_agendas', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->foreignId('user_id')->constrained('users');
            $table->string('kelas'); 
            $table->string('jurusan');  
            $table->foreignId('kategori_id')->constrained('kategori_agendas');
            $table->timestamps();
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_agendas');
    }
};
     // $table->string('nama');
     // $table->string('jurusan');
     // $table->string('kelas');
