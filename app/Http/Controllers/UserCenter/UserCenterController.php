<?php

namespace App\Http\Controllers\UserCenter;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserCenterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('page.usercenter.index');
    }

    public function cgpassword(Request $request){
        if(Auth::attempt([
            'stu_code' => Auth::user()->stu_code,
            'password' => $request->old_password,
        ])){
            $user=\App\Models\User::where('stu_code',Auth::user()->stu_code)->first();
            $user->password = Hash::make($request->new_password);
            $user->save();
            $info=1;
            return redirect()->route('info',$info);
        }
        else {
            $info=-1;
            return redirect()->route('info',$info);
        }
    }

    public function cgemail(Request $request){
        if(Auth::attempt([
            'stu_code' => Auth::user()->stu_code,
            'password' => $request->password,
        ])){
            $user=Auth::user();
            $user->email = $request->new_email;
            $user->save();
            $info=2;
            return redirect()->route('info',$info);
        }
        else {
            $info=-2;
            return redirect()->route('info',$info);
        }
    }
}
