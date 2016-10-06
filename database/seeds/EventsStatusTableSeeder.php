<?php

use Illuminate\Database\Seeder;

class EventsStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Status por defecto para los eventos
        DB::table('events_status')->insert([
            'id' => 1,
            'status_name' => 'Pendiente',
        ]);

        DB::table('events_status')->insert([
            'id' => 2,
            'status_name' => 'Aprobado',
        ]);

        DB::table('events_status')->insert([
            'id' => 3,
            'status_name' => 'No Aprobado',
        ]);
    }
}
