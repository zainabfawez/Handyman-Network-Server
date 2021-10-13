<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
		DB::table("users")->insert([
			
            "first_name" => "zainab",
            "last_name" => "fawez",
            "email" => "zf@handyman.com",
            "password" => '$2y$10$ItUhSjSsnUBOg8WPckLQxeA3IVlz6hjAD/BoHLcimYKPVYWiXBOXG',//qweqwe
            "is_specialist" => 1,
           ]);
    }
}
