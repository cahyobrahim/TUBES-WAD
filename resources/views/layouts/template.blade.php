<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title></title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dongle:wght@400;700&display=swap" rel="stylesheet">

  <!-- Font  Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

  <style>
    body {
      font-family: 'Dongle', sans-serif;
    }
    h2 {
      margin-top: 2em;
      font-size:3em;
    }
    nav {
      font-size:2em;
    }
    footer {
      padding:5%;
      font-size:2em;
    }
    .card-img-top {
      height:20rem;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="/"><i class="fas fa-mountain"></i>CahMountain</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="/products">Products</a>
          </li>
          <?php
            if(isset($data["status"]) && $data["status"] == "logged_in"){
           ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-users"></i>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="/profile">Profile</a></li>
              <li><a class="dropdown-item" href="/bookings">Bookings</a></li>
              <li><a class="dropdown-item" href="/orders">Orders</a></li>
              <li><a class="dropdown-item" href="/logout">Log Out</a></li>
            </ul>
          </li>
        </ul>
          <?php
        } else {
           ?>
           <li class="nav-item">
             <a class="btn btn-secondary" href="/login">Login</a>
           </li>


        <?php
          }
         ?>
      </div>
    </div>
  </nav>

  <div class="">
      @yield('content')
  </div>

  <div class="container">
    <footer class="text-center">
      <a class="mx-3" target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
      <a class="mx-3" target="_blank" href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
      <a class="mx-3" target="_blank" href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
    </footer>
  </div>
</body>

</html>
