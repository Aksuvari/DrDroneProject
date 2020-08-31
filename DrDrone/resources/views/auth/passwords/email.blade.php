<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Lexa - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Themesbrand" name="author" />
    <link rel="shortcut icon" href="{{asset('Frontend/assets/images/favicon.ico')}}">

    <link href="{{asset('Frontend/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('Frontend/assets/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('Frontend/assets/css/style.css')}}" rel="stylesheet" type="text/css">
</head>

<body>

<div class="wrapper-page">

    <div class="card">
        <div class="card-body">


            <h3 class="text-center m-0">
                <a href="index.html" class="logo logo-admin"><img src="{{asset('Frontend/assets/images/logo.png')}}" height="30" alt="logo"></a>
            </h3>

            <div class="p-3">
                <h4 class="text-muted font-18 mb-3 text-center">Şifrenizi mi unuttunuz ?</h4>
                <div class="alert alert-info" role="alert">
                    Şifreniz sıfırlanacaktır.
                </div>

                <form class="form-horizontal m-t-30" action="{{ route('password.email') }}">
                    @csrf
                    <div class="form-group">
                        <label for="useremail">{{ __('E-Posta Adresiniz') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="form-group row m-t-20">
                        <div class="col-12 text-right">
                            <button class="btn btn-primary w-md waves-effect waves-light" type="submit"> {{ __('Şifre sıfırlama') }}</button>
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>

    <div class="m-t-40 text-center">
        <p><a href="{{route('login')}}" class=" text-primary"> Giriş Sayfası </a> </p>
        © 2020  <span class="d-none d-sm-inline-block"> - DEMAPTECH <i class="mdi mdi-heart text-danger"></i> DrDrone</span>
    </div>

</div>

<!-- jQuery  -->
<script src="{{asset('Frontend/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('Frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('Frontend/assets/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('Frontend/assets/js/waves.min.js')}}"></script>

<script src="{{asset('Plugins/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

<!-- App js -->
<script src="{{asset('Frontend/assets/js/app.js')}}"></script>

</body>
</html>














