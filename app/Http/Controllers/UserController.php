<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
  /*
  gua comment karena udah di handle sama searchController 
   public function show()
   {
     return view('users.home',[
       'title' => 'home users',
       'users' => User::orderBy('id','desc')->get(),
     ]);
   }
   */
   public function profile(User $user)
   {
     return view('/profile',[
       'title' => 'profile',
       'user' => $user,
       ]);
   }
  
}
