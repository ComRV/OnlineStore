<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function index() {
        return view('container.registration', [
            "title" => "Registration"
        ]);
    }

    public function store(Request $request) {
        $validateData = $request->validate([
            "firstName" => "required|max:255",
            "lastName" => "required|max:255",
            "email" => "required|email:dns|unique:users",
            "username" => "required|min:5|unique:users",
            "phoneNumber" => "required|numeric|unique:users",
            "password" => "required|min:8|max:255",
            "confirmPassword" => "required|min:8|max:255|same:password",
        ]);

        $validateData['name'] = ucwords("".$request['firstName']." ".$request['lastName']."");
        $validateData['password'] = Hash::make($validateData['password']);
        
        array_splice($validateData,0,2);
        User::create($validateData);
        
        return redirect("/login")->with('success', 'Registration successfull!');
    }

    public function update(Request $request) {
        $validateData = $request->validate([
            "name" => "max:255",
            "username" => "min:5",
            "email" => "email:dns",
            "alamat" => "max:255"
        ]);
        $user = User::find(auth()->user()->id);
        $user->name = ucwords($validateData['name']);
        $user->username = $validateData['username'];
        $user->email = $validateData['email'];
        $user->alamat = ucwords($validateData['alamat']);
        $user->save();

        return back()->with('success', 'Update data successful');
    }

    public function changepassword(Request $request) {
        $validateData = $request->validate([
            "current_password" => "required",
            "new_password" => "required|min:8|max:255",
            "confirm_password" => "required|min:8|max:255|same:new_password"
        ]);
        if (!Hash::check($request->current_password, auth()->user()->password)) {
            return back()->with('matchpassword', 'current password doesnt match');
        }

        $user = User::find(auth()->user()->id);
        $user->password = Hash::make($validateData['confirm_password']);
        $user->save();

        return back()->with('success', "Password updated");
    }

    public function changepin(Request $request) {
        $validateData = $request->validate([
            "new_pin" => "required|numeric|digits:6",
            "confirm_pin" => "required|numeric|digits:6|same:new_pin"
        ]);

        if (auth()->user()->PIN !== null && !Hash::check($request->current_pin, auth()->user()->PIN)) {
            return back()->with('matchpin', 'current pin doesnt match');
        }
        $user = User::find(auth()->user()->id);
        $user->PIN = Hash::make($validateData['confirm_pin']);
        $user->save();
        return back()->with('success', "PIN updated");
    }
}
