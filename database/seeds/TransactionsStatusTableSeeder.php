<?php

use Illuminate\Database\Seeder;

class TransactionsStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Status por defecto para las Transacciones
        DB::table('transactions_status')->insert([
            'id' => 1,
            'status_name' => 'Por Aprobar',
        ]);

        DB::table('transactions_status')->insert([
            'id' => 2,
            'status_name' => 'Aprobada',
        ]);

        DB::table('transactions_status')->insert([
            'id' => 3,
            'status_name' => 'Procesada',
        ]);
    }
}
