<?php

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
            $table->string('name',45);
            $table->string('last_name',45);
            $table->string('email',80)->unique();
            $table->string('password',255);
            $table->rememberToken();
            $table->string('phone_number',15);
            $table->string('user_type',15);
            $table->string('document',20);
            $table->string('document_number',20);
            $table->enum('sex', ['M', 'F']);
<<<<<<< HEAD
            $table->boolean('activated')->default(false);
=======
>>>>>>> 24bc3e2da133fb2ab3e75b7fe006c4151ce426d1
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
        Schema::drop('users');
    }
}
