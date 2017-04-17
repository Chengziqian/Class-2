<?php

namespace App\Http\Controllers\UserCenter;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserCenterController extends Controller
{
    public function index(){
        return view('page.usercenter.index');
    }
}
