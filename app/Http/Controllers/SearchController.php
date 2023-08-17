<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class SearchController extends Controller
{
   public function search(Request $request)
   {
     $searchTerm = $request->input('search');
     $results = User::where('name','like','%' . $searchTerm . '%')->get();
     
     return view('users.home',['results' => $results,
     'title' => 'home',
     ]);
   }
}
