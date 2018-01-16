<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentReturnd extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rent_return', function (Blueprint $table) {
            $table->increments('id');
            $table->string('equipments_name');
            $table->string('user_class');
            $table->string('user_id');
            $table->string('user_name');
            $table->string('equipments_date');
            $table->string('equipments_from');
            $table->string('equipments_too');
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
        Schema::dropIfExists('rent_return');
    }
}
