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

        DB::table("users")->insert([

          "first_name" => "Zeinab",
          "last_name" => "Zaitoun",
          "email" => "z@mail.com",
          "longitude"=> 33.878427,
          "latitude"=>  35.548832,
          "expoPushNotificationToken"=> null,
          "password" => '$2y$10$ItUhSjSsnUBOg8WPckLQxeA3IVlz6hjAD/BoHLcimYKPVYWiXBOXG',//qweqwe
          "is_specialist" => 1,
          ]);

          DB::table("users")->insert([

            "first_name" => "Zeinab",
            "last_name" => "Zaitoun",
            "email" => "zz@gmail.com",
            "longitude"=> 33.828427,
            "latitude"=>  35.568832,
            "expoPushNotificationToken"=> null,
            "password" => '$2y$10$ItUhSjSsnUBOg8WPckLQxeA3IVlz6hjAD/BoHLcimYKPVYWiXBOXG',//qweqwe
            "is_specialist" => 1,
            ]);


            DB::table("users")->insert([

              "first_name" => "Zeinab",
              "last_name" => "Zaitoun",
              "email" => "zz@handymail.com",
              "longitude"=> 33.888427,
              "latitude"=>  35.558832,
              "expoPushNotificationToken"=> null,
              "password" => '$2y$10$ItUhSjSsnUBOg8WPckLQxeA3IVlz6hjAD/BoHLcimYKPVYWiXBOXG',//qweqwe
              "is_specialist" => 1,
              ]);

              DB::table("users")->insert([

                "first_name" => "Yasser",
                "last_name" => "Sweid",
                "email" => "ys@mail.com",
                "longitude"=> 33.898427,
                "latitude"=>  35.598832,
                "expoPushNotificationToken"=> null,
                "password" => '$2y$10$ItUhSjSsnUBOg8WPckLQxeA3IVlz6hjAD/BoHLcimYKPVYWiXBOXG',//qweqwe
                "is_specialist" => 1,
                ]);


      DB::table("specialities")->insert([
        
        "name" => "electrician",
        "description" => "do every thing related to electricity",

      ]);

      DB::table("specialities")->insert([
        
        "name" => "plumber",
        "description" => "do every thing related to plumbing",

      ]);

      DB::table("specialities")->insert([
        
        "name" => "carpenter",
        "description" => "do every thing related to wood",

      ]);

      DB::table("specialities")->insert([
        
        "name" => "painter",
        "description" => "do every thing related to painting walls",

      ]);
      
      DB::table("specialityOfSpecialist")->insert([
        
        "specialist_id" => 1,
        "speciality_id" => 1,
        
      ]);

      DB::table("specialityOfSpecialist")->insert([
        
        "specialist_id" => 4,
        "speciality_id" => 2,
        
      ]);

      DB::table("specialityOfSpecialist")->insert([
        
        "specialist_id" => 5,
        "speciality_id" => 3,
        
      ]);

      DB::table("specialityOfSpecialist")->insert([
        
        "specialist_id" => 6,
        "speciality_id" => 4,
        
      ]);

      DB::table("specialityOfSpecialist")->insert([
        
        "specialist_id" => 7,
        "speciality_id" => 1,
        
      ]);

      DB::table("specialists_profile")->insert([
        
        'phone' => "+96171515448",
        'nationality'=>"lebanese" ,      
        'profile_picture_url'=>"nothing",
        'price'=>10,
        'currency'=>"USD",
        'experience'=>8,
        'user_id'=>1,
        'profile_path'=>"nothing",
        
      ]);

      
      DB::table("projects")->insert([
        
        "name" => 'Project 1',
        "specialist_id" => 1,
        'description' => 'fixed all the wires, installed the lamps...',
        'total_cost' => '800',
        'currency'=> 'USD',
        'is_done' => 1,
        
      ]);

       
      DB::table("commentspecialists")->insert([
        
        "specialist_id" => 1,
        "client_id" => 2,
        'comment' => 'Amazing work, really experienced',   
      ]);

      DB::table("commentspecialists")->insert([
        
        "specialist_id" => 1,
        "client_id" => 3,
        'comment' => 'Always on time, deserves every penny',   
      ]);

      DB::table("ratespecialists")->insert([
        
        "specialist_id" => 1,
        "client_id" => 3,
        'rate' => 4,   
      ]);

      DB::table("ratespecialists")->insert([
        
        "specialist_id" => 1,
        "client_id" => 2,
        'rate' => 5,   
      ]);






    



}
}
