

@extends('layouts.app')

@section('content')

 <div class="card mt-5">
   <div class="card-body">
       halaman profile | {{ $user->name }}
     </div>
 </div>
 
@endsection