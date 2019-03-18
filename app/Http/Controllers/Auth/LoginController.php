<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
    public function redirectToProvider($service)
    {

        return Socialite::driver($service)->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback($service)
    {
        $user = Socialite::driver($service)->user();
        $userAuth = $this->findOrCreateUser($user);
        Auth::login($userAuth);
        return redirect('/');
    }

    public function findOrCreateUser($user)
    {
        $authUser = User::where('email',$user->getEmail())->first();
        if ($authUser) {
            return $authUser;
        }
        return User::create([
            'email' => $user->getEmail(),
            'password' => $user->token,
            'name' =>$user->getName(),
            'avatar' =>$user->getAvatar()
        ]);
    }

    /**
     * Logout function.
     *
     */
    public function logout() {
        Auth::logout();
        return redirect('/login');
    }
}
