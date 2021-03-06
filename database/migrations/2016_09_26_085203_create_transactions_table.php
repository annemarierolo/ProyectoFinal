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
            $table->integer('transaction_id')->unsigned(); // Campo que apunta a Events o Packages dependiendo del transaction_type
            $table->enum('transaction_type', ['EVENT', 'PACKAGE']);
            $table->integer('status_id');
            $table->dateTime('date');
            $table->integer('transaction_tickets');
            $table->decimal('transaction_amount', 8, 2);
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')->on('users');

            $table->foreign('status_id')
                ->references('id')->on('transactions_status');
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
