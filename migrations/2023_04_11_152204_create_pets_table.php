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
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            //campos de la tabla
            $table->string('name');
            $table->integer('age');
            $table->decimal('waight_kg');
            $table->unsignedBigInreger('owner_id');

            //clave foranea
            $table->foranea('owner_id')->referencias('id')->('owner');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pets');
    }
};
