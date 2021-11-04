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
use App\Models\Appointment;
use App\Models\Availability;
use Symfony\Component\HttpFoundation\Response;
use Validator;


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
            $profile->experience = $request->experience;
            $profile->currency = $request->currency;
            $profile->user_id = $user_id;
            $profile->save();
            $user->added_profile = 1;
            $user->save();
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

    public function addProfilePic(Request $request){
        $user_id = auth()->user()->id;
        $image = $request->image;  // your base64 encoded
        $imageName = "str_random(".rand(10,1000).")".'.'.'jpeg';
        $path=public_path();
        \File::put($path. '/image/' . $imageName, base64_decode($image));
        $profile = SpecialistProfile::where('user_id', '=', $user_id)->first();
        $profile->profile_picture_url = '/image/'.$imageName;
        $profile->save();
        $response['status'] = "add-Profile";
       
    }

    public function getProfilePic(Request $request){
        $specialist_id = $request->specialist_id;
        $image_path = SpecialistProfile::select('profile_picture_url')
                                        ->where('user_id',$specialist_id)
                                        ->first();
        return response()->json($image_path, 200);

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

    public function getSpecialistSpeciality(Request $request){
        $user_id = auth()->user()->id;
        $specialist_id = $request->specialist_id;
        $speciality_id = SpecialityOfSpecialist::select('speciality_id')
                                                ->where('specialist_id','=', $specialist_id)
                                                ->first();                               
        $speciality_name =Speciality::find($speciality_id, 'name');
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


    public function search(Request $request){
        $search = $request->speciality."%";
        $specialists = DB::table('users')
                            ->join('specialityOfSpecialist','specialityOfSpecialist.specialist_id', '=', 'users.id')
                            ->join('specialities', 'specialityOfSpecialist.speciality_id', '=', 'specialities.id')
                            ->join('specialists_profile','specialists_profile.user_id', '=', 'users.id')
                            ->where('specialities.name', 'like', $search)
                            ->select('users.id', 'specialities.name AS speciality', 'users.longitude', 'users.latitude','users.first_name', 'users.last_name' )
                            ->get();
        if($specialists){
            return response()->json($specialists, 200);
        }else{
            $response['status'] = "No Search Results ";
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
            $project->is_done = $request->is_done ;
            $project->total_cost= $request->total_cost;
            $project->currency = $request->currency;
            $project->specialist_id = $user_id;
            $project->save();
            $project_id = $project->id;
            //Add project pic
            $image = $request->image;  // your base64 encoded
            $imageName = "str_random(".rand(10,1000).")".'.'.'jpeg';
            $path=public_path();
            \File::put($path. '/ProjectImages/' . $imageName, base64_decode($image));
            $response['status'] = "add_photo";
            $photo = new ProjectPhoto;
            $photo->photo_url= '/ProjectImages/'.$imageName;
            $photo->project_id = $project_id;
            $photo->save();
            $response = $project_id;
            return response()->json($response, 200);
        }else{
            $response['status'] = "access denied";
            return response()->json($response, 403);
        }
    }
    
   // need to be checked
    public function addProjectPhoto(Request $request){
        $image = $request->image;  // your base64 encoded
        $imageName = "str_random(".rand(10,1000).")".'.'.'jpeg';
        $path=public_path();
        \File::put($path. '/ProjectImages/' . $imageName, base64_decode($image));
        $response['status'] = "add_photo";
        $user_id = auth()->user()->id;    
        $project_id = $request->project_id;
        $photo = new ProjectPhoto;
        $photo->photo_url= '/ProjectImages/'.$imageName;
        $photo->project_id = $project_id;
        $photo->save();
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
    
    public function getAverageRate(Request $request){
        $specialist_id = $request->specialist_id;
        $rating = RateSpecialist::where('specialist_id','=',$specialist_id)->avg('rate');  
        $rating = round($rating, 1);
        if ($rating){
            return response()->json($rating,200);
        }else{
            $response['status']="no rating";
            return response()->json($response,200);
        }      
    }

    public function getComments(Request $request){
        $user_id = auth()->user()->id;
        $specialist_id = $request->specialist_id;
        $comments = DB::table('commentSpecialists')
                        ->select('commentSpecialists.comment', 'users.first_name', 'users.last_name')
                        ->where("specialist_id",$specialist_id)
                        ->join('users','commentSpecialists.client_id', '=','users.id')
                        ->get();             
        if($comments){
            return response()->json($comments, 200);
        }else{
            $response['status'] = "No comments found";
            return response()->json($response, 200);
        }
    }



    public function getTips(Request $request){
        $tips =DB::table('specialists_tips')
                    ->join('users', 'users.id', '=', 'specialists_tips.specialist_id')  
                    ->select('users.first_name', 'users.last_name', 'specialists_tips.tip',  'specialists_tips.id')
                    ->get();
        if($tips){
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

    public function getAllClients(){
        $clients = User::where('is_specialist','=',0)->get();
        if($clients){
            return response()->json($clients, 200);
        }else{
            $response['status'] = "No results found";
            return response()->json($response, 200);
        }
    }

    public function getAllSpecialists(){
        $specialists = User::where('is_specialist','=',1)->get();
        if($specialists){
            return response()->json($specialists, 200);
        }else{
            $response['status'] = "No Specialists found";
            return response()->json($response, 200);
        }
    }

    public function getpushToken(){
        $pushTokens = User::select('expoPushNotificationToken')->where('is_specialist','=',0)->get();
        if($pushTokens){
            return response()->json($pushTokens, 200);
        }else{
            $response['status'] = "No pushToken found";
            return response()->json($response, 200);
        }
    }

    public function getSpecialistMapInfo(){
        $mapInfo = DB::table('specialists_profile')
            ->select('users.id', 'users.first_name', 'users.last_name', 'specialities.name AS speciality', 'users.longitude', 'users.latitude')
            ->join('users','specialists_profile.user_id', '=','users.id')
            ->join('specialityOfSpecialist','specialists_profile.user_id','=','specialityOfSpecialist.specialist_id' )
            ->join('specialities', 'specialities.id', '=', 'specialityOfSpecialist.speciality_id')
            ->get();
        return response()->json($mapInfo, 200);
    }

    Public Function getProjects(Request $request){
        $specialist_id  = $request->specialist_id;
        $projects = Project::select('id','name')->where('specialist_id','=',$specialist_id)->get();
        if($projects){
            return response()->json($projects, 200);
        }else{
            $response['status'] = "No Projects found";
            return response()->json($response, 200);
        }
    }

    
    Public Function getSpecialistProjects(Request $request){
        $specialist_id  = $request->specialist_id;
        $projects = Project::where('specialist_id','=',$specialist_id)->get();
        if($projects){
            return response()->json($projects, 200);
        }else{
            $response['status'] = "No Projects found";
            return response()->json($response, 200);
        }
    }


    Public Function getProjectDetails(Request $request){
        $project_id  = $request->project_id;
        $project = Project::where('id','=',$project_id)->get();
        if($project){
            return response()->json($project, 200);
        }else{
            $response['status'] = "No Projects found";
            return response()->json($response, 200);
        }

    }

    Public Function setAvailableDate(Request $request){
        $specialist_id = auth()->user()->id;
        $newDate = new Availability;
        $newDate->specialist_id = $specialist_id;
        $newDate->is_available = 1;
        $newDate->availableDate = $request->date;
        $newDate->save();
        $response['status'] = "date added";
        return response()->json($response, 200);
    }

    Public Function setAppointmentDate(Request $request){
        $user_id = auth()->user()->id;
        $newAppointment = new Appointment;
        $newAppointment->specialist_id = $request->specialist_id;
        $newAppointment->client_id = $user_id;
        $newAppointment->appointmentDate = $request->date;
        $checkDate = Availability::where('availableDate','=',$newAppointment->appointmentDate)
                                    ->where('is_available', 1)
                                    ->first();
        $checkDate->is_available = 0;
        $checkDate->save();
        if ($newAppointment->appointmentDate == $checkDate->availableDate){
            $newAppointment->save();
            $response['status'] = "date added";
            return response()->json($response, 200);
        }else{
            $response['status'] = "date not available";
            return response()->json($response, 200);
        }
       
    }

    public function getAvailabledates(Request $request){
        $specialist_id = $request->specialist_id;
        $dates = Availability::select('availableDate')->where('is_available', 1)->get();
        if($dates){
            return response()->json($dates, 200);
        }else{
            $response['status'] = "No available dates";
            return response()->json($response, 200);
        }

    }

    public function getAppointmentdates(Request $request){
        $specialist_id = auth()->user()->id;
        $dates = DB::table('appointments As app')
                   ->select('app.appointmentDate As date', 'users.first_name', 'users.last_name')
                   ->join('users', 'app.client_id','=', 'users.id')
                   ->get();
        if ($dates){
            return response()->json($dates, 200);
        }else{
            $response['status'] = "No appointments";
            return response()->json($response, 200);
        }           
    }

}
