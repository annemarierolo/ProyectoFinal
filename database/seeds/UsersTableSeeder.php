<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Administrador',
            'last_name' => '',
            'email' => 'admin@test.com',
            'password' => bcrypt('123456'),
            'phone_number' => '123456',
            'user_type' => '',
            'document' => '',
            'document_number' => '',
            'sex' => '',
            'activated' => '1',
        ]);

        DB::table('user_has_roles')->insert([
            'role_id' => 1,
            'user_id' => 1,
        ]);
    }
}
