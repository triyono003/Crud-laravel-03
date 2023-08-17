<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/style.css') }} ">
  <title>Laravel | {{ $title }}</title>
</head>
<body>
 
<div class="card mt-5">
  <div class="card-body">
   @foreach($errors->all() as $error)
   <div class="alert alert-danger">
     {{ $error }}
   </div>
   @endforeach
<form action="{{ route('update',$data->id) }}"method="post">
  @csrf
  @method('put')
<div class="input-group mb-3">
  <input type="text" name="note" class="form-control @error('note') is-invalid @enderror" placeholder="i need a coffee" aria-label="" aria-describedby="basic-addon2"value="{{$data->note}}">
  <button type="submit" class="input-group-text" id="basic-addon2">save</button>
</div>
  @error('note')
    <span class="invalid-feedback">lah</span>
  @enderror
</form>  
<script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>