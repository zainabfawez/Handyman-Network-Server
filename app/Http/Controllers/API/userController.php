<?php

namespace App\Http\Controllers\api;

use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\SpecialistLocation;
use App\Models\RateSpecialist;
use App\Models\CommentSpecialist;
use App\Models\SpecialistProfile;
use App\Models\Speciality;
use App\Models\Project;
use App\Models\SpecialistTip;
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
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $type = $user->is_specialist;
        if ($type){
            $profile = new SpecialistProfile;
            $profile->phone = $request->phone;
            $profile->nationality =$request->nationality;
            $profile->profile_picture_url = "null" ;
            $profile->price = $request->price;
            $profile->currency = $request->currency;
            $profile->user_id = $user_id;
            $profile->save();
            $response['status'] = "profile-added";
            return response()->json($response, 200);
        }else{
            $response['status'] = "access denied";
            return response()->json($response, 403);
        }
    }

    public function getProfile(Request $request){
        $user_id = auth()->user()->id;
        $specialist_id = $request->specialist_id;
        $profile = SpecialistProfile::where('user_id','=', $specialist_id)->get();
        if($profile){
            return response()->json($profile, 200);
        }else{
            $response['status'] = "No results found";
            return response()->json($response, 200);
        }

    }

   

    public function addSpeciality(Request $request){
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $specialityName = $request->speciality;
        $speciality = DB::table('specialities')->where('name','=',$specialityName)->first();
        $speciality_id = $speciality->id;
        $newSpeciality = new SpecialityOfSpecialist;
        $newSpeciality->specialist_id = $user_id;
        $newSpeciality->speciality_id = $speciality_id;
        $newSpeciality->save();
        $response['status'] = "speciality added";
        return response()->json($response, 200);
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

    // returning empty array, should return name of the specilaity('electrician)
    public function getSpecialistSpeciality(Request $request){
        $user_id = auth()->user()->id;
        //return response()->json($user_id, 200);
        $specialist_id = $request->specialist_id;
        $speciality_id = SpecialityOfSpecialist::select('speciality_id')
                                                ->where('specialist_id','=', $specialist_id)
                                                ->get();
        //return response()->json($speciality_id, 200);                                   
        $speciality_name = DB::table('specialities')->where('id','=',$speciality_id)->get(); 
        if($speciality_name){
            return response()->json($speciality_name, 200);
        }else{
            $response['status'] = "No results found";
            return response()->json($response, 200);
       }
    }

    public function getAllSpecialities(Request $request){
        $user_id = auth()->user()->id;
        $speciality = Speciality::all();
        if($speciality){
            return response()->json($speciality, 200);
        }else{
            $response['status'] = "No results found";
            return response()->json($response, 200);
        }
    }

    public function searchBySpeciality(Request $request){
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $name = $request->speciality."%";
        $speciality_id = Speciality::where('name', 'LIKE', $name)->first()->id;
        $specialists_id = SpecialityOfSpecialist::select('specialist_id')
                                                    ->where('speciality_id','=',$speciality_id)
                                                    ->get();
        $specialists = array();
        foreach($specialists_id as $specialist_id){
            $id = (int) $specialist_id->specialist_id;
            $sp= User::where('id','=',$id)->get();
            $specialists[] = $sp;
        }             
        if(count($specialists) > 0){
            return response()->json($specialists, 200);
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
            $project->specialist_id = $user_id;
            $project->save();
            $response['status'] = "project-added";
            return response()->json($response, 200);
        }else{
            $response['status'] = "access denied";
            return response()->json($response, 403);
        }
    }
    
    //not done
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

    public function rateSpecialist(Request $request){
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $rate = $request->rate;
        $specialist_id = $request->specialist_id;
        $object = new RateSpecialist;
        $object->rate = $rate;
        $object->specialist_id = $specialist_id;
        $object->client_id = $user_id;
        $object->save();
        $response['status']="rating_added";
        return response()->json($response,200);
    }

    public function commentSpecialist(Request $request){
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $comment = $request->comment;
        $specialist_id = $request->specialist_id;
        $object = new CommentSpecialist;
        $object->comment = $comment;
        $object->specialist_id = $specialist_id;
        $object->client_id = $user_id;
        $object->save();
        $response['status']="comment_added";
        return response()->json($response,200);
    }
    
    //not done
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
    
    
    public function getAverageRate(Request $request){
        $user_id = auth()->user()->id;
        $specialist_id = $request->specialist_id;
        $rating = RateSpecialist::where('specialist_id','=',$specialist_id)->avg('rate');  
        if ($rating){
            return response()->json($rating,200);
        }else{
            $response['status']="no rates yet";
            return response()->json($response,200);
        }
        
      
    }

    public function getComments(Request $request){
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $specialist_id = $request->specialist_id;
        $comments = CommentSpecialist::select('comment')->where('specialist_id','=',$specialist_id);  
        $comments->save();
        if(count($comments) > 0){
            return response()->json($comments, 200);
        }else{
            $response['status'] = "No comments found";
            return response()->json($response, 200);
        }
    }

    public function getTips(Request $request){
        $user_id = auth()->user()->id;
        $tips = SpecialistTip::all();  
        if(count($tips) > 0){
            return response()->json($tips, 200);
        }else{
            $response['status'] = "No tips found";
            return response()->json($response, 200);
        }
    }

    public function addTip(Request $request){
        $user_id = auth()->user()->id;
        $newTip = new SpecialistTip;
        $newTip->specialist_id = $user_id;
        $newTip->tip = $request->tip;
        $newTip->save();
        $response['status']="tip_added";
        return response()->json($response,200);

    }

}
