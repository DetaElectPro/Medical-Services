<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\RequestSpecialist;
use Faker\Generator as Faker;

$factory->define(RequestSpecialist::class, function (Faker $faker) {
    return [
        'name' => $faker->jobTitle,
        'address' => $faker->address,
        'start_time' => $faker->dateTime('now'),
        'end_time' => $faker->dateTime('now'),
        'latitude' => $faker->latitude,
        'longitude' => $faker->longitude,
        'price' => $faker->numberBetween(100, 300),
        'medical_id' => function () {
            return factory(App\Models\MedicalSpecialty::class)->create()->id;
        },
        'status' => random_int(1, 3),
        'user_id' => function () {
            return factory(\App\Models\Auth\User\User::class)->create()->id;
        }
    ];
});