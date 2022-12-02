<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{


    public function register_page(){
        return view('auth.register');
    }
    public function register(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
        return redirect()->route('main');


        return redirect("main")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }    
    
    public function login_page(){
        return view('auth.login');
    }

    public function login(Request $request){
        $credendtial=$request->only('email','password');
                // dd($credendtial);

        if(Auth::attempt($credendtial)){


                return redirect(route('user.index'));
        }
        
        Alert::error('failed','notfound');
        return redirect()->back();

        
    }

    public function logout(Request $request){
        $request->session()->flush();
        Auth::logout();
        return view('auth.login');

    }
}
