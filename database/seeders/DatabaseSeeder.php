<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run(){

    //users
    DB::table("users")->insert([       
      "first_name" => "Liam",
      "last_name" => "Smith",
      "email" => "specialist@mail.com",
      "longitude"=> 35.518832,
      "latitude"=>  33.848427,
      "expoPushNotificationToken"=> 'ExponentPushToken[E2-CS1FM2Sw7kJvrNMbrlM]',
      "password" => '$2y$10$ItUhSjSsnUBOg8WPckLQxeA3IVlz6hjAD/BoHLcimYKPVYWiXBOXG',//qweqwe
      "is_specialist" => 1,
      "added_profile" => 1,
    ]);

    DB::table("users")->insert([
      "first_name" => "Noah",
      "last_name" => "Johnson",
      "email" => "specialist2@mail.com",
      "longitude"=> 35.528832,
      "latitude"=>  33.858427,
      "expoPushNotificationToken"=>'ExponentPushToken[E2-CS1FM2Sw7kJvrNMbrlM]',
      "password" => '$2y$10$ItUhSjSsnUBOg8WPckLQxeA3IVlz6hjAD/BoHLcimYKPVYWiXBOXG',//qweqwe
      "is_specialist" => 1,
      "added_profile" => 1,
    ]);
        
    DB::table("users")->insert([
      "first_name" => "Oliver",
      "last_name" => "Williams",
      "email" => "specialist3@mail.com",
      "longitude"=> 35.538832,
      "latitude"=>  33.871427,
      "expoPushNotificationToken"=> 'ExponentPushToken[E2-CS1FM2Sw7kJvrNMbrlM]',
      "password" => '$2y$10$ItUhSjSsnUBOg8WPckLQxeA3IVlz6hjAD/BoHLcimYKPVYWiXBOXG',//qweqwe
      "is_specialist" => 1,
      "added_profile" => 1,
    ]);

    DB::table("users")->insert([
      "first_name" => "Elijah",
      "last_name" => "Brown",
      "email" => "specialist4@mail.com",
      "longitude"=> 35.558832,
      "latitude"=> 33.868427,
      "expoPushNotificationToken"=>  'ExponentPushToken[E2-CS1FM2Sw7kJvrNMbrlM]',
      "password" => '$2y$10$ItUhSjSsnUBOg8WPckLQxeA3IVlz6hjAD/BoHLcimYKPVYWiXBOXG',//qweqwe
      "is_specialist" => 1,
      "added_profile" => 1,
    ]);

    DB::table("users")->insert([
      "first_name" => "Lucas",
      "last_name" => "Jones",
      "email" => "specialist5@mail.com",
      "longitude"=> 35.514832,
      "latitude"=>  33.832427,
      "expoPushNotificationToken"=> 'ExponentPushToken[E2-CS1FM2Sw7kJvrNMbrlM]',
      "password" => '$2y$10$ItUhSjSsnUBOg8WPckLQxeA3IVlz6hjAD/BoHLcimYKPVYWiXBOXG',//qweqwe
      "is_specialist" => 1,
      "added_profile" => 1,
    ]);

    DB::table("users")->insert([
      "first_name" => "Mark",
      "last_name" => "Davis",
      "email" => "specialist6@mail.com",
      "longitude"=> 35.568832,
      "latitude"=>  33.828427,
      "expoPushNotificationToken"=>'ExponentPushToken[E2-CS1FM2Sw7kJvrNMbrlM]',
      "password" => '$2y$10$ItUhSjSsnUBOg8WPckLQxeA3IVlz6hjAD/BoHLcimYKPVYWiXBOXG',//qweqwe
      "is_specialist" => 1,
      "added_profile" => 1,
    ]);

    DB::table("users")->insert([
      "first_name" => "Henry",
      "last_name" => "Miller",
      "email" => "specialist7@mail.com",
      "longitude"=> 35.513832,
      "latitude"=>  33.841427,
      "expoPushNotificationToken"=>'ExponentPushToken[E2-CS1FM2Sw7kJvrNMbrlM]',
      "password" => '$2y$10$ItUhSjSsnUBOg8WPckLQxeA3IVlz6hjAD/BoHLcimYKPVYWiXBOXG',//qweqwe
      "is_specialist" => 1,
      "added_profile" => 1,
    ]);

      
    DB::table("users")->insert([
      "first_name" => "Jacob",
      "last_name" => "Hadad",
      "email" => "specialist8@mail.com",
      "longitude"=> 35.578832,
      "latitude"=>  33.878427,
      "expoPushNotificationToken"=>'ExponentPushToken[E2-CS1FM2Sw7kJvrNMbrlM]',
      "password" => '$2y$10$ItUhSjSsnUBOg8WPckLQxeA3IVlz6hjAD/BoHLcimYKPVYWiXBOXG',//qweqwe
      "is_specialist" => 1,
      "added_profile" => 1,
    ]);

    DB::table("users")->insert([
      "first_name" => "Mohammad",
      "last_name" => "Sweid",
      "email" => "specialist9@mail.com",
      "longitude"=> 35.512832,
      "latitude"=>  33.842427,
      "expoPushNotificationToken"=>'ExponentPushToken[E2-CS1FM2Sw7kJvrNMbrlM]',
      "password" => '$2y$10$ItUhSjSsnUBOg8WPckLQxeA3IVlz6hjAD/BoHLcimYKPVYWiXBOXG',//qweqwe
      "is_specialist" => 1,
      "added_profile" => 1,
    ]);

    DB::table("users")->insert([
      "first_name" => "John",
      "last_name" => "Doe",
      "email" => "specialist10@mail.com",
      "longitude"=> 35.588832,
      "latitude"=>  33.838427,
      "expoPushNotificationToken"=>'ExponentPushToken[E2-CS1FM2Sw7kJvrNMbrlM]',
      "password" => '$2y$10$ItUhSjSsnUBOg8WPckLQxeA3IVlz6hjAD/BoHLcimYKPVYWiXBOXG',//qweqwe
      "is_specialist" => 1,
      "added_profile" => 1,
    ]);

    DB::table("users")->insert([
      "first_name" => "Leo",
      "last_name" => "Wilson",
      "email" => "client@mail.com",
      "longitude"=> 35.511832,
      "latitude"=>  33.818427,
      "expoPushNotificationToken"=>'ExponentPushToken[E2-CS1FM2Sw7kJvrNMbrlM]',
      "password" => '$2y$10$ItUhSjSsnUBOg8WPckLQxeA3IVlz6hjAD/BoHLcimYKPVYWiXBOXG',//qweqwe
      "is_specialist" => 0,
      "added_profile" => 0,
    ]);

    DB::table("users")->insert([
      "first_name" => "Elie",
      "last_name" => "Botros",
      "email" => "client2@mail.com",
      "longitude"=> 35.523832,
      "latitude"=>  33.810427,
      "expoPushNotificationToken"=>'ExponentPushToken[E2-CS1FM2Sw7kJvrNMbrlM]',
      "password" => '$2y$10$ItUhSjSsnUBOg8WPckLQxeA3IVlz6hjAD/BoHLcimYKPVYWiXBOXG',//qweqwe
      "is_specialist" => 0,
      "added_profile" => 0,
    ]);

    //specialities
    DB::table("specialities")->insert([
      "name" => "Electrician",
      "description" => "do every thing related to electricity",
    ]);

    DB::table("specialities")->insert([  
      "name" => "Plumber",
      "description" => "do every thing related to plumbing",
    ]);

    DB::table("specialities")->insert([ 
      "name" => "Carpenter",
      "description" => "do every thing related to wood",
    ]);

    DB::table("specialities")->insert([
      "name" => "Painter",
      "description" => "do every thing related to painting walls",
    ]);

    DB::table("specialities")->insert([
      "name" => "Tile Installer",
      "description" => "do every thing related to painting walls",
    ]);

    DB::table("specialities")->insert([       
      "name" => "General Maintenance",
      "description" => "do every thing related to painting walls",
    ]);


      //assigning speciality  to each specialist
    DB::table("specialityOfSpecialist")->insert([        
      "specialist_id" => 1,
      "speciality_id" => 1,        
    ]);

    DB::table("specialityOfSpecialist")->insert([       
      "specialist_id" => 2,
      "speciality_id" => 2,       
    ]);

    DB::table("specialityOfSpecialist")->insert([       
      "specialist_id" => 3,
      "speciality_id" => 3,       
    ]);

    DB::table("specialityOfSpecialist")->insert([        
      "specialist_id" => 4,
      "speciality_id" => 4,        
    ]);

    DB::table("specialityOfSpecialist")->insert([       
      "specialist_id" => 5,
      "speciality_id" => 5,       
    ]);

    DB::table("specialityOfSpecialist")->insert([       
      "specialist_id" => 6,
      "speciality_id" => 6,        
    ]);

    DB::table("specialityOfSpecialist")->insert([      
      "specialist_id" => 7,
      "speciality_id" => 1,       
    ]);

    DB::table("specialityOfSpecialist")->insert([        
      "specialist_id" => 8,
      "speciality_id" => 2,       
    ]);

    DB::table("specialityOfSpecialist")->insert([
      "specialist_id" => 9,
      "speciality_id" => 1,
    ]);

    DB::table("specialityOfSpecialist")->insert([
      "specialist_id" => 10,
      "speciality_id" => 3,   
    ]);

    
    //building specialists' Profile
    DB::table("specialists_profile")->insert([       
      'phone' => "+96171336789",
      'nationality'=>"Lebanese" ,      
      'profile_picture_url'=>"/image/electrician.jpeg",
      'price'=>10,
      'currency'=>"USD",
      'experience'=>8,
      'user_id'=>1,      
    ]);

    DB::table("specialists_profile")->insert([       
      'phone' => "+96171264586",
      'nationality'=>"Lebanese" ,      
      'profile_picture_url'=>"/image/plumber.jpeg",
      'price'=>120000,
      'currency'=>"LBP",
      'experience'=>7,
      'user_id'=>2,      
    ]);

    DB::table("specialists_profile")->insert([       
      'phone' => "+96171234586",
      'nationality'=>"Lebanese" ,      
      'profile_picture_url'=>"/image/carpenter.jpeg",
      'price'=>150000,
      'currency'=>"LBP",
      'experience'=>5,
      'user_id'=>3,     
    ]);

    DB::table("specialists_profile")->insert([
      'phone' => "+96171234986",
      'nationality'=>"Syrian" ,      
      'profile_picture_url'=>"/image/painter.jpeg",
      'price'=>15,
      'currency'=>"USD",
      'experience'=>4,
      'user_id'=>4, 
    ]);


    DB::table("specialists_profile")->insert([        
      'phone' => "+96170234989",
      'nationality'=>"Palestanian" ,      
      'profile_picture_url'=>"/image/TileInstaller.jpeg",
      'price'=>8,
      'currency'=>"USD",
      'experience'=>2,
      'user_id'=>5,  
    ]);

    DB::table("specialists_profile")->insert([
      'phone' => "+96171234990",
      'nationality'=>"Lebanese" ,      
      'profile_picture_url'=>"/image/maintenance.jpeg",
      'price'=>15,
      'currency'=>"USD",
      'experience'=>4,
      'user_id'=>6, 
    ]);

    DB::table("specialists_profile")->insert([
      'phone' => "+96171434790",
      'nationality'=>"Lebanese" ,      
      'profile_picture_url'=>"/image/electrician2.jpeg",
      'price'=>100000,
      'currency'=>"LBP",
      'experience'=>7,
      'user_id'=>7, 
    ]);

    DB::table("specialists_profile")->insert([
      'phone' => "+96178435890",
      'nationality'=>"Lebanese" ,      
      'profile_picture_url'=>"/image/plumber2.jpeg",
      'price'=>10,
      'currency'=>"USD",
      'experience'=>3,
      'user_id'=>8, 
    ]);

    
    DB::table("specialists_profile")->insert([
      'phone' => "+9613455890",
      'nationality'=>"Lebanese" ,      
      'profile_picture_url'=>"/image/electrician3.jpeg",
      'price'=>11,
      'currency'=>"USD",
      'experience'=>12,
      'user_id'=>9, 
    ]);

    DB::table("specialists_profile")->insert([
      'phone' => "+96170455880",
      'nationality'=>"Lebanese" ,      
      'profile_picture_url'=>"/image/carpenter2.jpeg",
      'price'=>5,
      'currency'=>"USD",
      'experience'=>2,
      'user_id'=>10, 
    ]);

    //projects for specialist 1
    DB::table("projects")->insert([
      "name" => 'Lighting at BDD',
      "specialist_id" => 1,
      'description' => 'Built by metal profiles and a ceiling where the warm light of a series of LED strips is projected. ',
      'total_cost' => '800',
      'currency'=> 'USD',
      'is_done' => 1, 
    ]);

    DB::table("projects")->insert([ 
      "name" => 'Floor heating',
      "specialist_id" => 1,
      'description' => 'Made up of a series of piping loops that are laid beneath the floor to effectively turn it into a giant radiator',
      'total_cost' => '1000',
      'currency'=> 'USD',
      'is_done' => 0,   
    ]);

    DB::table("projects")->insert([      
      "name" => 'Solar System Installation',
      "specialist_id" => 1,
      'description' => 'Project Site: Bikaa, Lebanon System: Solar tracking System Capacity: 5MW',
      'total_cost' => '2500',
      'currency'=> 'USD',
      'is_done' => 0,      
    ]);

    //projects' Photos
    DB::table("project_photos")->insert([
      "photo_url"=> "/ProjectImages/light.jpeg" ,
      "project_id"=> 1,
    ]);

    DB::table("project_photos")->insert([
      "photo_url"=> "/ProjectImages/light2.jpeg" ,
      "project_id"=> 1,
    ]);

    DB::table("project_photos")->insert([
      "photo_url"=> "/ProjectImages/light3.jpeg" ,
      "project_id"=> 1,
    ]);

    DB::table("project_photos")->insert([
      "photo_url"=> "/ProjectImages/floor.jpeg" ,
      "project_id"=> 2,
    ]);

    DB::table("project_photos")->insert([
      "photo_url"=> "/ProjectImages/floor2.jpeg" ,
      "project_id"=> 2,
    ]);
    
    DB::table("project_photos")->insert([
      "photo_url"=> "/ProjectImages/floor3.jpeg" ,
      "project_id"=> 2,
    ]);

    DB::table("project_photos")->insert([
      "photo_url"=> "/ProjectImages/floor4.jpeg" ,
      "project_id"=> 2,
    ]);

    DB::table("project_photos")->insert([
      "photo_url"=> "/ProjectImages/solar.jpeg" ,
      "project_id"=> 3,
    ]);

    DB::table("project_photos")->insert([
      "photo_url"=> "/ProjectImages/solar2.jpeg" ,
      "project_id"=> 3,
    ]);

    DB::table("project_photos")->insert([
      "photo_url"=> "/ProjectImages/solar3.jpeg" ,
      "project_id"=> 3,
    ]);

    DB::table("project_photos")->insert([
      "photo_url"=> "/ProjectImages/solar4.jpeg" ,
      "project_id"=> 3,
    ]);


    //Specialists' Reviews        
    DB::table("commentspecialists")->insert([
      
      "specialist_id" => 1,
      "client_id" => 11,
      'comment' => 'Amazing work, really experienced',   
    ]);

    DB::table("commentspecialists")->insert([
      
      "specialist_id" => 1,
      "client_id" => 12,
      'comment' => 'Always on time, deserves every penny',   
    ]);

    //Rating
    DB::table("ratespecialists")->insert([ 
      "specialist_id" => 1,
      "client_id" => 10,
      'rate' => 4,   
    ]);

    DB::table("ratespecialists")->insert([
      "specialist_id" => 1,
      "client_id" => 11,
      'rate' => 5,   
    ]);
    
    //Tips
    DB::table("specialists_tips")->insert([ 
      "specialist_id" => 1,
      "tip" => "Low voltage doesn’t mean no danger",
    ]);

    DB::table("specialists_tips")->insert([ 
      "specialist_id" => 2,
      "tip" => "Don’t pour grease or oil down the drain",
    ]);

    DB::table("specialists_tips")->insert([ 
      "specialist_id" => 3,
      "tip" => "Always marks your measures",
    ]);

    DB::table("specialists_tips")->insert([ 
      "specialist_id" => 7,
      "tip" => "protective gear is only protective if it’s properly made",
    ]);

    DB::table("specialists_tips")->insert([ 
      "specialist_id" => 6,
      "tip" => "Climate should dictate material",
    ]);

    DB::table("specialists_tips")->insert([ 
      "specialist_id" => 8,
      "tip" => "Make sure your main sewer drain is accessible",
    ]);

    DB::table("specialists_tips")->insert([ 
      "specialist_id" => 6,
      "tip" => "Mow your lawn before the roofing crew arrives",
    ]);

    DB::table("specialists_tips")->insert([ 
      "specialist_id" => 1,
      "tip" => "Never tape or hold down a circuit breaker",
    ]);

    DB::table("specialists_tips")->insert([ 
      "specialist_id" => 9,
      "tip" => "You can’t install a Three-Slot receptacle without a ground wire",
    ]);

    DB::table("specialists_tips")->insert([ 
      "specialist_id" => 10,
      "tip" => "Use the Toenail Trick to position lumber",
    ]);

    DB::table("specialists_tips")->insert([ 
      "specialist_id" => 4,
      "tip" => "Completely cover windows and doors when painting",
    ]);

    //available times for specialist with id=1
    DB::table("availabilityDates")->insert([ 
      "specialist_id" => 1,
      "availableDate" =>"2021-11-17" ,
      "is_available" => 0
    ]);

    DB::table("availabilityDates")->insert([ 
      "specialist_id" => 1,
      "availableDate" =>"2021-11-18" ,
      "is_available" => 1
    ]);

    DB::table("availabilityDates")->insert([ 
      "specialist_id" => 1,
      "availableDate" =>"2021-11-19" ,
      "is_available" => 1
    ]);

    DB::table("availabilityDates")->insert([ 
      "specialist_id" => 1,
      "availableDate" =>"2021-11-20" ,
      "is_available" => 1
    ]);

    DB::table("availabilityDates")->insert([ 
      "specialist_id" => 1,
      "availableDate" =>"2021-11-22" ,
      "is_available" => 0
    ]);

    DB::table("availabilityDates")->insert([ 
      "specialist_id" => 1,
      "availableDate" =>"2021-11-23" ,
      "is_available" => 1
    ]);

    DB::table("availabilityDates")->insert([ 
      "specialist_id" => 1,
      "availableDate" =>"2021-11-24" ,
      "is_available" => 1
    ]);

    DB::table("availabilityDates")->insert([ 
      "specialist_id" => 1,
      "availableDate" =>"2021-11-25" ,
      "is_available" => 1
    ]);

    DB::table("availabilityDates")->insert([ 
      "specialist_id" => 1,
      "availableDate" =>"2021-11-26" ,
      "is_available" => 0
    ]);

    DB::table("availabilityDates")->insert([ 
      "specialist_id" => 1,
      "availableDate" =>"2021-11-27" ,
      "is_available" => 1
    ]);

    DB::table("availabilityDates")->insert([ 
      "specialist_id" => 1,
      "availableDate" =>"2021-11-29" ,
      "is_available" => 1
    ]);

    DB::table("availabilityDates")->insert([ 
      "specialist_id" => 1,
      "availableDate" =>"2021-11-30" ,
      "is_available" => 0
    ]);

    //Appointments
    DB::table("appointments")->insert([ 
      "specialist_id" => 1,
      "client_id" => 10,
      "appointmentDate" =>"2021-11-30",
    ]);

    DB::table("appointments")->insert([ 
      "specialist_id" => 1,
      "client_id" => 10,
      "appointmentDate" =>"2021-11-26",
    ]);

    DB::table("appointments")->insert([ 
      "specialist_id" => 1,
      "client_id" => 11,
      "appointmentDate" =>"2021-11-22",
    ]);

    DB::table("appointments")->insert([ 
      "specialist_id" => 1,
      "client_id" => 11,
      "appointmentDate" =>"2021-11-17",
    ]);

  }
}
