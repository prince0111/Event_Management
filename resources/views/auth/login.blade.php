<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Event Management System</title>

    <link rel="shortcut icon" href="{{ asset('backend/assets/img/favicon.png') }}">

    <link rel="stylesheet" href="{{ asset('backend/assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('backend/assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/plugins/fontawesome/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}">
</head>

<body>

    <div class="main-wrapper login-body">
        <div class="login-wrapper">
            <div class="container">
                <img class="img-fluid logo-dark mb-2" src="{{ asset('backend/assets/img/logo.png') }}" alt="Logo">
                <div class="loginbox">
                    <div class="login-right">
                        <div class="login-right-wrap">
                            <h1>Login</h1>
                            <p class="account-subtitle">Access to our dashboard</p>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label class="form-control-label">Email Address</label>
                                    <input type="email" id="email" name="email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Password</label>
                                    <div class="pass-group">
                                        <input type="password" id="password" name="password" class="form-control pass-input">
                                        <span class="fas fa-eye toggle-password"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="cb1">
                                                <label class="custom-control-label" for="cb1">Remember me</label>
                                            </div>
                                        </div>
                                        <div class="col-6 text-end">
                                            <a class="forgot-link" href="forgot-password.html">Forgot Password ?</a>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-lg btn-block btn-primary w-100" type="submit">Login</button>
                                <div class="login-or">
                                    <span class="or-line"></span>
                                    <span class="span-or">or</span>
                                </div>

                                <div class="social-login mb-3">
                                    <span>Login with</span>
                                    <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a><a
                                        href="#" class="google"><i class="fab fa-google"></i></a>
                                </div>

                                <div class="text-center dont-have">Don't have an account yet? <a
                                        href="#">Register</a></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('backend/assets/js/jquery-3.6.0.min.js') }}"></script>

    <script src="{{ asset('backend/assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('backend/assets/js/feather.min.js') }}"></script>

    <script src="{{ asset('backend/assets/js/script.js') }}"></script>
</body>

</html>