<html lang="en">
  <head>
    <title>Register</title>
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    
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
        border-radius: 20px;
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
      .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }
    </style>
    <!-- Custom styles for this template -->
    <link href="/css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    @if(session()->has('success'))
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        {{session('success')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if(session()->has('loginError'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{session('loginError')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
  
    <main class="form-signin">
      <form action="/register" method="POST">
        @csrf
        <img class="mb-4" src="/images/morgans.jpg" alt="" width="230" height="230">
        <h1 class="h3 mb-3 fw-normal">Silahkan Daftar</h1>
    
        <div class="form-floating">
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email address" value="{{ old('email') }}" autofocus>
          <label for="floatingInput">Email Address</label>
          @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
       </div>
       <div class="form-floating">
       <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" placeholder="Username" value="{{ old('username') }}" autofocus>
       <label for="floatingUsername">Username</label>
       @error('username')
       <div class="invalid-feedback">{{ $message }}</div>
       @enderror
      </div>


        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Password</label>
          @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-floating">
  <input type="tel" name="telf_number" class="form-control @error('telf_number') is-invalid @enderror" placeholder="telf_number" value="{{ old('telf_number') }}" pattern="[0-9]+" title="Please enter numbers only" required>
  <label for="floatingPhone">Phone Number</label>
  @error('telf_number')
    <div class="invalid-feedback">{{ $message }}</div>
  @enderror
</div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
        <p class="mt-3">Already have an account? <a href="/login" style="color: blue;">Login</a>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="/css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <!-- your HTML content here -->
  </body>
</html>
