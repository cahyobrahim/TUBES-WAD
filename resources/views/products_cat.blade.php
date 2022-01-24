@extends('layouts.template')
@section('content')


<div class="container text-center mt-5" >
  <div class="row">

    <?php
      foreach($item as $x){
    ?>
    <div class="col-lg-4">
      <form action="/book_item/{{$x->id}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card" style="width: 18rem;">
          <img src="img/upload/{{$x->image}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{$x->nama}}</h5>
            <p class="card-text">{{$x->desc}}</p>
            <p class="card-text">Rp.{{$x->price}}</p>
            <?php
            if($data["0"]["id"] != $x->peminjam){

            ?>
            <input type="submit" class="btn btn-primary" name="" value="Rent">
            <?php
            }
            ?>
          </div>
        </div>
      </form>
    </div>
    <?php
      }
    ?>
  </div>
</div>

@endsection('content')
