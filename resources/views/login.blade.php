<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title></title>

  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="{{ asset('css/admin.css') }}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9 mt-5">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Bienvenido!</h1>
                  </div>

                  @error('message')
                  <span class="text-danger" role="alert">
                      <p>{{ $message }}</p>
                  </span>
                  @enderror

                  <form method="POST" action="{{ route('login') }}" class="user">
                    @csrf
                    <div class="form-group">
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control form-control-user" placeholder="Enter Email Address..." @error('email') is-invalid @enderror>
                    @error('email')
                    <span class="text-danger" role="alert">
                        <p>{{ $message }}</p>
                    </span>
                    @enderror
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" placeholder="Password" @error('password') is-invalid @enderror>
                      @error('password')
                        <span class="text-danger" role="alert">
                            <p>{{ $message }}</p>
                        </span>
                      @enderror
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
                    <hr>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<script src="{{ asset('js/admin.js') }}"></script>
</body>
</html>