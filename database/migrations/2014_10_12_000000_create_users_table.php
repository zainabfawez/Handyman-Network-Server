<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { Schema::create('users', function (Blueprint $table) {
        $table->id();
        $table->string('first_name');
        $table->string('last_name');
        $table->string('email')->unique();
        $table->double('longitude', 15, 8);
        $table->double('latitude', 15, 8);
        $table->timestamp('email_verified_at')->nullable();
        $table->string('password');
        $table->boolean('is_specialist'); /* 0 for client, 1 for specialist */
        $table->string ('expoPushNotificationToken')->nullable();
        $table->rememberToken();
        $table->timestamps();
    });

    Schema::create('specialists_profile', function (Blueprint $table) {
        $table->id();
        $table->string('phone');
        $table->string('nationality');       
        $table->string('profile_picture_url');
        $table->integer('price');
        $table->string('currency');
        $table->integer('experience');
        $table->integer('user_id');
        $table->string('profile_path');
        $table->rememberToken();
        $table->timestamps();
    });

    

    Schema::create('rateSpecialists', function (Blueprint $table) {
        $table->id();
        $table->tinyInteger('rate');
        $table->integer('specialist_id');    
        $table->integer('client_id');    
        $table->rememberToken();
        $table->timestamps();
    });

    Schema::create('commentSpecialists', function (Blueprint $table) {
        $table->id();
        $table->mediumText('comment');
        $table->integer('specialist_id');    
        $table->integer('client_id');    
        $table->rememberToken();
        $table->timestamps();
    });


    Schema::create('specialities', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->longText('description');     
        $table->rememberToken();
        $table->timestamps();
    });

    Schema::create('specialityOfSpecialist', function (Blueprint $table) {
        $table->id();                   
        $table->integer('specialist_id');
        $table->integer('speciality_id');			
        $table->timestamps();
        $table->softDeletes();
    });


    
    Schema::create('projects', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->longText('description');
        $table->boolean('is_done');
        $table->integer('total_cost');
        $table->string('currency');
        $table->integer('specialist_id');
        $table->rememberToken();
        $table->timestamps();
    });

    Schema::create('project_photos', function (Blueprint $table) {
        $table->id();
        $table->string('photo_url');
        $table->integer('project_id');
        $table->rememberToken();
        $table->timestamps();
    });

    Schema::create('specialists_tips', function (Blueprint $table) {
        $table->id();
        $table->longText('tip');
        $table->integer('specialist_id');
        //$table->string('image_url');
        $table->rememberToken();
        $table->timestamps();
    });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
