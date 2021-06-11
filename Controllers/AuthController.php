<?php

namespace App\Http\Controllers;
use App\Models\user;
use Illuminate\Http\Request;
use Hash;
use Session;
use Illuminate\Support\Facades\Auth;




class AuthController extends Controller
{

    public function auth()  {
        $customers = user::all();
        return view('auth')->withTitle('GAMES4U');
    }

    public function login()
    {
        $customers = user::all();
        return view('logggin')->withTitle('GAMES4U');
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('shop')
                        ->withSuccess('You have Successfully loggedin');
        }
  
        return redirect("logggin")->withSuccess('Oops! You have entered invalid credentials');
    }

    public function postRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect('login')->withSuccess('Great! You have Successfully loggedin');
    }

    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }

    public function logout() {
        Session::flush();
        Auth::logout();
  
        return Redirect('/');
    }

    
}

