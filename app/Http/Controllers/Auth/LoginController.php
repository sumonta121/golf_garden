<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
use Auth;
use Illuminate\Http\Request;
use App\Notifications\VerifyRegistration;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function login(Request $request)
    {
      $this->validate($request, [
          'email' => 'required|email',
          'password' => 'required',
      ]);

      //Find user by this email
      $user = User::where('email', $request->email)->first();
      if ($user->status == 1){
        //login this user
        if (Auth::guard('web')->attempt(['email' => $request->email, 'password' =>$request->password], $request->remember)) {
          // loh in now...
          return redirect()->intended(route('index'));
        } else {

          session()->flash('error', 'invalid Login');
          return redirect()->route('login');

        }
      } else {
        //send him a token
        if (!is_null($user)) {
          $user->notify(new VerifyRegistration ($user));
          session()->flash('success', 'A New confirmation Email has send to you. Please Check and confirm your email');
      		return redirect('login');
        } else {
          session()->flash('error', 'Please login first ||');
          return redirect()->route('login');
        }
      }

    }
}
