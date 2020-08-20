<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelanggansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelanggan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fullnama');
            $table->string('email');
            $table->string('no_telepon');
            $table->string('countrycode');
            $table->string('phone');
            $table->string('password');
            $table->double('rating_pelanggan');
            $table->integer('status');
            $table->string('token');
            $table->string('fotopelanggan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelanggan');
    }
}
