<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Home(){
        return view('pages.backend.home');
    }
}
