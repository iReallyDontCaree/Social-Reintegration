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
                                    <h4 class="mt-0 mb-1"><b>Free Register for Reconnect Community</b></h4>
                                </div>
                            </div>                            
                            
                            
                            <form method="POST" class="form-horizontal my-4" action="{{ route('register') }}">
                                @csrf
    
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-account-outline font-16"></i></span>
                                        </div>
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        
                                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>                                    
                                </div>

                                <div class="form-group">
                                    <label for="username">Email Address</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon2"><i class="mdi mdi-email-outline font-16"></i></span>
                                        </div>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                            <span class="input-group-text" id="basic-addon3"><i class="mdi mdi-lock-outline font-16"></i></span>
                                        </div>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>                                
                                </div>

                                <div class="form-group">
                                    <label for="userpassword">Confirm Password</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon4"><i class="mdi mdi-key font-16"></i></span>
                                        </div>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>                                
                                </div>

                                
    
                                <div class="form-group row mt-4">
                                    <div class="col-sm-12">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customControlInline">
                                            <label class="custom-control-label" for="customControlInline">
                                                <span class="font-13 text-muted mb-0">By registering you agree to the Reconnect <a href="#">Terms of Use</a></span>
                                            </label>
                                        </div>
                                    </div>                                    
                                </div>
    
                                <div class="form-group mb-0 row">
                                    <div class="col-12 mt-2">
                                        <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Register <i class="fas fa-sign-in-alt ml-1"></i></button>
                                    </div>
                                </div>                            
                            </form>

                        </div>
                        
                        <div class="m-3 text-center bg-light p-3 text-primary">
                            <h5 class="">Already have an account ? </h5>
                            <a href="{{ route('login') }}" class="btn btn-primary btn-round waves-effect waves-light px-3">Log in</a>                
                        </div>                        
                    </div>
                </div>
            </div>
            <div class="col-lg-9 p-0 d-flex justify-content-center">
                <div class="accountbg d-flex align-items-center"> 
                    {{-- <div class="account-title text-white text-center">
                        <img src="assets/images/logo-sm.png" alt="" class="thumb-sm">
                        <h4 class="mt-3">Welcome To Reconnect</h4>
                        <div class="border w-25 mx-auto border-primary"></div>
                        <h1 class="">Let's Get Started</h1>
                    <p class="font-14 mt-3">Already have an account ? <a href="{{ route('login') }}" class="text-primary">Logedfein</a></p>
                       
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