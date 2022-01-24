@extends('layouts.template')
@section('content')

<div class="container mt-5 mb-5 text-center">
  <h2>Rent Out Item</h2>
</div>
<div class="container">
  <form class="" action="/rent_out" method="post" enctype="multipart/form-data">
  @csrf
    <div class="mb-2">
      <label for="" class="form-label">Name</label>
      <input type="text" class="form-control" name="nama" id="" placeholder="">
    </div>
    <div class="mb-2">
      <label for="" class="form-label">Description</label>
      <input type="text" class="form-control" name="desc" id="" placeholder="">
    </div>
    <div class="mb-2">
      <label for="" class="form-label">Category</label>
      <select class="form-select" name="category" aria-label="Default select example">
        <option selected>Choose the category</option>
        <option value="tenda">Tents</option>
        <option value="sepatu">Shoes</option>
        <option value="sleeping_bag">Sleeping Bags</option>
        <option value="tas">Bags</option>
      </select>
    </div>
    <div class="mb-2">
      <label for="" class="form-label">Price</label>
      <div class="input-group">
        <span class="input-group-text">Rp.</span>
        <input type="number" class="form-control" name="price" id="" placeholder="">
      </div>
    </div>
    <div class="mb-2">
      <label for="" class="form-label">Image</label>
      <input type="file" class="form-control" name="image" id="" placeholder="">
    </div>
    <div class="mb-2 text-center">
      <input type="submit" class="btn btn-primary" name="" value="Rent">
    </div>
  </form>
</div>

@endsection('content')
