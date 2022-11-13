<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\cart;
use App\Models\city;
use App\Models\country;
use App\Models\post;
use App\Models\post_comment;
use App\Models\product;
use App\Models\quizQuestion;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(1)->create();
        product::factory(20)->create();
        cart::factory(5)->create();
        country::factory(2)->create();
        city::factory(4)->create();
        post::factory(4)->create();
        post_comment::factory(5)->create();
        quizQuestion::factory(5)->create();
        
    }
}
