<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration {
    public function up()
    {
        Schema::create('user_cart', function (Blueprint $table) {
            $table->id('user_cart_id'); // Kolom ID unik untuk user_cart, auto increment
            $table->foreignId('user_id')->nullable(); // Kolom user_id, referensi ke pengguna (tanpa constraint foreign key)
            $table->foreignId('menu_id')->nullable(); // Kolom menu_id, referensi ke menu (tanpa constraint foreign key)
            $table->unsignedInteger('user_cart_quantity'); // Kolom untuk menyimpan jumlah item di keranjang
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_cart'); // Menghapus tabel user_cart saat rollback
    }
};

