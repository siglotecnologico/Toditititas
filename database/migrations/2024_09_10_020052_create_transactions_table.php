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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('merchant_transaction_id')->unique();
            $table->string('payment_type')->nullable();
            $table->string('payment_brand')->nullable();
            $table->decimal('amount', 10, 2)->nullable();
            $table->string('currency')->nullable();
            $table->string('descriptor')->nullable();
            $table->string('result_code')->nullable();
            $table->string('result_description')->nullable();
            $table->string('auth_code')->nullable();
            $table->string('batch_no')->nullable();
            $table->decimal('total_amount', 10, 2)->nullable();
            $table->decimal('interest', 10, 2)->nullable();
            $table->string('response')->nullable();
            $table->string('acquirer_code')->nullable();
            $table->string('reference_no')->nullable();
            $table->string('card_type')->nullable();
            $table->string('card_bin')->nullable(); // Asegúrate de que esta columna esté aquí
            $table->string('card_bin_country')->nullable(); // Asegúrate de que esta columna esté aquí
            $table->string('card_last_4_digits')->nullable(); // Asegúrate de que esta columna esté aquí
            $table->string('card_holder')->nullable(); // Asegúrate de que esta columna esté aquí
            $table->string('card_expiry_month')->nullable(); // Asegúrate de que esta columna esté aquí
            $table->string('card_expiry_year')->nullable(); // Asegúrate de que esta columna esté aquí
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
