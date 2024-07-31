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
        Schema::create('docente', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 255)->nullnable(false);
            $table->string('apellido', 255)->nullnable(false);
            $table->string('email', 255)->nullnable(false);
            $table->string('password', 255)->nullnable(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('docente');
    }
};
