<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Note;

class ActionController extends Controller
{
   public function show()
   {
     return view('note.home',[
       'title' => 'Note',
       'notes' => Note::orderBy('id','desc')->get(),
       ]);
   }
   
   public function create(Request $request)
   {
      $request->validate([
         'note' => ['required','string','min:3'],
       ]);
      Note::create($request->all());
      return back();
   }
   
   public function edit($id)
   {
     return view('note.edit',[
       'title' => 'edit',
       'data' => Note::find($id),
       ]);
   }
   
   public function update(Request $request,$id)
   {
      $request->validate([
        'note' => ['required','string'],
       ]);
      Note::find($id)->update([
        'note' => $request->note,
       ]);
      return redirect('note/home');
   }
   
   public function destroy($id)
   {
     Note::find($id)->delete();
     return back();
   }
}
