<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in Dashboard</title>
    <link rel="stylesheet" href="dashboard/assets/css/bootstrap.css">
    
    <link rel="shortcut icon" href="dashboard/assets/images/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="dashboard/assets/css/app.css">
</head>

<body>
    <div id="auth">
        
<div class="container">
    <div class="row">
        <div class="col-md-5 col-sm-12 mx-auto">
            <div class="card pt-4">
                <div class="card-body">
                    <div class="text-center mb-5">
                        <img src="dashboard/assets/images/favicon.svg" height="48" class='mb-4'>
                        <h3>Sign In</h3>
                        <p>Please sign in to Dashboard</p>
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group position-relative has-icon-left">
                            <p class="text-danger">
                               
                                @error('password')
                                {{$message}}
                                @enderror
                                @error('email')
                                {{$message}}
                                @enderror
                            </p>
                            <label for="username">Username</label>
                            <div class="position-relative">
                                <input type="text" class="form-control  @error('email') is-invalid @enderror"  name="email" >
                                <div class="form-control-icon">
                                    <i data-feather="user"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left">
                            <div class="clearfix">
                                <label for="password">Password</label>
                                <a href="auth-forgot-password.html" class='float-right'>
                                    <small>Forgot password?</small>
                                </a>
                            </div>
                            <div class="position-relative">
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password">
                                <div class="form-control-icon">
                                    <i data-feather="lock"></i>
                                </div>
                            </div>
                        </div>

                        <div class='form-check clearfix my-4'>
                            <div class="checkbox float-left">
                                <input type="checkbox" id="checkbox1" class='form-check-input' >
                                <label for="checkbox1">Remember me</label>
                            </div>
                            <!-- <div class="float-right">
                                <a href="auth-register.html">Don't have an account?</a>
                            </div> -->
                        </div>
                        <div class="clearfix">
                            <button class="btn btn-primary float-right">Submit</button>
                        </div>
                    </form>
                    <!-- <div class="divider">
                        <div class="divider-text">OR</div> -->
                    <!-- </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <button class="btn btn-block mb-2 btn-primary"><i data-feather="facebook"></i> Facebook</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-block mb-2 btn-secondary"><i data-feather="github"></i> Github</button>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    </div>
    <script src="dashboard/assets/js/feather-icons/feather.min.js"></script>
    <script src="dashboard/assets/js/app.js"></script>
    
    <script src="dashboard/assets/js/main.js"></script>
</body>

</html>
