<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Creo el administrador
        DB::table('users')->insert([
            'name' => 'Administrador',
            'last_name' => 'Sistema',
            'email' => 'admin@test.com',
            'password' => bcrypt('123456'),
            'phone_number' => '1234-1234567',
            'nacionality' => 'V',
            'document' => 'N/A',
            'document_number' => 'N/A',
            'sex' => 'N/A',
            'activated' => True,
        ]);

        // Le asigno el rol(1) de administrador
        DB::table('user_has_roles')->insert([
            'role_id' => 1,
            'user_id' => 1,
        ]);
    }
}
