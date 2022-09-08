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
}
