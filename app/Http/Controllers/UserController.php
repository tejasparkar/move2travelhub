<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;
class UserController extends Controller
{
    //Show Register create form
    public function register(){
        return view('users.register');
    }

    //create new user
    public function createUser(Request $request){
      
        $formfields = $request->validate([
            'name' => ['required','min:3'],
            'email' => ['required','email', Rule::unique('users','email')],
            'password' => 'required|confirmed|min:6',
        ]);

        //Hash password
        $formfields['password'] = bcrypt($formfields['password']);

        //create user
        $user = User::create($formfields);

        //Login
        auth()->login($user);
        
        return redirect('/package')->with('sucess','User Registered sucessfully');
    }

    //show login form
    public function loginUser(){
        return view('users.login');
    }

    public function authenticate(Request $request){
        $formfields = $request->validate([
            'email' => ['required','email'],
            'password' => 'required ',
        ]);
        if(auth()->attempt($formfields)){
            $request->session()->regenerate();

            return redirect('/package')->with('sucess', "You are now Logged In");
        }
        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }

    //logout user
    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/package')->with('sucess', "You have been logged out");

    }
}
