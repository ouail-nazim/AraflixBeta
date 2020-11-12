<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Show;
use Faker\Generator as Faker;

$factory->define(Show::class, function (Faker $faker) {
    return [
        'title'=>$faker->realText($maxNbChars = 15),
        'cover'=>$faker->imageUrl($width = 300, $height = 250,'technics'),
        'type'=>$faker->randomElement($array = array ('movie', 'tvShow')),
        'story'=>$faker->text($maxNbChars = 200),
        'rating'=>$faker->randomElement($array = array ('+18', '+16','+14','+12','-12')),
        'year'=>$faker->year($max = 'now'),
        'contry'=>$faker->country,
        'seasons'=>$faker->numberBetween($min = 1, $max = 9),
        'watched'=>$faker->numberBetween($min = 1, $max = 1000),
    ];
});
