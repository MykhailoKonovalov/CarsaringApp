<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTariffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars_tariffs', function (Blueprint $table) {
            $table->bigInteger("tariffs_id")->unsigned();
            $table->bigInteger("cars_id")->unsigned();
            $table->foreign("tariffs_id")->references("id")->on("tariffs");
            $table->foreign("cars_id")->references("id")->on("cars");
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
        Schema::dropIfExists('cars_tariffs');
    }
}
