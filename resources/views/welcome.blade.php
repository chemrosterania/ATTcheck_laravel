
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Document</title>
    <style>
        body{
            background-color: #485A7D;
        }
        </style>
</head>
<body>
@extends('layouts.app')

@section('content')

    <section class="vh-100" style="background-color: #AEB9F6;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-5">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <!-- <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div> -->
            <div class="lb col d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form method="POST" action="{{ route('user.login.submit') }}">
                @csrf
                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fa fa-check fa-2x me-3" style="color: #ff6219; font-size: 70px;"></i>
                    <span class="h1 fw-bold mb-0">ATTCheck</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in your account</h5>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="text" name="username" class="form-control form-control-lg" required/>
                    <label class="form-label" >Username</label>
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="password" name="password" class="form-control form-control-lg" />
                    <label class="form-label">Password</label>
                  </div>

                  <div class="pt-1 mb-4">
                    <button data-mdb-button-init data-mdb-ripple-init class="btn btn-dark btn-lg btn-block" type="submit">Login</button>
                  </div>
                  <div>
                    <a href="{{ route('admin.login') }}" >
                    <button  class="btn btn-secondary" type="button">Admin</button>
                    </a>
                    <a href="{{ route('facilitator.login') }}" > 
                    <button  class="btn btn-primary" type="button">Facilitator</button></a>
                    </div>
                  @endsection
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>


  
 

    


