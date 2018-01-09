<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentSituationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rent_situation', function (Blueprint $table) {
            $table->increments('id');
            $table->string('equipment_id');
            $table->string('equipment_name');
            $table->integer('rent_quantity');
            $table->string('user_class');
            $table->string('user_id');
            $table->string('user_name');
            $table->string('rent_start');
            $table->string('rent_end');
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
        Schema::dropIfExists('rent_situation');
    }
}
