<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UpdateProfile;
use App\Http\Requests\updatePassword;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
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
}
