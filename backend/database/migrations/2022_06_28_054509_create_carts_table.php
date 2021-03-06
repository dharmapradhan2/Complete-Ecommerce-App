<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id('cartId');
            $table->foreignId('uid')->references('uid')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('pid')->references('pid')->on('products')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('qty');
            $table->string('pname')->nullable();
            $table->bigInteger('price');
            $table->boolean('status')->nullable()->default(false);
            $table->timestamps();
        });
    }
    /**
     * Reverse the migratzions.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts');
    }
}
