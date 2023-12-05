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
        Schema::create('fruits', function (Blueprint $table) {
            $table->id('fruitid');
            $table->string('name');
            $table->float('rating');
            $table->integer('price');
            $table->string('location');
            $table->string('shortdesc');
            $table->string('longdesc');
            $table->string('image');

            // Add more fields as needed
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
        Schema::dropIfExists('fruits');
    }
};
