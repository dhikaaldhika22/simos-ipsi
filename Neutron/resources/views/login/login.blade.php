<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    
    <title>SIMOS | Login</title>
    <link rel="shortcut icon" href="img/logo-head.png">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css-bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    
    <!-- Font Link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">

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
    
  </head>


  <body class="text-center">
    

<main class="form-signin">
  
  <form action="/loginprocess" method="post">
  @csrf
   <img class="mb-4" src="/img/logo.png" alt="" width="110.56" height="158.16">
   <h1 class="sistem-informasi">Sistem Informasi Manajemen Outlet Shop </h1>
   <h1 class="h3 mb-3 fw-normal text-center">Selamat Datang!</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
  </form>

  <p class="belum">Belum punya akun? <a class = regist href="{{ 'regist' }}">Daftar</a></p> 
  
</main>
  </body>
</html>
