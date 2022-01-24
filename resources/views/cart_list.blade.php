@extends('layouts.template')
@section('content')

<div class="container text-center mt-5" >
  <div class="row">

    <?php
    foreach ($booking as $x) {
      ?>

    <div class="col-lg-4">
      <div class="card" style="width: 18rem;">
        <img src= "img/upload/{{$x->image}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$x->nama}}</h5>
          <p class="card-text">Rp.{{$x->price}}</p>
          <a href="#" class="btn btn-danger">Delete</a>
        </div>
      </div>
    </div>

    <?php 
    }
    ?>

  </div>
</div>
<div class="container text-center mt-5">
  <button type="submit" class="btn btn-success" name="button">Book</button>
</div>

@endsection('content')