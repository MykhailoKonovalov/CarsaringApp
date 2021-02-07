<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("mark")->nullable();
            $table->string("model")->nullable();
            $table->string("numbers")->nullable();
            $table->string("color")->nullable();
            $table->string("location")->nullable();
            $table->string("car_passport")->nullable();
            $table->string("car_registration")->nullable();
            $table->string("car_service_book")->nullable();
            $table->bigInteger("car_insurance_id")->unsigned()->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->foreign("car_insurance_id")->references("id")->on("cars_insurances");
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
    }
}
