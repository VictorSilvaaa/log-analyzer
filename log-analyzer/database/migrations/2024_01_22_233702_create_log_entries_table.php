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
        Schema::create('logs', function (Blueprint $table) {
            $table->id();
            $table->string('remote_host');
            $table->string('remote_logname');
            $table->string('remote_user');
            $table->timestamp('request_datetime');
            $table->string('request_method');
            $table->string('request_URI');
            $table->string('request_protocol');
            $table->integer('response_code');
            $table->integer('bytes_sent');
            $table->string('referer');
            $table->string('user_agent');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logs');
    }
};
