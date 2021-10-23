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
        "longitude"=>  33.848427,
        "latitude"=>  35.518832,
        "expoPushNotificationToken"=> null,
        "password" => '$2y$10$ItUhSjSsnUBOg8WPckLQxeA3IVlz6hjAD/BoHLcimYKPVYWiXBOXG',//qweqwe
        "is_specialist" => 1,
        ]);

      DB::table("users")->insert([

        "first_name" => "Hanan",
        "last_name" => "Ch",
        "email" => "h@mail.com",
        "longitude"=> 33.858427,
        "latitude"=>  35.528832,
        "expoPushNotificationToken"=> null,
        "password" => '$2y$10$ItUhSjSsnUBOg8WPckLQxeA3IVlz6hjAD/BoHLcimYKPVYWiXBOXG',//qweqwe
        "is_specialist" => 0,
        ]);

              
      DB::table("users")->insert([

        "first_name" => "Zeinab",
        "last_name" => "Zaitoun",
        "email" => "zz@mail.com",
        "longitude"=> 33.868427,
        "latitude"=>  35.538832,
        "expoPushNotificationToken"=> null,
        "password" => '$2y$10$ItUhSjSsnUBOg8WPckLQxeA3IVlz6hjAD/BoHLcimYKPVYWiXBOXG',//qweqwe
        "is_specialist" => 0,
        ]);


      DB::table("specialities")->insert([
        
        "name" => "electrician",
        "description" => "do every thing related to electricity",

      ]);

      DB::table("specialities")->insert([
        
        "name" => "plumber",
        "description" => "do every thing related to plumbing",

      ]);

      
      DB::table("specialityOfSpecialist")->insert([
        
        "specialist_id" => 1,
        "speciality_id" => 1,
        
      ]);


}
}
