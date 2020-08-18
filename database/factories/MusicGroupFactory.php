<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\MusicGroup::class, function (Faker $faker) {
    $mg=['playlist','song','album','artists'];
    $nu=random_int(0,3);
    return [
        'MusicGroupTitle'=>$mg[$nu]
    ];
});
