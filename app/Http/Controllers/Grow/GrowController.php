<?php

namespace App\Http\Controllers\Grow;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GrowController extends Controller
{
    public function index(){
        return view('page.grow.index');
    }
}
