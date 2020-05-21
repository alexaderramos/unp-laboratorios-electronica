<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use Spatie\Permission\Models\Permission;

$factory->define(Permission::class, function (Faker $faker) {

    return [
        'name'=> $slug = $faker->unique()->word,
        'description' => $faker->sentence(4)//ucfirst(strtolower($slug))
    ];
});
