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
        // Users tablosu
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name'); // Kullanıcı adı
            $table->string('email')->unique(); // Benzersiz email
            $table->timestamp('email_verified_at')->nullable(); // E-posta doğrulama tarihi
            $table->string('password'); // Şifre
            $table->rememberToken(); // Remember token
            $table->foreignId('current_team_id')->nullable(); // Mevcut takım
            $table->string('profile_photo_path', 2048)->nullable(); // Profil fotoğraf yolu
            $table->enum('role', ['admin', 'technician', 'apartment_manager', 'company_user'])->default('company_user'); // Kullanıcı rolü
            $table->foreignId('company_id')->nullable()->constrained('companies')->nullOnDelete()->cascadeOnUpdate(); // Firma ilişkisi
            $table->timestamps(); // created_at ve updated_at
        });
    
        // Şifre sıfırlama tabloları
        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary(); // Email benzersiz ve primary
            $table->string('token'); // Şifre sıfırlama token'ı
            $table->timestamp('created_at')->nullable(); // Oluşturulma tarihi
        });
    
        // Oturum tabloları
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary(); // Benzersiz oturum ID
            $table->foreignId('user_id')->nullable()->index()->constrained('users')->nullOnDelete()->cascadeOnUpdate(); // Kullanıcı ilişkisi
            $table->string('ip_address', 45)->nullable(); // IP adresi
            $table->text('user_agent')->nullable(); // Kullanıcı cihaz bilgisi
            $table->longText('payload'); // Oturum bilgileri
            $table->integer('last_activity')->index(); // Son aktiflik zamanı
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
