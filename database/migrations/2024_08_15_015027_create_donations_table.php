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
        Schema::create('donations', function (Blueprint $table) {
            $table->id(); // ID autoincremental
            $table->string('first_name')->nullable(); // Nombre del donante
            $table->string('last_name')->nullable(); // Apellido del donante
            $table->string('email')->nullable(); // Correo electrónico del donante
            $table->string('phone')->nullable(); // Teléfono del donante (opcional)
            $table->text('address')->nullable();// Dirección del donante
            $table->string('city')->nullable(); // Ciudad del donante
            $table->string('country')->nullable(); // País del donante
            $table->decimal('amount', 10, 2)->nullable(); // Monto de la donación
            $table->text('message')->nullable(); // Mensaje opcional del donante
            $table->boolean('updates')->default(false); // Si el donante desea recibir actualizaciones
            $table->boolean('terms_accepted')->default(false); // Aceptación de términos y condiciones
            $table->string('transaction_id')->nullable(); // ID de la transacción de PayPhone (opcional)
            $table->timestamps(); // Timestamps para created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donations');
    }
};
