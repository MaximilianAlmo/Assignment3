<?php

use Illuminate\Database\Seeder;

class MealsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('meals')->insert([
        [
            'restaurant_id' => 1,
            'name' => "Husmanskost",
            'price' => 69,
            'description' => "Ny mat varje dag, kostar 75 om man inte är student, finns alltid något för dom som tycker synd om alla djur.",
        ],
        [
            'restaurant_id' => 2,
            'name' => "Thai mat",
            'price' => 65,
            'description' => "Ta två rätter, liten salladsbuffé, vatten, kaffe och friterade bananer ingår. Kostar mindre om man tar med sig maten,",
        ],
        [
            'restaurant_id' => 3,
            'name' => "Hamburgare",
            'price' => 89,
            'description' => "Custom made hamburger",
        ],
        [
            'restaurant_id' => 4,
            'name' => "Kålnudlar",
            'price' => 90,
            'description' => "Kål som ser ut som nudlar.",
        ]
      ]);
    }
}
