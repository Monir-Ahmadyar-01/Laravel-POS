<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>{{ config('app.name') }} - صفحه ورود</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="POS login" name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('theme/assets/images/favicon.ico')}}">
    <!-- App css -->
    <link href="{{asset('theme/assets/css/bootstrap-rtl.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('theme/assets/css/icons-rtl.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('theme/assets/css/app-rtl.min.css')}}" rel="stylesheet" type="text/css" />
    <style>
        input
        {
            text-align:right;
        }
    </style>

</head>



<body class="authentication-bg">

   
    <div class="account-pages mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5 ">
                    <div class="text-center mb-4">
                        <a href="/" style="font-size:28px;">
                             <span><img src="{{asset('theme/assets/images/logo-dark.png')}}" alt="" height="22"></span>
                        </a>
                      
                    </div>
                    <div class="card">

                        <div class="card-body p-4">

                            <div class="text-center mb-4">
                                <h4 class="text-uppercase mt-0">ورود</h4>
                            </div>

                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="emailaddress">ایمیل آدرس</label>
                                    <input class="form-control @error('email') is-invalid @enderror()" type="text"
                                        name="email" id="emailaddress" required="" value="{{old('email')}}"
                                        placeholder="ایمیل خود را وارد نماید">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="password">رمز عبور</label>
                                    <input class="form-control @error('password') is-invalid @enderror()"
                                        type="password" name="password" id="password" placeholder="*******">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <br>
                               

                                <div class="form-group mb-0 text-center">
                                    <button class="btn btn-primary btn-block" type="submit">ورود</button>
                                </div>

                            </form>

                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->
                    
                    <!-- end row -->

                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->


    <!-- Vendor js -->
    <script src="{{asset('theme/assets/js/vendor.min.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('theme/assets/js/app.min.js')}}"></script>

</body>

</html>