<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
<<<<<<< HEAD
            $table->string('user_class');
            $table->rememberToken();
            $table->timestamps();

=======

            $table->timestamps();


//            $table->string('users_class');
 //           $table->string('users_identity');
  //          $table->timestamps();

>>>>>>> 845cc8ae4559774f142e890e03b9ef9b0f0c61cf
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
