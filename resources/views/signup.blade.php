
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Sign Up | EventUNJ</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
<link href="{{asset('front/css/bootstrap.min.css')}}" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="css/login.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin flex-center">
  <form>
    <img class="mb-4" src="img/logounj.png" alt="" width="100" height="100">
    <h1 class="h3 mb-3 fw-normal"><b>Pendaftaran</b></h1>

    <div class="form-floating">
        <input type="text" class="form-control" id="floatingInput" autocomplete="off" placeholder="Nama Lengkap">
        <label for="floatingInput">Nama Lengkap</label>
    </div>
    <div class="form-floating">
        <input type="numbertext " class="form-control" id="floatingInput" autocomplete="off" placeholder="Nomor Telfon">
        <label for="floatingInput">Nomor Telefon</label>
    </div>
    <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" autocomplete="off" placeholder="name@example.com">
        <label for="floatingInput">Email</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" autocomplete="off" placeholder="Username">
      <label for="floatingInput">Username</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <button class="w-50 btn btn-lg btn-primary" type="submit">Sign Up</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
  </form>
</main>


    
  </body>
</html>
