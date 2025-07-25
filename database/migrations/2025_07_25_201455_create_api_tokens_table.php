<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('api_tokens', function (Blueprint $table) {
            $table->id(); // BIGINT primary key
            $table->foreignId('ai_id')         // ais tablosuyla ilişki
            ->constrained('ais')         // ais tablosundaki id alanına bağla
            ->onDelete('cascade');       // ai silinince tokenlar da silinsin
            $table->string('token', 64)->unique();
            $table->integer('rate_limit')->default(1000);
            $table->dateTime('expires_at')->nullable();
            $table->dateTime('last_used_at')->nullable();
            $table->timestamps();              // created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('api_tokens');
    }
};
