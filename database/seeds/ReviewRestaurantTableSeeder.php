<?php

use Illuminate\Database\Seeder;

class ReviewRestaurantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('review_restaurant')->insert([
        [
            'review_id' => 1,
            'restaurant_id' => 1,
        ],
        [
            'review_id' => 2,
            'restaurant_id' => 3,
        ],
        [
            'review_id' => 3,
            'restaurant_id' => 2,
        ],
        [
            'review_id' => 4,
            'restaurant_id' => 4,
        ]
      ]);
    }
}
