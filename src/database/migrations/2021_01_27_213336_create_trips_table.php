<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("start_location")->nullable();
            $table->string("finish_location")->nullable();
            $table->dateTime("start_time")->default(null);
            $table->dateTime("finish_time")->default(null);
            $table->integer("distance")->nullable();
            $table->integer("cost")->nullable();
            $table->bigInteger("user_id")->unsigned();
            $table->bigInteger("tariff_id")->unsigned();
            $table->bigInteger("car_id")->unsigned();
            $table->bigInteger("invoice_id")->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->foreign("user_id")->references("id")->on("users");
            $table->foreign("tariff_id")->references('id')->on("tariffs");
            $table->foreign("car_id")->references("id")->on("cars");
            $table->foreign("invoice_id")->references("id")->on("invoices");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trips');
    }
}
