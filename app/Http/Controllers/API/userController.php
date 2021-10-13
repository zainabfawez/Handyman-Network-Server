<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\SpecialistLocation;
use App\Models\SpecialistProfile;
use App\Models\Speciality;
use App\Models\Project;
use App\Models\ProjectPhoto;
use App\Models\SpecialityOfSpecialist;
use Symfony\Component\HttpFoundation\Response;


use Validator;
/* change in data base:
add rating,comment to project table
remove location_id from addPrfile
add user_id to location table*/

class userController extends Controller
{
    public function addProfile(Request $request){
        $user_id = auth()->user();
        $user = User::find($user_id);
        $type = $user->is_specialist;
        return response()->json($type, 200);
        if ($type){
            $profile = new SpecialistProfile;
            $profile->phone = $request->phone;
            $profile->nationality =$request->nationality;
            $profile->profile_picture_url = NULL ;
            $profile->price = $request->price;
            $profile->currency = $request->currency;
            $profile->avg_rating = $request->avg_rating;
            $profile->user_id = $user_id;
            $profile->save();
            $response['status'] = "profile-added";
            return response()->json($response, 200);
        }else{
            $response['status'] = "access denied";
            return response()->json($response, 403);
        }
    }

   

    public function addSpeciality(Request $request){
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $specialityName = $request->speciality;
        $speciality= Speciality::where('name',$specialityName);
        $speciality_id = $speciality->id;
        $newSpeciality = new SpecialityOfSpecialist;
        $newSpeciality->specialist_id = $user_id;
        $newSpeciality->speciality_id = $speciality_id;
        $newSpeciality->save();
        $response['status'] = "speciality added";
        return response()->json($specialityName, 200);
    }

    public function getUser(Request $request){
        $user = User::find($request->id);
        if($user){
            return response()->json($user, 200);
        }else{
            $response['status'] = "No results found";
            return response()->json($response, 200);
        }
    }

    public function getSpecialities(Request $request){
        $speciality = Speciality:: all();
        if($speciality){
            return response()->json($user, 200);
        }else{
            $response['status'] = "No results found";
            return response()->json($response, 200);
        }
    }

    public function searchUser(Request $request){
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $name = '%'.$request->name."%";
        $users = User::Search($name)
                       ->isSpecialist()
                       ->get();
        if(count($users) > 0){
            return response()->json($users, 200);
        }else{
            $response['status'] = "No results found";
            return response()->json($response, 200);
        }
    }

    public function addProject(Request $request){
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $type = $user->is_specialist;
        if ($type){
            $project = new Project;
            $project->name = $request->name;
            $project->description =$request->description;
            $project->is_done = 0 ;
            $project->total_cost= $request->total_cost;
            $project->currency = $request->currency;
            $project->specialist_is = $user_id;
            $project->user_id = $user_id;
            $project->location_id = 1; 
            $project->save();
            $response['status'] = "project-added";
            return response()->json($response, 200);
        }else{
            $response['status'] = "access denied";
            return response()->json($response, 403);
        }
    }

    public function addProjectPhoto(Request $request){
        $image = $request->image;  // your base64 encoded
        $imageName = "str_random(".rand(10,1000).")".'.'.'jpeg';
        $path=public_path();
        \File::put($path. '/image/' . $imageName, base64_decode($image));
        $response['status'] = "add_photo";
        $user_id = auth()->user()->id;    
        $user = User::find($user_id);
        $project = Project::where('specialist_id', $user_id);
        $project_id = $project->id;
        $photo = new ProjectPhoto;
        $photo->photo_url= '/image/'.$imageName;
        $photo->project_id = $project_id;
        $user->save();
        return response()->json($response, 200);
    }

    public function rateProject(Request $request){
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $rate = $request->rate;
        $project = Project::find($request->project_id);
        $project->rating = $rate;
        $project->save();
        $response['status']="rating_added";
        return response()->json($response,200);
    }

    public function commentProject(Request $request){
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $comment = $request->comment;
        $project = Project::find($request->project_id);
        $project->comment = $comment;
        $project->save();
        $response['status']="comment_added";
        return response()->json($response,200);
    }

    public function addLocation(Request $request){
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $location = new Project;
        $location->country = $request->country;
        $location->city = $request ->city;
        $location->longitude = $request ->longitude;
        $location->latitude = $request ->latitude;
        $location->user_id = user_id;
        $location->save();
        $response['status']="location_added";
        return response()->json($response,200);
    }

    public function averageRating(Request $request){
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $rating = Project::avg($rate)->where('specialist_id',$user_id);  
        $rating->save();
        $response['status']="averageRate";
        return response()->json($response,200);
    }

}
