<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('id_prod',50);
            $table->string('nm_prod',100);
            $table->unsignedBigInteger('id_cat');
            $table->foreign('id_cat')->references('id')->on('categories');
            $table->integer('harga');
            $table->enum('status',['Available','Non Available']);
            $table->string('desc',50);
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
        Schema::dropIfExists('products');
    }
}
