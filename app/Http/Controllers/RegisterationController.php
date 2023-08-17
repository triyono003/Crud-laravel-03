<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class RegisterationController extends Controller
{
   public function home()
   {
     return view('/users/home',[
       'title' => 'home users',
       'users' => User::orderBy('id','desc')->get(),
     ]);
   }
  
}
