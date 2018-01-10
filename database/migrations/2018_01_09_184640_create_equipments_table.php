<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipments', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('equipments_nane')->unique();
            $table->string('equipments_unit');
            $table->integer('equipments_leftnumber');
            $table->integer('equipment_date');
            $table->integer('equipment_from');
            $table->integer('equipment_too');
            $table->integer('equipment_rentalnumber');
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
        Schema::dropIfExists('equipments');
    }
}
