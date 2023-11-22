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
    Schema::create('salidas', function (Blueprint $table) {
        $table->id();
        $table->string('tipo_salida');
        $table->decimal('monto_salida', 10, 2); // Utiliza el tipo de dato decimal para el monto con dos lugares decimales
        $table->date('fecha_salida');
        $table->binary('factura_salida'); // Utiliza BLOB para almacenar la imagen de la factura de salida directamente en la base de datos
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salidas');
    }
};
