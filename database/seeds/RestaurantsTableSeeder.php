<?php

use Illuminate\Database\Seeder;

class RestaurantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('restaurants')->insert([
        [
            'name' => "MH Orkanen",
            'adress' => "Nordenskiöldsgatan 10",
            'image' => "https://static.panoramio.com.storage.googleapis.com/photos/large/37523625.jpg",
            'type' => "Husmanskost",
        ],
        [
            'name' => "Thai Wok",
            'adress' => "Anna Lindhs Plats 8",
            'image' => "https://www.allakartor.se/venue_images_475/473321_2975148.jpg",
            'type' => "Thai",
        ],
        [
            'name' => "Surf Shack",
            'adress' => "Västergatan 9A",
            'image' => "http://sunshinestories.com/wp-content/uploads/2014/04/IMG_2698-800x600.jpg",
            'type' => "Hamburger",
        ],
        [
            'name' => "Restaurang Niagara",
            'adress' => "Norra Neptunigatan 1",
            'image' => "http://resources.mynewsdesk.com/image/upload/c_limit,dpr_1.0,f_auto,h_700,q_auto,w_690/bs0trsputmgqea3peerz.jpg",
            'type' => "New age",
        ]
      ]);
    }
}
