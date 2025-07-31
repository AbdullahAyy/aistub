<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApiUsagesTable extends Migration
{
    public function up()
    {
        Schema::create('api_usages', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('user_id')->index();

            $table->string('token', 64);

            $table->integer('rate_limit')->default(1000);

            $table->dateTime('expires_at')->nullable();
            $table->dateTime('last_used_at')->nullable();

            $table->timestamps();

            // Foreign key constraint
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('api_usages');
    }
}
