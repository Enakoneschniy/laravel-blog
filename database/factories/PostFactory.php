<?php
$factory->define(App\Models\Post::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentences(1, true),
        'preview_text' => $faker->paragraphs(3, true),
        'detail_text' => $faker->paragraphs(20, true),
        'preview_image' => $faker->imageUrl(100, 100),
        'active' => $faker->boolean,
    ];
});