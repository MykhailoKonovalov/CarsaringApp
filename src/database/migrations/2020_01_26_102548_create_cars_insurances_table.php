<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsInsurancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars_insurances', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("photo")->nullable();
            $table->dateTime("date_of_issue")->default(null);
            $table->dateTime("expiration_date")->default(null);
            $table->string("type");
            $table->float("price");
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars_insurances');
    }
}
