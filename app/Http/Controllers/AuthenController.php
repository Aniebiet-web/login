<?php

namespace App\Http\Controllers;
use App\Login;
use App\User;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use Illuminate\support\Facades\Hash;
use Symfony\component\console\inputArgument;


class AuthenController extends Controller
{
    public function welcome(){ 
        return view('welcome');
    }
    public function index(){ 
        return view('index');
    }
    public function services(){ 
        return view('services');
    }
    public function dashboard(){ 
        return view('dashboard');
    }
    public function about(){ 
        return view('about');
    }
     public function login(){ 
        return view('login');

     }
    public function signup(){ 
        return view('signup');
    }

    public function postsignup(Request $request){
        $this->validate($request,[
             'password'=>'required|min:8',
             'email'=>'required|unique:users',
             
        ]);
   
    
        $user = new User();
        $user->email = request('email');
        $user->password =Hash::make(request('password'));
        $user->name=request('name');
        $user->save();
        

        session()->flash('success','User successfully created');
        return redirect(route('signup'));

}
     public function postlogin(request $request){
        $this->validate($request,[
            'password'=>'required',
            'email'=>'required'
        ]);

        $profile=collect($request)->only('email','password');
        Auth::attempt([
            'email'=> $profile['email'],
            'password'=> $profile['password']
        ]);

        if(!auth()->user() && auth()->user()==null){
            return "working";

        }
        else{
            return "not working";
        }
}
}

