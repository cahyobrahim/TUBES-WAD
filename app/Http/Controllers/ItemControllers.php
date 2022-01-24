<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Booking;

class ItemControllers extends Controller
{
    //
    public function productsIndex(Request $x){
      $data = $x->session()->all();
      return view("products",compact("data"));
    }

    public function productsCatIndex(Request $x){
      $data = $x->session()->all();

      $item = Item::where("category", $x->query("cat"))->get(); 
      return view("products_cat",compact("data","item"));
    }

    public function rentOutIndex(Request $x){
      $data = $x->session()->all();
      return view("rent_out",compact("data"));
    }

    public function rentOutForm(Request $x){
      $data = $x->session()->all();
    
      $photo = time() . '.' . $x->image->extension();
      $x->image->move(public_path('img/upload'), $photo);
      $item = new Item();
      $item->nama = $x->nama;
      $item->desc = $x->desc;
      $item->category = $x->category;
      $item->price = $x->price;
      $item->image = $photo;
      $item->peminjam = $data["0"]["id"];
      $item->namaPeminjam = $data["0"]["email"];

      $item->save();

      return redirect("/products");
    }

    public function bookItem(Request $x, $id){
      $data = $x->session()->all();
      $item = Item::find($id);

      $booking = new Booking();
      $booking->user_id = $data["0"]["id"];
      $booking->nama = $item->nama;
      $booking->price = $item->price;
      $booking->image = $item->image;
      $booking->peminjam = $item->peminjam;
      $booking->namaPeminjam = $item->namaPeminjam;
      $booking->status = 0;
      $booking->save();

      return redirect("/bookings");
    }

//     public function cartIndex(Request $x){
//       $data = $x->session()->all();
//       $booking = Booking::where("user_id",$x->session()->get("0")["id"])->get();

//         if (empty($booking->toArray())) {
//             return view("cart_empty", compact("data", "booking"));
//         } else {
//             return view("cart_list", compact("data", "booking"));
//         }
// }

    public function bookingsIndex(Request $x){
      $data = $x->session()->all();
      $booking = Booking::where("user_id",$x->session()->get("0")["id"])->get();

      return view("bookings",compact("data", "booking"));
    }

    public function ordersIndex(Request $x){
      $data = $x->session()->all();
      $booking = Booking::where("peminjam",$x->session()->get("0")["id"])->get();

      return view("orders",compact("data", "booking"));
    }

    public function confirmBooking(Request $x, $id){
      $data = $x->session()->all();
      $booking = Booking::find($id);

      $booking->status = 1;

      $booking->save();

      return redirect("/orders");
        }


}