<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserControllers extends Controller
{
    //
    public function index(Request $x){
      $data = $x->session()->all();
      return view("home",compact("data"));
    }

    public function registerIndex(Request $x){
      if($x->session()->get("status") == "logged_in"){
        return redirect("/");
    } else {
        return view('register');
    }
    }

    public function postRegister(Request $x){
      $user = new User();

      $user->email = $x->email;
      $user->password = md5($x->password);
      $user->no_hp = $x->no_hp;
      $user->alamat = $x->alamat;

      $user->save();

      return redirect('/login');
    }

    public function loginIndex(Request $x){
      if($x->session()->get("status") == "logged_in"){
        return redirect("/");
    } else {
        $data = $x->session()->all();
        return view('login',compact('data'));
    }
    }

    public function postLogin(Request $x){
      $user = User::where("email", $x->email)->where("password",md5($x->password))->get();
      $user = $user->toArray();

      if (count($user) > 0){
          session($user);
          $x->session()->put("status","logged_in");
          return redirect("/");

      } else {
          $x->session()->flash("message","Incorrect Username or Password");
          $data = $x->session()->all();
          return view("/login",compact("data"));
      }
    } 

    public function logout(Request $x)
    {
      $x->session()->flush();
      return redirect('/login');

    }

    public function profileIndex(Request $x){
      $data = $x->session()->all();

      $user = User::find($data["0"]["id"]);
      return view("profile",compact("data", "user"));
    }

    public function editProfileIndex(Request $x, $id)
    {
        $data = $x->session()->all();
        $user = User::find($id);

        return view("profile_edit", compact("data", 'user'));
    }

    public function editProfileForm(Request $x, $id)
    {
        $data = $x->session()->all();
        $user = User::find($id);

        $user->email = $x->email;
        $user->no_hp = $x->no_hp;
        $user->alamat = $x->alamat;

        $user->save();

        return redirect("/profile");
    }
}
