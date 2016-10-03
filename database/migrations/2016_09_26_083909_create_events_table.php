<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('type_id')->unsigned();
            $table->integer('status_id')->unsigned();
            $table->timestamps();
            $table->date('valid_from');
            $table->date('valid_to');
            $table->integer('tickets_total');
            $table->integer('tickets_sold');
            $table->decimal('ticket_price', 8, 2);
            $table->string('address',80);
            $table->text('tittle');
            $table->text('description');
            $table->string('image', 45);

            $table->foreign('user_id')
                ->references('id')->on('users');

            $table->foreign('type_id')
                ->references('id')->on('events_type');

            $table->foreign('status_id')
                ->references('id')->on('events_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('events');
    }
}
