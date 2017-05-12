<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class SigninController extends Controller
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
        $this->middleware('guest', ['except' => 'logout']);
    }
    public function index(){
        return view('page.auth.signin',['info' => $info=1]);
    }
    public function signin(Request $request){
        if(Auth::attempt([
            'stu_code' => $request->stu_code,
            'password' => $request->password])){
                return redirect()->route('home');
            }
        else {
            return view('page.auth.signin', ['info' => $info=0, 'stu_code' => $request->stu_code]);
        }
    }
}
