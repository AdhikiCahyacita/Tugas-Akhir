<html lang="en">
  <head>
    <title>Login Admin</title>
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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

      .form-signin {
        max-width: 330px;
        padding: 15px;
        margin: 0 auto;
        background-color: #f8f9fa;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      }

      .form-signin .form-floating {
        margin-bottom: 10px;
      }

      .form-signin .btn-primary {
        margin-top: 10px;
      }

      body {
        background-image: url("/images/background.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        height: 100vh;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="/css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
  @if(session()->has('success'))
  <div class="alert alert-info alert-dismissible fade show" role="alert">
      {{session('success')}}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
  </div>
  @endif

  @if(session()->has('loginError'))
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
      {{session('loginError')}}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
  </div>
  @endif
  
<main class="form-signin">
  <form action="/login" method="POST">
    @csrf
    <img class="mb-4" src="/images/morgans.jpg" alt="" width="230" height="230">
    <h1 class="h3 mb-3 fw-normal">Silahkan Masuk</h1>

    <div class="form-floating">
      <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email address" value="{{ old('email') }}" autofocus>
      <label for="floatingInput">Email Address</label>
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
    <p class="mt-3">Don't have an account yet? <a href="/register" style="color: blue;">Register</a></p>
    <p class="mt-5 mb-3 text-muted">&copy; Adhiki Cahyacita Eknanda</p>
  </form>
</main>


    
  </body>
</html>
