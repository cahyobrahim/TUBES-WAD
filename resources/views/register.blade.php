<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dongle:wght@400;700&display=swap" rel="stylesheet">

    <style>
      body {
        text-align:center;
        font-family: 'Dongle', sans-serif;
        /* overflow:hidden; */
      }
      h2 {
        margin-top: 2em;
        font-size:3em;
      }
      form {
        padding: 10%;
        font-size:2em;
      }
      </style>
  </head>
  <body>
    <div class="w-100" style="height:100vh;">
      <div class="row" style="height:100vh;">
        <div class="col-6" style="background-image:url(img/register.jfif);background-size:cover;background-position:center">

        </div>
        <div class="col-6">
          <h2>Register</h2>
          <form class="" action="{{route('register.post')}}" method="post">
            @csrf
            <div class="mb-2">
              <label for="email_register" class="form-label">Email</label>
              <input type="email" class="form-control" id="email_register" name="email" placeholder="">
            </div>
            <div class="mb-2">
              <label for="password_register" class="form-label">Password</label>
              <input type="password" class="form-control" id="password_register" name="password" value="">
            </div>
            <div class="mb-2">
              <label for="no_hp_register" class="form-label">No Handphone</label>
              <input type="text" class="form-control" id="no_hp_register" name="no_hp" value="">
            </div>
            <div class="mb-2">
              <label for="alamat_register" class="form-label">Alamat</label>
              <input type="text" class="form-control" id="alamat_register" name="alamat" value="">
            </div>
            <div class="mb-2">
              <input type="submit" class="btn btn-primary" name="register" value="Register">
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Already have an account?</label>
              <a href="/login"><button type="button" class="btn btn-success" name="button">Login</button></a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
