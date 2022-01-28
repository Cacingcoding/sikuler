<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIKULER</title>
    <!-- favicon ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/logo.png') }}">
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>
    <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
        <div class="container">
            <div class="card login-card">
                <div class="text-center py-5">
                    <h1 class="font-weight-bold border-bottom pb-3">PILIH EKSTRAKULIKULER</h1>
                </div>
                <div class="row d-flex justify-content-between pb-5">
                    <div class="col-md-4">
                        <a href="{{ url('login_pramuka') }}" class="text-dark text-decoration-none">
                            <div class="text-center">
                                <img src="{{ asset('img/PRAMUKA.png') }}" alt="" height="200">
                                <h3 class="font-weight-bold">PRAMUKA</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ url('login_pmr') }}" class="text-dark text-decoration-none">
                            <div class="text-center">
                                <img src="{{ asset('img/PMR.png') }}" alt="" height="200">
                                <h3 class="font-weight-bold">PMR</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ url('login_rohis') }}" class="text-dark text-decoration-none">
                            <div class="text-center">
                                <img src="{{ asset('img/ROHIS.png') }}" alt="" height="200">
                                <h3 class="font-weight-bold">ROHIS</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- <div class="card login-card">
        <img src="assets/images/login.jpg" alt="login" class="login-card-img">
        <div class="card-body">
          <h2 class="login-card-title">Login</h2>
          <p class="login-card-description">Sign in to your account to continue.</p>
          <form action="#!">
            <div class="form-group">
              <label for="email" class="sr-only">Email</label>
              <input type="email" name="email" id="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="password" class="sr-only">Password</label>
              <input type="password" name="password" id="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-prompt-wrapper">
              <div class="custom-control custom-checkbox login-card-check-box">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember me</label>
              </div>
              <a href="#!" class="text-reset">Forgot password?</a>
            </div>
            <input name="login" id="login" class="btn btn-block login-btn mb-4" type="button" value="Login">
          </form>
          <p class="login-card-footer-text">Don't have an account? <a href="#!" class="text-reset">Register here</a></p>
        </div>
      </div> -->
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>
