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
        Schema::create('members', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('no_ktp');
            $table->string('nama lengkap');
            $table->string('alamat');
            $table->string('no_hp');
            $table->string('email');
            $table->string('username');
            $table->text('password');
            $table->text('foto_ktp');
            $table->integer('status')->comment('0: daftar, 1: aktif, 2: nonaktif');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};