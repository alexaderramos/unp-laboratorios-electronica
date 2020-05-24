<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use Spatie\Permission\Models\Role;

$factory->define(Role::class, function (Faker $faker) {

    return [
        'name'=> $slug = $faker->unique()->word,
        'description' => $faker->sentence(4)//ucfirst(strtolower($slug))
    ];
});
