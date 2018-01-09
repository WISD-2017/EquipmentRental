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
            $table->string('equipment_id',20)->unique();
            $table->string('equipment_name',20);
            $table->integer('rent_quantity');
            $table->string('user_class',20);
            $table->string('user_id',20)->unique();
            $table->string('user_name',20);
            $table->string('rent_start',40);
            $table->string('rent_end',40);
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
