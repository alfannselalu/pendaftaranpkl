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
        Schema::create('koordinator_p_k_l_s', function (Blueprint $table) {
            $table->id();
            $table->string('nama_koor');
            $table->string('username');
            $table->string('email');
            $table->foreignId('department_id')->nullable();
            $table->string('password');
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('koordinator_p_k_l_s');
    }
};
