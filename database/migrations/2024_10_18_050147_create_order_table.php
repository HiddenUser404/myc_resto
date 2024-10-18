<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->id('order_id');
            $table->foreignId('customer_id')->nullable(); // Tanpa constraint foreign key
            $table->foreignId('user_id')->nullable(); // Tanpa constraint foreign key
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('order');
    }
};
