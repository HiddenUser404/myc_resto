<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('order_item', function (Blueprint $table) {
            $table->integer('order_item_price')->change();
        });
        Schema::table('payment', function (Blueprint $table) {
            $table->integer('payment_amount')->change();
        });
        Schema::table('menu', function (Blueprint $table) {
            $table->integer('menu_price')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('order_item', function (Blueprint $table) {
            //
        });
        Schema::table('payment', function (Blueprint $table) {
            //
        });
        Schema::table('menu', function (Blueprint $table) {
            //
        });
    }
};
