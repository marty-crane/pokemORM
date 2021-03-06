<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\PokemonType;
use App\Species;
use App\Trainer;
use App\Location as Town;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$allPokemon = Species::all();
$allTypes = PokemonType::all();
$locations = Town::all();

$factory->define(Trainer::class, function (Faker $faker) use ($allPokemon, $locations, $allTypes) {
    return [
        'first_name' => $faker->firstName,
        'second_name' => $faker->lastName,
        'home_town' => $locations->random()->id,
        'favourite_type' => $allTypes->random()->id,
        'favourite_pokemon' => $allPokemon->random()->id,
        'evil' => random_int(0, 1) === 1,
    ];
});
