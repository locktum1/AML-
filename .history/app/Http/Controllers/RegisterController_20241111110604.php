<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use PDO;

class RegisterController extends Controller
{
    public function RegisterView(){
        return view('register');
    }

    public function Submit(Request $request){
        $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|max:50|unique:users',
            'password' => 'required|max:255',
            'dob' => 'required',
        ]);

        $user = User::create({
            'name'
        })

    }
}
