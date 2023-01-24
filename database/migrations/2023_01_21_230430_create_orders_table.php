<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('coffe');
            $table->string('sugar');
            $table->string('food')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id') -> references('id') -> on('users') ;

            // $table->string('city');
            $table->string('street');
            $table->integer('apartament');
            $table->integer('suite')->nullable();
            $table->string('comments')->nullable();

            $table->string('status')->nullable();
            $table->decimal('price')->nullable();
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
        Schema::dropIfExists('orders');
    }
};
