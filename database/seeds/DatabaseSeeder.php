<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\News;
use App\Package;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seeders
        $this->call(RoleTableSeeder::class);
        $this->call(UsersTableSeeder::class);

        // Factories
        Model::unguard();

        News::truncate();
        factory(News::class , 10)->create();

        Package::truncate();
        factory(Package::class , 5)->create();

        Model::reguard();
    }
}
