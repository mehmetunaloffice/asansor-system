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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Şirket adı
            $table->string('email')->unique()->nullable(); // E-posta adresi
            $table->string('phone', 20)->nullable(); // Telefon numarası
            $table->text('address')->nullable(); // Adres
            $table->string('tax_number')->nullable(); // Vergi numarası
            $table->string('website')->nullable(); // Şirket web sitesi
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};