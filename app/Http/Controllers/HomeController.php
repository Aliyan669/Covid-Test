<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Home(){
        return view('pages.frontend.home');
    }
    public function Symptoms(){
        return view('pages.frontend.symptoms');
    }
    public function Prevention(){
        return view('pages.frontend.prevention');
    }
    public function About(){
        return view('pages.frontend.about');
    }
    public function Blog(){
        return view('pages.frontend.blog');
    }
    public function Contact(){
        return view('pages.frontend.contact');
    }
    
}
