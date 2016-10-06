<?php

use Illuminate\Database\Seeder;

class EventsTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Status por defecto para los eventos
        DB::table('events_type')->insert([
            'id' => 1,
            'type_name' => 'Conferencias',
        ]);

        DB::table('events_type')->insert([
            'id' => 2,
            'type_name' => 'Planes Vacacionales',
        ]);

        DB::table('events_type')->insert([
            'id' => 3,
            'type_name' => 'Conciertos',
        ]);

        DB::table('events_type')->insert([
            'id' => 4,
            'type_name' => 'Fiestas',
        ]);
    }
}
