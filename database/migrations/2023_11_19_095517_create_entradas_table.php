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
    Schema::create('entradas', function (Blueprint $table) {
        $table->id();
        $table->string('tipo_entrada');
        $table->decimal('monto_salida', 10, 2);
        $table->date('fecha');
        $table->binary('factura'); // Utiliza BLOB para almacenar la imagen directamente en la base de datos
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entradas');
    }
};
