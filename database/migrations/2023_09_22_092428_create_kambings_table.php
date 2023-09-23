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
        Schema::create('kambings',function(Blueprint $table) {
            $table->uuid('id')->primary();
            $table->integer('gender')->comment("0: jantan, 1: betina");
            $table->date('tanggal_lahir');
            $table->integer('no_kambing')->unique();
            $table->integer('hamil')->comment("0: tidak, 1: ya");
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kambings');
    }
};
