<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\News;
use App\Package;
use App\Event;
use App\Transaction;

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
        $this->call(EventsStatusTableSeeder::class);
        $this->call(EventsTypeTableSeeder::class);
        $this->call(TransactionsStatusTableSeeder::class);

        // Factories
        Model::unguard();

        // Limpio las tablas
        News::truncate();
        Event::truncate();
        Package::truncate();
        Transaction::truncate();

        // Cargo la data
        factory(News::class , 10)->create();
        factory(Event::class , 6)->create();
        factory(Package::class , 4)->create();
        factory(Transaction::class , 'eventos' , 30)->create();
        factory(Transaction::class , 'paquetes' , 22)->create();

        /* ----- ver tema para crear data mediante factories respetando la relacion de las tablas -----
        factory(Event::class , 6)->create()->each(function($u) {
            $u-> transaction()->save(factory(Transaction::class, 'eventos')->make());
        });

        factory(Package::class , 4)->create()->each(function($u) {
            $u->transaction()->save(factory(Transaction::class, 'paquete')->make());
        });
        */

        Model::reguard();
    }
}
