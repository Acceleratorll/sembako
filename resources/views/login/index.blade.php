<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- custom CSS -->
        <link rel="stylesheet" href="style.css">
        <!-- Function JS -->
        <script type = "text/javascript" src="function.js"></script>  

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <style>
            @media (min-width: 992px){
                .bodycard {
                    margin-left: 30%;
                    margin-right: 30%
                }
            }
            @media (max-width: 991px){
                .bodycard { 
                    margin-left: 0%;
                    margin-right: 0%;
                }
            }
        </style>
        <!-- <div class="row">
            <div class="col"></div>
            <div class="col">
                <div class="container py-5 h-100">
                    <img src="./image/logo.png" style="margin-left:auto;margin-right:auto;width:300px; display:block" alt="logo" class="center">
                    <h3 style="text-align:center">Login</h3>
                    <div class="form-group">
                        <label for="Durasi">Username:</label>
                        <input type="text" class="form-control" id="durasi_lembur" required>
                    </div>
                    <div class="form-group">
                        <label for="Durasi">Password:</label>
                        <input type="password" class="form-control" id="durasi_lembur" required>
                    </div>
                    <button type="button" class="btn btn-primary btn-lg btn-block" style="margin-bottom:10px">Login</button>
                    <div class="row" style="text-align:center; justify-content:center">
                    <p >Belum punya akun? </p>
                    <a href="register.php" style="margin-left:3px"class="link-primary">Register</a>
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div> -->
        
        <div class="container">
            <div class="col-sm-12 align self-center border border-dark"  style="background-color: #F4F4F4">
                <div class="iq-card mt-5 bodycard">
                    <div class="iq-card-body">
                        <div class="item mt-3">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- <img src="./image/logo.png" style="width:20%" class="img-fluid mb-4" alt="logo"> -->
                                    <img src="./image/logo1.png" style="margin-left:auto;margin-right:auto;width:150px; display:block" alt="logo" class="center">
                                </div>
                                <div class="col-md-12" style="text-align:center">
                                    <h1>BPR Dinar Pusaka</h1>
                                </div>
                            </div>                        
                        </div>
                        <hr>
                        <div>
                            <h3 class="mb-0">Login</h3>

                            <!-- Alert -->
                            @if(session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif

                            @if(session()->has('loginError'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session('loginError') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif

                            <form action="{{ url('/login') }}" method="POST" class="mt-4 form-login">
                                @csrf
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control textField @error('email') is-invalid @enderror" id="email" name="email" autofocus required value="{{ old('email') }}" placeholder="Enter email">
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <!-- <a href="#" class="float-right">Forgot Password</a> -->
                                    <input type="password" class="form-control textField @error('password') is-invalid @enderror" id="password" name="password" placeholder="Enter Password" required>
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm text-right">
                                        <input type="submit" value="Login" class="btn btn-primary">
                                    </div>
                                </div>
                                <!-- <div class="d inline-block w-100">
                                    <div class="custom-control custom-checkbox d-inline-block mt-2 pt-1">
                                        <input type="checkbox" class="custom-control-input" id="remember" name="remember">
                                        <label class="custom-control-label" for="remember">Remember Me</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary float-right login">Login</button>
                                </div> -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>                      
    </body>
</html>
