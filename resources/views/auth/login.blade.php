<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Reconnect</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A premium admin dashboard template by mannatthemes" name="description" />
        <meta content="Mannatthemes" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="account-body">

        <!-- Log In page -->
        <div class="row vh-100">
            <div class="col-lg-3  pr-0">
                <div class="card mb-0 shadow-none">
                    <div class="card-body">
                        
                        <div class="px-3">
                            <div class="media">
                                <a href="index.html" class="logo logo-admin"></a>
                                <div class="media-body ml-3 align-self-center">                                                                                                                       
                                    <h4 class="mt-0 mb-1">Login on Reconnect</h4>
                                </div>
                            </div>  
                            
                            <br>
                            
                            <form method="POST" class="form-horizontal my-4" action="{{ route('login') }}">
                                @csrf
    
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-account-outline font-16"></i></span>
                                        </div>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>                                    
                                </div>
    
                                <div class="form-group">
                                    <label for="userpassword">Password</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon2"><i class="mdi mdi-key font-16"></i></span>
                                        </div>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>                                
                                </div>
    
                                <div class="form-group row mt-4">
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-checkbox">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 text-right">
                                        <a href="pages-recoverpw-2.html" class="text-muted font-13"><i class="mdi mdi-lock"></i> Forgot your password?</a>                                    
                                    </div>

                                </div>
                                <div class="form-group mb-0 row">
                                    <div class="col-12 mt-2">
                                        <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Log In <i class="fas fa-sign-in-alt ml-1"></i>
                                        </button>
                                    </div>
                                </div> 
    
                                                          
                            </form>
                        </div>
                        <div class="account-social text-center">
                            <h6 class="my-2"><b>Or Login With</b></h6>
                            <ul class="list-inline mb-4">
                                <li class="list-inline-item">
                                    <a href="" class="">
                                        <i class="fab fa-facebook-f facebook"></i>
                                    </a>                                    
                                </li>
                                <li class="list-inline-item">
                                    <a href="" class="">
                                        <i class="fab fa-twitter twitter"></i>
                                    </a>                                    
                                </li>
                                <li class="list-inline-item">
                                    <a href="" class="">
                                        <i class="fab fa-google google"></i>
                                    </a>                                    
                                </li>
                            </ul>
                        </div>
                        <div class="m-3 text-center bg-light p-3 text-primary">
                            <h5 class="">Don't have an account ? </h5>
                            <a href="{{ route('register') }}" class="btn btn-primary btn-round waves-effect waves-light">Join Reconnect Community</a>                
                        </div>                        
                    </div>
                </div>
            </div>
            <div class="col-lg-9 p-0 d-flex justify-content-center">
                <div class="accountbg d-flex align-items-center"> 
                    {{-- <div class="account-title text-white text-center">
                        <img src="assets/images/reconnect11.png" width="200" height="80"> 
                        <h4 class="mt-3">Welcome To Reconnect</h4>
                        <div class="border w-25 mx-auto border-primary"></div>
                        <h1 class="">Let's Get Started</h1>
                        <p class="font-14 mt-3">Don't have an account ? <a href="" class="text-primary">Sign up</a></p>
                       
                    </div> --}}
                </div>
            </div>
        </div>
        <!-- End Log In page -->


        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/waves.min.js"></script>
        <script src="assets/js/jquery.slimscroll.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>
</html>