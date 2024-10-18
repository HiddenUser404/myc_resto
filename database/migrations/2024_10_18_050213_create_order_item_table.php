<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('order_item', function (Blueprint $table) {
            $table->id('order_item_id');
            $table->foreignId('order_id')->nullable(); // Tanpa constraint foreign key
            $table->foreignId('menu_id')->nullable(); // Tanpa constraint foreign key
            $table->integer('order_item_price');
            $table->integer('order_item_quantity')->default(1);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('order_item');
    }
};
