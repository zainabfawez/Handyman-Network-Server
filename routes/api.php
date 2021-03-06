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
    Route::get('/get-profile', [userController::class, 'getProfile']); 
    Route::get('/get-user', [userController::class, 'getUser']);
    Route::post('/add-profile-pic', [userController::class, 'addProfilePic']); 
    Route::get('/get-profile-pic', [userController::class, 'getProfilePic']); 
    Route::get('/get-all-clients', [userController::class, 'getAllClients']);
    Route::get('/get-all-specialists', [userController::class, 'getAllSpecialists']);
    Route::post('/edit-info', [userController::class, 'editInfo']);

    Route::post('/search-speciality', [userController::class, 'search']);   
    Route::post('/add-speciality', [userController::class, 'addSpeciality']); 
    Route::get('/get-all-specialities', [userController::class, 'getAllSpecialities']); 
    Route::get('/get-specialist-specialities', [userController::class, 'getSpecialistSpeciality']);

    Route::post('/add-project', [userController::class, 'addProject']);
    Route::get('/get-projects', [userController::class, 'getProjects']); 
    Route::get('/get-specialist-projects', [userController::class, 'getSpecialistProjects']); 
    Route::get('/get-project-details', [userController::class, 'getProjectDetails']);  
    Route::post('/add-project-photo', [userController::class, 'addProjectPhoto']);  
    Route::get('/get-project-photos', [userController::class, 'getProjectPhotos']); 

    Route::post('/rate-specialist', [userController::class, 'rateSpecialist']);   
    Route::get('/get-average-rate', [userController::class, 'getAverageRate']);  

    Route::post('/comment-specialist', [userController::class, 'commentSpecialist']); 
    Route::get('/get-comments', [userController::class, 'getComments']);

    Route::post('/add-tip', [userController::class, 'addTip']); 
    Route::get('/get-tips', [userController::class, 'getTips']); 

    Route::post('/add-location', [userController::class, 'addLocation']);   
   
    Route::get('/get-push-tokens', [userController::class, 'getPushToken']);
    Route::get('/get-specific-push-token', [userController::class, 'getSpecificPushToken']); 
  
    Route::get('/get-specialist-map-info', [userController::class, 'getSpecialistMapInfo']);
  
    Route::post('/set-available-date',[userController::class, 'setAvailableDate']);
    Route::get('/get-available-dates',[userController::class, 'getAvailableDates']);
    Route::post('/set-appointment-date',[userController::class, 'setAppointmentDate']);
    Route::get('/get-appointment-dates',[userController::class, 'getAppointmentDates']);
});
