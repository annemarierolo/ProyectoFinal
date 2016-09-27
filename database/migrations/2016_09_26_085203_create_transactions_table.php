<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('transaction_id');
            $table->enum('transaction_type', ['EVENT', 'PACKAGE']);
            $table->integer('status_id');
            $table->dateTime('date');
            $table->integer('transacction_tickets');
            $table->decimal('transacction_amount', 8, 2);
            //$table->primary(['id', 'user_id', 'transaction_id', 'transaction_type']);

            $table->foreign('user_id')
                ->references('id')->on('users');
            /*
            $table->foreign('type_id')
                ->references('id')->on('events_type');

            $table->foreign('status_id')
                ->references('id')->on('events_status');
            */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('transactions');
    }
}
