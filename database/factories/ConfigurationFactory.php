<?php

use Faker\Generator as Faker;

$factory->define(App\Configuration::class, function (Faker $faker) {
    return [
        'activeCalendar' => '2017-2018',
    ];
});
