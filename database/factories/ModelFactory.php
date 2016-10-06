<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/*************************** USERS ***************************/
$factory->define(App\User::class, function (Faker\Generator $faker) {

    static $password;

    return [
        'name'              => $faker->name,
        'email'             => $faker->safeEmail,
        'password'          => $password ?: $password = bcrypt('secret'),
        'remember_token'    => str_random(10),
    ];
});

/*************************** NEWS ***************************/
$factory->define(App\News::class, function(Faker\Generator $faker){
    return[
        'user_id'   => '1',
        'tittle'    => $faker-> sentence,
        'summary'   => $faker-> paragraph,
        'content'   => $faker-> text(3000), //str_random(1500), //
        'image'     => '',
        'date'      => $faker->dateTimeBetween('-4 years', 'now'),
    ];
});

/*************************** PACKAGES ***************************/
$factory->define(App\Package::class, function(Faker\Generator $faker){
    return[
        'user_id'       => '1',
        'tittle'        => $faker-> sentence,
        'image'         => '',
        'destiny'       => $faker-> city . ', ' . $faker-> country,
        'destiny_type'  => $faker-> randomElement($array = array ('NACIONAL','INTERNACIONAL')),
        'ticket_price'  => $faker-> randomFloat($nbMaxDecimals = NULL, $min = 45000, $max = 150000),
        'tickets_total' => $faker-> numberBetween($min = 10, $max = 40),
        'valid_from'    => $faker-> dateTimeBetween('+ 30 days', '+ 35 days'),//dateTimeInInterval($startDate = 'now', $interval = '+ 20 days', $timezone = date_default_timezone_get()),
        'valid_to'      => $faker-> dateTimeBetween('+ 40 days', '+ 45 days'),
        'content'       => $faker-> text(3000),
    ];
});

/*************************** EVENTS ***************************/
$factory->define(App\Event::class, function(Faker\Generator $faker){
    return[
        'user_id'       => '1',
        'type_id'       => $faker-> numberBetween($min = 1, $max = 4),
        'status_id'     => $faker-> numberBetween($min = 1, $max = 3),
        'valid_from'    => $faker-> dateTimeBetween('+ 30 days', '+ 35 days'),
        'valid_to'      => $faker-> dateTimeBetween('+ 40 days', '+ 45 days'),
        'tickets_total' => $faker-> numberBetween($min = 10, $max = 40),
        'tickets_sold'  => $faker-> numberBetween($min = 1, $max = 10),
        'ticket_price'  => $faker-> randomFloat($nbMaxDecimals = NULL, $min = 45000, $max = 150000),
        'address'       => $faker-> address,
        'tittle'        => $faker-> sentence,
        'description'   => $faker-> paragraphs(3,true), // el true convierte el array que genera el paragraphs() a un string
        'image'         => '',
    ];
});

/*************************** TRANSACTIONS (eventos) ***************************/
$factory->defineAs(App\Transaction::class, 'eventos' ,function(Faker\Generator $faker){
    return[
        'user_id'               => $faker-> numberBetween($min = 2, $max = 3), // crea transacciones para usuarios con id 2 o 3
        'transaction_id'        => $faker-> numberBetween($min = 1, $max = 6), // id del evento al que pertenece la transaccion
        'transaction_type'      => 'EVENT',
        'status_id'             => $faker-> numberBetween($min = 1, $max = 3),
        'date'                  => $faker-> dateTimeBetween('- 20 days', 'now'),
        'transaction_tickets'   => $faker-> numberBetween($min = 1, $max = 3),
        'transaction_amount'    => $faker-> randomFloat($nbMaxDecimals = NULL, $min = 50000, $max = 350000),
    ];
});

/*************************** TRANSACTIONS (paquetes) ***************************/
$factory->defineAs(App\Transaction::class, 'paquetes' ,function(Faker\Generator $faker){
    return[
        'user_id'               => $faker-> numberBetween($min = 2, $max = 3), // crea transacciones para usuarios con id 2 o 3
        'transaction_id'        => $faker-> numberBetween($min = 1, $max = 4), // id del paquete al que pertenece la transaccion
        'transaction_type'      => 'PACKAGE',
        'status_id'             => $faker-> numberBetween($min = 1, $max = 3),
        'date'                  => $faker-> dateTimeBetween('- 20 days', 'now'),
        'transaction_tickets'   => $faker-> numberBetween($min = 1, $max = 3),
        'transaction_amount'    => $faker-> randomFloat($nbMaxDecimals = NULL, $min = 50000, $max = 350000),
    ];
});