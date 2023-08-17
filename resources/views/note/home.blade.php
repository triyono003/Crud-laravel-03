

@extends('layouts.app')

@section('content')

<div class="card mt-5">
  <div class="card-body">
    
   
<form action="{{route('create')}}"method="post">
  @csrf
<div class="input-group mb-3">
  <input type="text" name="note" class="form-control @error('note') is-invalid @enderror" placeholder="i need a coffee" aria-label="" aria-describedby="basic-addon2">
  
  <button type="submit" class="input-group-text" id="basic-addon2">save</button>
</div>
   @foreach($errors->all() as $error)
   <div class="alert alert-danger">
     {{ $error }}
   </div>
   @endforeach
</form>  

<ul class="list-group mt-2">
  <li class="list-group-item active" aria-current="true">all list item</li>
@foreach($notes as $index => $data)
  <li class="list-group-item d-flex justify-content-between align-items-center">
    {{ $index+1 }}. {{ $data->note }}

<div class="d-flex ">
  <a href="/note/{{ $data->id }}/edit"class="text-white no-underline btn btn-secondary me-2">edit</a>
<form action="{{ route('destroy', $data->id) }}"method="post">
  @csrf
  @method('delete')
  <button type="submit"class="btn btn-danger">delete</button>
</form>
</div>    
 
  </li>
@endforeach
</ul>
  </div>
</div>
 
@endsection