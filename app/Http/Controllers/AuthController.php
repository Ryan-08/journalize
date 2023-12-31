<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use App\Models\UserVerify;
use Hash;
use Illuminate\Support\Str;
use Mail; 

class AuthController extends Controller
{
    //
    public function postLogin(Request $request)
    {        
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $message = 'You have Successfully loggedin';
            return redirect()->route("home")
            ->withSuccess($message);
        }
        $message = 'Cannot identified your email or wrong email or password';
        return redirect('login')->withError($message);
    }

    public function postRegister(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'passwordConfirmation' => 'same:password',
        ]);
           
        $data = $request->all();
        $createUser = $this->create($data);
  
        $token = Str::random(64);
  
        // dd($token);
        UserVerify::create([
              'user_id' => $createUser->id, 
              'token' => $token
            ]);
  
        Mail::send('emails.verificationEmail', ['token' => $token], function($message) use($request){
              $message->to($request->email);
              $message->subject('APP Email Verification');
          });
         
        return redirect()->route("home")->withSuccess('Great! You have Successfully loggedin');
    }

    public function create(array $data)
    {
    //   return User::create([
    //     'name' => $data['name'],
    //     'email' => $data['email'],
    //     'password' => Hash::make($data['password'])
    //   ]);
        $user = new User();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        $user->save();
        return $user;
    }

    public function logout() {
        Session::flush();
        Auth::logout();
   
        return Redirect('login');
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function verifyAccount($token)
    {
        $verifyUser = UserVerify::where('token', $token)->first();
   
        $message = 'Sorry your email cannot be identified.';
   
        if(!is_null($verifyUser) ){
            $user = $verifyUser->user;
               
            if(!$user->is_email_verified) {
                $verifyUser->user->is_email_verified = 1;
                $verifyUser->user->save();
                $message = "Your e-mail is verified. You can now login.";
            } else {
                $message = "Your e-mail is already verified. You can now login.";
            }
        }
   
      return redirect()->route('login')->with('message', $message);
    }
}
