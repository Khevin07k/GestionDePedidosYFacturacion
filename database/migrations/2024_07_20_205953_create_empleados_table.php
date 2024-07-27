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
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre',100);
            $table->string('Apellido',100);
            $table->string('Ci',50);
            $table->string('Telefono',15);
            $table->date('FechaContratacion');
            $table->string("Puesto",50);
            $table->string("Email",50);
            $table->foreignId("restaurante_id")->constrained()->references("id")->on("restaurantes");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
