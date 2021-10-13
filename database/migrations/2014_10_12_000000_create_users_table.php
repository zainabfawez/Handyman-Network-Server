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
        $table->timestamp('email_verified_at')->nullable();
        $table->string('password');
        $table->boolean('is_specialist'); /* 0 for client, 1 for specialist */
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
        $table->float('avg_rating');
        $table->integer('user_id');
        $table->rememberToken();
        $table->timestamps();
    });

    Schema::create('locations', function (Blueprint $table) {
        $table->id();
        $table->string('country');
        $table->string('city');       
        $table->float('longitude');
        $table->float('latitude');
        $table->integer('user_id');
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
        $table->integer('rating');
        $table->string('comment');
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
