<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('tittle', 45);
            $table->string('images');
            $table->string('destiny',45);
            $table->enum('destiny_type', ['NACIONAL', 'INTERNACIONAL']);
            $table->decimal('ticket_price', 8, 2);
            $table->integer('tickets_total');
            $table->date('valid_from');
            $table->date('valid_to');
            $table->text('content');

            $table->foreign('user_id')
                ->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('packages');
    }
}
