@extends('layouts.template')
@section('content')

<div class="container mt-5 mb-5 text-center">
  <h2>Profile Edit</h2>
</div>
<div class="container">
  <form class="" action="/profile_edit/{{$user->id}}" method="post">
    @csrf
    <div class="mb-2">
      <label for="email_login" class="form-label">Email</label>
      <input type="email" class="form-control" id="email_register" placeholder="" name="email" value="{{$user->email}}">
    </div>
    <div class="mb-2">
      <label for="password_login" class="form-label">Password</label>
      <input type="password" class="form-control" id="password_register" name="" value="">
    </div>
    <div class="mb-2">
      <label for="no_hp_register" class="form-label">No Handphone</label>
      <input type="text" class="form-control" id="no_hp_register" name="no_hp" value="{{$user->no_hp}}">
    </div>
    <div class="mb-2">
      <label for="alamat_register" class="form-label">Alamat</label>
      <input type="text" class="form-control" id="alamat_register" name="alamat" value="{{$user->alamat}}">
    </div>
    <div class="mb-2 text-center">
      <input type="submit" class="btn btn-primary" name="save" value="save">
    </div>
  </form>
</div>

@endsection('content')
