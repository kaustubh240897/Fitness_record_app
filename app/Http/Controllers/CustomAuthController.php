<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\User;
use App\m_Users;
use Illuminate\Auth\Events\Registered;
class CustomAuthController extends Controller
{
    public function showRegisterForm(){
        return view('custom.register');

    }
    public function Register(Request $request){
        $this->validation($request);
        $request['email'] = $request->name;
        $request['password'] = bcrypt($request->password);
        event(new Registered($user = User::create($request->all())));
        $this->registered($request, $user);

        return redirect()->route('create')->with('Status', 'You are Successfully registered ')->withCookie(
                'serialnumber', 
                $request->email, 5340000, '/');
        // User::create($request->all());
        // Auth::login(User::create($request->all()));
        // return redirect('/custom-login')->with('Status', 'You are registered please login now');

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
                return redirect()->route('mypage')->with('Status', 'You are Successfully logged in')->withCookie(
                'serialnumber', 
                $request->email, 5340000, '/');
            }
            return redirect()->route('create')->with('Status', 'You are Successfully logged in')->withCookie(
                'serialnumber', 
                $request->email, 5340000, '/');
        }
        // login if serial number exists otherwise register it .
        else{
            $this->validation($request);
            $request['email'] = $request->name;
            $request['password'] = bcrypt($request->password);
            event(new Registered($user = User::create($request->all())));
            $this->registered($request, $user);

            return redirect()->route('create')->with('Status', 'You are Successfully registered ')->withCookie(
                'serialnumber', 
                $request->email, 5340000, '/');

            }
        return "oops something is wrong";

    }
    protected function registered(Request $request, $user)
    {
        return Auth::login($user);
    }

    public function validation($request){
        return $this->validate($request, [
            'name' => 'required|unique:users|max:255',
            'password' => 'required|confirmed|max:255'

        ]);
    }
    


    public function showlogout(){
        return view('custom.logout');

    }

    public function logout(Request $request) {
        $cookie = \Cookie::forget('serialnumber');
        Auth::logout();
        return redirect('/custom-login')->withCookie($cookie);
    }
}
