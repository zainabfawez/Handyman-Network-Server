<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group([
    'middleware' => 'api',
  

], function ($router) {
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/user-profile', [AuthController::class, 'userProfile']);  
    
    //Route::post('/add-profile', [AuthController::class, 'addProfile']); 
});


Route::group([
    'middleware' => 'api',
    

], function () {
    Route::post('/add-profile', [userController::class, 'addProfile']); 
    Route::post('/add-speciality', [userController::class, 'addSpeciality']); 
    Route::get('/get-user', [userController::class, 'getUser']);
    Route::post('/search-user', [userController::class, 'searchUser']);   
    Route::get('/get-specialities', [userController::class, 'getSpecialities']); 
    Route::post('/add-project', [userController::class, 'addProject']); 
    Route::post('/add-project-photo', [userController::class, 'addProjectPhoto']);  
    Route::post('/rate-project', [userController::class, 'rateProject']);    
    Route::post('/comment-project', [userController::class, 'commentProject']); 
    Route::post('/add-location', [userController::class, 'addLocation']);   
    Route::get('/average-rate', [userController::class, 'averageRate']);   

});
