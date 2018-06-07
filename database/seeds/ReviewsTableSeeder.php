<?php

use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('reviews')->insert([
        [
            'rating' => 4,
            'comment' => "God mat med en bra salladsbuffé och gott bröd!",
        ],
        [
            'rating' => 5,
            'comment' => "Väldigt god mat men mycket folk på lunchen.",
        ],
        [
            'rating' => 3,
            'comment' => "Mycket mat, vattnet smakar konstigt.",
        ],
        [
            'rating' => 2,
            'comment' => "Jag blev inte mätt!",
        ]
      ]);
    }
}
