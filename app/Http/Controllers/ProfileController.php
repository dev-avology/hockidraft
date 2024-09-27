<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UpdateProfile;
use App\Http\Requests\updatePassword;
use App\Services\ApiHockyService;
use App\Models\User;
use App\Models\Team;
use App\Models\Matche;

use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{

    protected $ApiHockyService;

    public function __construct(ApiHockyService $ApiHockyService)
    {
        $this->ApiHockyService = $ApiHockyService;
    }

    public function myProfile()
    {
       return view('front_end.pages.profile.my-profile');
    }

    public function updateProfile(UpdateProfile $request)
    {
       $user = ["name"=>$request->input('name'),"lname"=>$request->input('lname'),"email"=>$request->input('email'),"phone"=>$request->input('phone')];
       User::where(['id'=>Auth::user()->id])->update($user);
       return redirect()->route('profile.profile')->with('success','Profile updated successfully');
    }

    public function changePassword()
    {
        return view('front_end.pages.profile.update-password');
    }

    public function updatePassword(UpdatePassword $request)
    {
        $user = ["password"=>Hash::make($request->input('new_password'))];
        User::where(['id'=>Auth::user()->id])->update($user);
        return redirect()->route('profile.change.password')->with('success','Password updated successfully');
    }

    public function updateProfilePic(Request $request)
    {
        $request->validate([
            'profile_picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = Auth::user();

        if ($request->hasFile('profile_picture')) {
            $file = $request->file('profile_picture');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $path = 'assets/images/'.$filename;
            $file->move(public_path('assets/images/'), $filename);

            // Update the user's profile picture in the database
            $user->image = $path;
            $user->save();
        }

        return back()->with('success', 'Profile picture updated successfully.');
    }

    public function myMatches(){
        $userId = Auth::user()->id;
        $teams = Team::whereHas('teamDetails', function($query) use ($userId) {
            $query->where('user_id', $userId);
        })->get();

        $matches = [];

        if($teams->isNotEmpty()){

            foreach($teams as $val){
                
                $matchDetails = Matche::with('league')->where('fixture_id',$val->match_id)->first();

                if(isset($matchDetails) && !empty($matchDetails)) {
                    $matches[] = $matchDetails;
                }
            }
        }
        return view('front_end.pages.profile.my-matches', compact('matches'));
    }


    public function matchDetails($leagueId,$matchId)
    {
        $teams = Team::whereHas('teamDetails', function($query) use ($leagueId,$matchId) {
            $query->where('league_id', $leagueId);
            $query->where('match_id', $matchId);
        })->with('teamDetails')->get();

        $matchDetails = Matche::with('league')->where('fixture_id',$matchId)->first();

        if(isset($matchDetails) && !empty($matchDetails)){
            $matchDetails = $matchDetails;
        }else{
            $matchDetails = [];
        }

        return view('front_end.pages.profile.match-details',compact('matchDetails','leagueId','matchId','teams'));
    }

}
