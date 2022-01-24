@extends('layouts.template')
@section('content')

<div class="container" style="min-height:90vh;">
  <h2 class="text-center mt-5">About Us</h2>
  <div class="container">
    <div class="row mt-5">
      <div class="col-lg-6">
        <img class="w-100" src="{{asset('img/home.jpg')}}" alt="" style="height:20rem;">
      </div>
      <div class="col-lg-6" style="padding:5%;">
        <p style="font-size:23px;">
        Cah Mountain adalah suatu website yang dibuat dengan tujuan untuk menyediakan jasa peminjaman beberapa alat untuk mendaki gunung, seperti tenda, sepatu, sleeping bags, dan bags. Cah Mountain mengusahakan agar para pendaki mudah untuk mendapatkan alat keperluan mendaki dengan mudah dan harga terjangkau.
        </p>
      </div>
      <div class="col-lg-6 mt-5" style="padding:5%;">
        <p style="font-size:23px;">
        Selain harga yang terjangkau, pastinya kita memperhatikan kualitas yang baik. Website ini juga dibuat dengan user friendly agar para customer mudah untuk mengaplikasikan dan mendapatkan apa yang mereka butuhkan.
        </p>
      </div>
      <div class="col-lg-6 mt-5">
        <img class="w-100" src="{{asset('img/home_1.jpg')}}" alt="" style="height:20rem;">
      </div>
    </div>
  </div>
</div>

@endsection('content')
