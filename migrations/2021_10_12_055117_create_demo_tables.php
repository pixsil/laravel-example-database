<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemoTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->integer('brand');
            $table->integer('build_year');
            $table->timestamps();
        });
        Schema::create('driving_logs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('car_id');
            $table->string('from');
            $table->string('to');
            $table->integer('mileage');
            $table->timestamps();

            $table->foreign('car_id')->references('id')->on('cars');
        });
        Schema::create('brands', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('features', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('car_feature', function (Blueprint $table) {
            $table->id();
            $table->integer('car_id');
            $table->integer('feature_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
        Schema::dropIfExists('drivers');
        Schema::dropIfExists('brands');
        Schema::dropIfExists('features');
        Schema::dropIfExists('car_feature');
    }
}
