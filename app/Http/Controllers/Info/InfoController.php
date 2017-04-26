<?php

namespace App\Http\Controllers\Info;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InfoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index($info){
        return view('page.info.info', ['info' => $info]);
    }
}
