<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function home()
   {
     return view('home',['title' => 'Home']);
   }
   
   public function profile()
   {
     return view('profile',['title' => 'Profile']);
   }
   
   public function about()
   {
     return view('about',['title' => 'About']);
   }
   
   public function dashboard()
   {
     return view('dashboard',['title' => 'Dashboard']);
   }
   
}
