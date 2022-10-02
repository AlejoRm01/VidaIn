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
        Schema::create('aliments', function (Blueprint $table) {
            $table->id();
            $table->string('barCode');
            $table->string('name');
            $table->string('category');
            $table->string('brand');
            $table->string('weight');
            $table->string('calories');
            $table->string('carbohydrate');
            $table->string('fats');
            $table->string('fiber');
            $table->string('proteins');
            $table->string('cholesterol');
            $table->string('image');
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
        Schema::dropIfExists('aliments');
    }
};
