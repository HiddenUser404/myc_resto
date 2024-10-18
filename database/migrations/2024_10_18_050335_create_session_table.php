<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('session', function (Blueprint $table) {
            $table->id('session_id');
            $table->foreignId('user_id')->nullable()->index(); // Tanpa constraint foreign key
            $table->string('session_ip_address', 45)->nullable();
            $table->text('session_user_agent')->nullable();
            $table->longText('session_payload');
            $table->integer('session_last_activity')->index();
        });
    }

    public function down()
    {
        Schema::dropIfExists('session');
    }
};
