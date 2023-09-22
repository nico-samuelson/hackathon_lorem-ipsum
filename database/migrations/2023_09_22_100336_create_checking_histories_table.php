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
        Schema::create('checking_histories', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('kambing_id');
            $table->foreign('kambing_id')->references('id')->on('kambings');
            $table->uuid('inspektur_id');
            $table->foreign('inspektur_id')->references('id')->on('inspekturs');
            $table->integer('status')->comment('0: sehat, 1: sakit');
            $table->text('keterangan')->nullable();
            $table->text('foto');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checking_histories');
    }
};
