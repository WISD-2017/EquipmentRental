<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentSituationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rent_situations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('equipments_name');
            $table->string('users_class');
            $table->string('users_id');
            $table->string('users_name');
            $table->integer('equipments_leftnumber');
            $table->integer('equipments_date');
            $table->integer('equipments_from');
            $table->integer('equipments_too');
            $table->integer('equipments_rentalnumber');
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
        Schema::dropIfExists('rent_situations');
    }
}
