

@extends('layouts.app')

@section('content')

 <div class="card mt-5">

<form action="{{route('search')}}"method="get">
  @csrf
<div class="input-group mb-3">
  <input type="text" name="search" class="form-control @error('search') is-invalid @enderror" placeholder="search someone" aria-label="" aria-describedby="basic-addon2">
  
  <button type="submit" class="input-group-text" id="basic-addon2">search</button>
</div>
   @foreach($errors->all() as $error)
   <div class="alert alert-danger">
     {{ $error }}
   </div>
   @endforeach
</form>  
   <div class="card-body">
       <ul class="list-group mt-2">
  <li class="list-group-item active" aria-current="true">all list users</li>
      @foreach($results as $index=> $result)
  <li class="list-group-item">
    {{ $index+1 }}. 
    <a href="/users/{{$result->username}}/profile">{{ $result->name }}</a>
  </li>
       @endforeach
         
</ul>
  </div>
     </div>
 
@endsection