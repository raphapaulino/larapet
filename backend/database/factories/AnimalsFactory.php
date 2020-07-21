<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Animal;
use Faker\Generator as Faker;

$factory->define(Animal::class, function (Faker $faker) {
    return [
        // 'company_id'  => $faker->word,
        'photo'       => null,
        'name'        => $faker->randomElement(['Bob', 'Meninão', 'Maria', 'Mil House', 'Sofia']),
        // 'slug'        => $faker->word,
        'specie'      => $faker->randomElement(['Dog', 'Cat', 'Bird', 'Turtle', 'Phish']),
        'breed'       => $faker->randomElement(['SRD', 'Bulldog', 'Pastor Alemão', 'Beagle']),
        'color'       => $faker->randomElement(['White', 'Black', 'Black and White', 'Yellow', 'Brown', 'Gray']),
        'gender'      => $faker->randomElement(['F', 'M']),
        'size'        => $faker->randomElement(['Small', 'Medium', 'Big']),
        'coat'        => $faker->randomElement(['Short', 'Medium', 'Long']),
        'age_group'   => $faker->randomElement(['Puppy', 'Adult']),
        'is_neutered' => $faker->boolean(50),
        'is_active'   => $faker->boolean(100),
    ];
});
