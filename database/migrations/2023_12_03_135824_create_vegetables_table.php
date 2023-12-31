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
        Schema::create('vegetables', function (Blueprint $table) {
            $table->id('vegetableid');
            $table->string('name');
            $table->float('rating');
            $table->string('category');
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
        Schema::dropIfExists('vegetables');
    }
};
