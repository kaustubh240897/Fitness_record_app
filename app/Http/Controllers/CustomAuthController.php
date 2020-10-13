<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\User;
use App\m_Users;

class CustomAuthController extends Controller
{
    public function showRegisterForm(){
        return view('custom.register');
       
    }
    public function Register(Request $request){
        $this->validation($request);
        $request['password'] = bcrypt($request->password);
        User::create($request->all());
        return redirect('/custom-login')->with('Status', 'You are registered please login now');
       
    }
     public function showLoginForm(){
        return view('custom.login');
       
    }
    public function Login(Request $request){
        $this->validate($request, [
            'name' => 'required|max:255',
            'password' => 'required|confirmed|max:255'

        ]);
        if(Auth::attempt(['name'=>$request->name, 'password'=>$request->password,'password_confirmation'=>$request->password])){
           $m_user = m_Users::where('users_id', Auth::id())->first();
            if ( $m_user !=null ) {// do your magic here
                return redirect()->route('padometerscreen')->with('Status', 'You are Successfully logged in');
            }

            return redirect()->route('create')->with('Status', 'You are Successfully logged in');
        }
        // login if serial number exists otherwise register it .
        else{
            $this->validation($request);
            $request['password'] = bcrypt($request->password);
            User::create($request->all());
            return redirect()->route('custom.login')->with('Status', 'You are Successfully registered please login now.');

        }
        return "oops something is wrong";
       
    }
    public function validation($request){
        return $this->validate($request, [
            'name' => 'required|unique:users|max:255',
            'password' => 'required|confirmed|max:255'

        ]);
    }
}
