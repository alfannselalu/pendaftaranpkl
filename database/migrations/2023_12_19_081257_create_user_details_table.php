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
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('user_id')->constrained('users')->nullable();
            // $table->unsignedBigInteger('nama_id');
            // $table->string('nama');
            // $table->string('nama_sekolah');
            // $table->string('nama_pembimbing');
            // $table->string('kelas');
            // $table->string('jurusan');
            // $table->string('nomor_telepon');
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('alamat');
            // $table->string('kemampuan');
            // $table->date('tanggal_bergabung');
            $table->string('cv')->nullable();
            // $table->enum('status', ['0', 'Diterima', 'Ditolak']); 
            $table->timestamps();
            // $table->foreign('nama_id')->references('nama')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_details');
    }
};
