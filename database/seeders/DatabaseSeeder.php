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
        
        "first_name" => "Imad",
        "last_name" => "Ahmad",
        "email" => "ia@mail.com",
        "longitude"=> 35.518832,
        "latitude"=>  33.848427,
        "expoPushNotificationToken"=> 'ExponentPushToken[E2-CS1FM2Sw7kJvrNMbrlM]',
        "password" => '$2y$10$ItUhSjSsnUBOg8WPckLQxeA3IVlz6hjAD/BoHLcimYKPVYWiXBOXG',//qweqwe
        "is_specialist" => 1,
        "added_profile" => 1,
        ]);

      DB::table("users")->insert([

        "first_name" => "Zahn",
        "last_name" => "Olson",
        "email" => "zo@mail.com",
        "longitude"=> 35.528832,
        "latitude"=>  33.858427,
        "expoPushNotificationToken"=>'ExponentPushToken[E2-CS1FM2Sw7kJvrNMbrlM]',
        "password" => '$2y$10$ItUhSjSsnUBOg8WPckLQxeA3IVlz6hjAD/BoHLcimYKPVYWiXBOXG',//qweqwe
        "is_specialist" => 0,
        "added_profile" => 0,
        ]);

                
      DB::table("users")->insert([

        "first_name" => "Zoeller",
        "last_name" => "Wilson",
        "email" => "zw@mail.com",
        "longitude"=> 33.868427,
        "latitude"=>  35.538832,
        "expoPushNotificationToken"=> 'ExponentPushToken[E2-CS1FM2Sw7kJvrNMbrlM]',
        "password" => '$2y$10$ItUhSjSsnUBOg8WPckLQxeA3IVlz6hjAD/BoHLcimYKPVYWiXBOXG',//qweqwe
        "is_specialist" => 0,
        "added_profile" => 0,
        ]);

      DB::table("users")->insert([

        "first_name" => "Ali",
        "last_name" => "Zaytoun",
        "email" => "z@mail.com",
        "longitude"=> 35.538832,
        "latitude"=> 33.868427,
        "expoPushNotificationToken"=>  'ExponentPushToken[E2-CS1FM2Sw7kJvrNMbrlM]',
        "password" => '$2y$10$ItUhSjSsnUBOg8WPckLQxeA3IVlz6hjAD/BoHLcimYKPVYWiXBOXG',//qweqwe
        "is_specialist" => 1,
        "added_profile" => 1,
        ]);

        DB::table("users")->insert([

          "first_name" => "Ahmad",
          "last_name" => "Fakih",
          "email" => "af@mail.com",
          "longitude"=> 35.514832,
          "latitude"=>  33.838427,
          "expoPushNotificationToken"=> 'ExponentPushToken[E2-CS1FM2Sw7kJvrNMbrlM]',
          "password" => '$2y$10$ItUhSjSsnUBOg8WPckLQxeA3IVlz6hjAD/BoHLcimYKPVYWiXBOXG',//qweqwe
          "is_specialist" => 1,
          "added_profile" => 1,
          ]);


        DB::table("users")->insert([

          "first_name" => "Mark",
          "last_name" => "Doe",
          "email" => "md@mail.com",
          "longitude"=> 35.568832,
          "latitude"=>  33.828427,
          "expoPushNotificationToken"=>'ExponentPushToken[E2-CS1FM2Sw7kJvrNMbrlM]',
          "password" => '$2y$10$ItUhSjSsnUBOg8WPckLQxeA3IVlz6hjAD/BoHLcimYKPVYWiXBOXG',//qweqwe
          "is_specialist" => 1,
          "added_profile" => 1,
          ]);

        DB::table("users")->insert([

          "first_name" => "Yasser",
          "last_name" => "Sweid",
          "email" => "ys@mail.com",
          "longitude"=> 35.513832,
          "latitude"=>  33.841427,
          "expoPushNotificationToken"=>'ExponentPushToken[E2-CS1FM2Sw7kJvrNMbrlM]',
          "password" => '$2y$10$ItUhSjSsnUBOg8WPckLQxeA3IVlz6hjAD/BoHLcimYKPVYWiXBOXG',//qweqwe
          "is_specialist" => 1,
          "added_profile" => 1,
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
          
          'phone' => "+96171336789",
          'nationality'=>"lebanese" ,      
          'profile_picture_url'=>"/image/str_random(102).jpeg",
          'price'=>10,
          'currency'=>"USD",
          'experience'=>8,
          'user_id'=>1,
         
          
        ]);

        DB::table("specialists_profile")->insert([
          
          'phone' => "+96171234586",
          'nationality'=>"lebanese" ,      
          'profile_picture_url'=>"/image/str_random(292).jpeg",
          'price'=>120000,
          'currency'=>"LBP",
          'experience'=>7,
          'user_id'=>4,
         
        ]);

        DB::table("specialists_profile")->insert([
          
          'phone' => "+96171234586",
          'nationality'=>"Lebanese" ,      
          'profile_picture_url'=>"/image/str_random(899).jpeg",
          'price'=>150000,
          'currency'=>"LBP",
          'experience'=>5,
          'user_id'=>5,
        
        ]);

        DB::table("specialists_profile")->insert([
          
          'phone' => "+96171234986",
          'nationality'=>"Syrian" ,      
          'profile_picture_url'=>"/image/str_random(716).jpeg",
          'price'=>15,
          'currency'=>"USD",
          'experience'=>4,
          'user_id'=>6,
       
          
        ]);

        DB::table("specialists_profile")->insert([
          
          'phone' => "+96171234989",
          'nationality'=>"Palestanian" ,      
          'profile_picture_url'=>"/image/str_random(102).jpeg",
          'price'=>8,
          'currency'=>"USD",
          'experience'=>2,
          'user_id'=>7,
      
          
        ]);

        
        DB::table("projects")->insert([
          
          "name" => 'Project 1',
          "specialist_id" => 1,
          'description' => 'fixed all the wires, installed the lamps...',
          'total_cost' => '800',
          'currency'=> 'USD',
          'is_done' => 1,
          
        ]);

        DB::table("projects")->insert([
          
          "name" => 'Project 2',
          "specialist_id" => 1,
          'description' => 'designed the wires according to a factory design in black mode',
          'total_cost' => '1000',
          'currency'=> 'USD',
          'is_done' => 0,
          
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
        
        DB::table("specialists_tips")->insert([
          
          "specialist_id" => 1,
          "tip" => "umbre is the new color to paint",

        ]);

        DB::table("specialists_tips")->insert([
          
          "specialist_id" => 4,
          "tip" => "Pull Your Paint Color From a Print.",

        ]);

        DB::table("specialists_tips")->insert([
          
          "specialist_id" => 5,
          "tip" => "Avoid drywall screws for woodworking.",

        ]);

        
        DB::table("specialists_tips")->insert([
          
          "specialist_id" => 5,
          "tip" => " Know your wood’s moisture content.",

        ]);

        DB::table("specialists_tips")->insert([
          
          "specialist_id" => 6,
          "tip" => " Measure with a drafting square.",

        ]);

        DB::table("specialists_tips")->insert([
          
          "specialist_id" => 1,
          "tip" => " Use the proper wattage for lamps and lighting fixtures.",

        ]);

        DB::table("specialists_tips")->insert([
          
          "specialist_id" => 7,
          "tip" => "Keep electrical appliances and tools away from water.",

        ]);




        
    






    



}
}
