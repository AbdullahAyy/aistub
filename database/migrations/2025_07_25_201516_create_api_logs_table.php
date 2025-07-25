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
        Schema::create('api_logs', function (Blueprint $table) {
            $table->id();  // BIGINT primary key
            $table->foreignId('token_id')           // api_tokens tablosuna ilişki
            ->constrained('api_tokens')
                ->onDelete('cascade');             // token silinince loglar da silinsin
            $table->string('ip_address', 45);
            $table->dateTime('used_at');
            $table->integer('request_count');
            $table->json('response_sample');
            $table->integer('status_code');
            // created_at, updated_at yok çünkü loglar için özel zamanlar var
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('api_logs');
    }
};
