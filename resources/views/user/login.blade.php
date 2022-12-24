<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Starter</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
    
        <div class="container">
    
            <!-- Outer Row -->
            <div class="row justify-content-center">
    
                <div class="col-xl-10 col-lg-12 col-md-9">
    
                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg-6 d-none d-lg-block  bg-success">
                                    {{-- <img src="https://i.pinimg.com/564x/62/f9/48/62f9480a76166b978185552c36f14606.jpg"
                                        alt="" width="455px" height="420px"> --}}
                                </div>
                                <div class="col-lg-6">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Welcome Back, Please Login!</h1>
                                        </div>
                                        <form  action="/login" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <input type="email" name="email"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    placeholder="email" autofocus  value="{{ old('email') }}">
                                                @error('email')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                                                    id="exampleInputPassword" placeholder="password">
                                                    @error('password')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            @if (session()->has('loginError'))
                                            <div class="invalid-feedback">
                                                {{ session('loginError') }}
                                            </div>
                                            @endif
                                            <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                                            <div class="text-center">
                                                <small class="text-center">Not registered? <a href="/register">Register
                                                        Now!</a></small>
                                                <p class="mt-3 mb-3 text-muted">&copy; 2022</p>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                </div>
    
            </div>
    
        </div>
    
      
    
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
