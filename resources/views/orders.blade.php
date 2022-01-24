@extends('layouts.template')
@section('content')

<div class="container">
<h2 class="text-center" >Orders</h2>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Item</th>
            <th scope="col">Price</th>
            <th scope="col">Status</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach($booking as $x){
        ?>
        <tr>
            <th scope="row">{{$x->id}}</th>
            <td>{{$x->nama}}</td>
            <td>Rp.{{$x->price}}</td>
           <?php
           if($x->status == 0){
            ?>
            <form action="/confirm/{{$x->id}}" method="post">
            @csrf
            <td><button class="btn btn-primary" type="submit" name="button">Confirm</button></td>
            </form>
            <?php
            }else{
            ?>
            <td><button class="btn btn-success" disabled type="submit" name="button">Confirmed</button></td>
            <?php
            }
            ?>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>
</div>

@endsection('content')
