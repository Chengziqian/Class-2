<?php

namespace App\Http\Controllers\Doc;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DocController extends Controller
{
    public function index(){
        return view('page.doc.index');
    }
}
