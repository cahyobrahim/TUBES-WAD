@extends('layouts.template')
@section('content')

<div class="container mt-5" style="min-height:90vh;">
  <div class="text-center w-100" style="margin: 50px 0px;">
    <a href="/rent_out"><button type="submit" class="btn btn-danger" name="button">Rent Out Your Equipments!</button></a>
  </div>
  <div class="row">
    <div class="col-3">
      <div class="card" role="button" style="width: 18rem;">
        <a href="/products_cat?cat=tenda">
        <img src="img/tenda.jpg" class="card-img-top" alt="...">
        </a>
        <div class="card-body">
          <h2 class="card-text text-center">Tents</h2>
        </div>
      </div>
    </div>
    <div class="col-3">
      <div class="card" role="button" style="width: 18rem;">
        <a href="/products_cat?cat=sepatu">
        <img src="img/sepatu.jpg" class="card-img-top" alt="...">
        </a>
        <div class="card-body">
          <h2 class="card-text text-center">Shoes</h2>
        </div>
      </div>
    </div>
    <div class="col-3">
      <div class="card" role="button" style="width: 18rem;">
        <a href="/products_cat?cat=sleeping_bag">
        <img src="img/sleeping_bag.jpg" class="card-img-top" alt="...">
        </a>
        <div class="card-body">
          <h2 class="card-text text-center">Sleeping Bags</h2>
        </div>
      </div>
    </div>
    <div class="col-3">
      <div class="card"role="button" style="width: 18rem;">
        <a href="/products_cat?cat=tas">
        <img src="img/tas.jpeg" class="card-img-top" alt="...">
        </a>
        <div class="card-body">
          <h2 class="card-text text-center">Bags</h2>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection('content')
