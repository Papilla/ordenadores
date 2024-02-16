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
        Schema::create('ordenadores', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->id();
            $table->bigInteger('marcas_id')->unsigned();
            $table->bigInteger('tipos_id')->unsigned();
            $table->string('nombre');
            $table->timestamps();
            $table->foreign('marcas_id')->references('id')->on('marcas')->onDelete('cascade');
            $table->foreign('tipos_id')->references('id')->on('tipos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ordenadores');
    }
};
