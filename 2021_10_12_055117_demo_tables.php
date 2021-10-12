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
            $table->varchar('name');
            $table->varchar('description');
            $table->integer('brand');
            $table->integer('build_year');
            $table->timestamps();
        });
        Schema::create('driving_logs', function (Blueprint $table) {
            $table->id();
            $table->varchar('from');
            $table->varchar('to');
            $table->integer('mileage');
            $table->timestamps();
        });
        Schema::create('brands', function (Blueprint $table) {
            $table->id();
            $table->varchar('name');
            $table->timestamps();
        });
        Schema::create('brand_car', function (Blueprint $table) {
            $table->id();
            $table->integer('car_id');
            $table->integer('brand_id');
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
        Schema::dropIfExists('roads');
        Schema::dropIfExists('brand_car');
    }
}
