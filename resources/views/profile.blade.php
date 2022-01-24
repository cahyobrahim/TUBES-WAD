@extends('layouts.template')
@section('content')

<div class="container mt-5 mb-5 text-center">
  <h2>Profile</h2>
</div>
<div class="container">
  <form class="" action="" method="post">
    @csrf
  
    <div class="mb-2">
      <label for="email_login" class="form-label">Email</label>
      <input type="email" class="form-control" id="email_register" value="{{$user->email}}">
    </div>
    <div class="mb-2">
      <label for="password_login" class="form-label">Password</label>
      <input type="password" class="form-control" id="password_register" name="" value="">
    </div>
    <div class="mb-2">
      <label for="no_hp_register" class="form-label">No Handphone</label>
      <input type="text" class="form-control" id="no_hp_register" name="" value="{{$user->no_hp}}">
    </div>
    <div class="mb-2">
      <label for="alamat_register" class="form-label">Alamat</label>
      <input type="text" class="form-control" id="alamat_register" name="" value="{{$user->alamat}}">
    </div>
    
    <div class="mb-2 text-center">
      <a href="/profile_edit/{{$user->id}}" class="btn btn-warning" name="edit">Edit</a>
    </div>
  </form>
</div>

@endsection('content')
