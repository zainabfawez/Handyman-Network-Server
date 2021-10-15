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

    DB::table("users")->insert([

            "first_name" => "Hanan",
            "last_name" => "Ch",
            "email" => "h@mail.com",
            "password" => '$2y$10$ItUhSjSsnUBOg8WPckLQxeA3IVlz6hjAD/BoHLcimYKPVYWiXBOXG',//qweqwe
            "is_specialist" => 0,
            ]);


    DB::table("specialities")->insert([
			
      "name" => "electrician",
      "description" => "do every thing related to electricity",

     ]);

     
    DB::table("specialityOfSpecialist")->insert([
			
      "specialist_id" => 1,
      "speciality_id" => 1,
      
     ]);
}
}
