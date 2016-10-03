<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Se crean los 2 roles necesarios, administrador y cliente
        DB::table('roles')->insert([
            'name' => 'Administrador'
        ]);

        DB::table('roles')->insert([
            'name' => 'Cliente'
        ]);
    }
}
