<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Login</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dongle:wght@400;700&display=swap" rel="stylesheet">

  <style>
    body {
      background-image: url('img/login.jfif');
      background-size: cover;
      background-position:center;
      background-repeat:no-repeat;
      height: 100vh;
      text-align:center;
      font-family: 'Dongle', sans-serif;

    }
    h2 {
      margin-top: 2em;
      font-size:3em;
    }
    form {
      padding: 5% 30%;
      font-size:2em;
    }
    label {

    }
  </style>
</head>

<body>
  <h2>Login</h2>
  <form class="" action="{{route('login.post')}}" method="post">
    @csrf
    <div class="mb-3">
      <label for="email_login" class="form-label">Email</label>
      <input type="email" class="form-control" id="email_login" name="email" placeholder="">
    </div>
    <div class="mb-3">
      <label for="password_login" class="form-label">Password</label>
      <input type="password" class="form-control" id="password_login" name="password" value="">
    </div>
    <div class="mb-3">
      <input type="submit" class="btn btn-primary" name="login" value="Login">
    </div>
    <div class="mb-3">
      <label for="register" class="form-label">Don't have an account?</label>
      <a href="/register"><button type="button" class="btn btn-success" name="button">Register</button></a>
    </div>
  </form>

</body>

</html>
