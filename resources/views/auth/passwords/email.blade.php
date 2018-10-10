<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" @if (config('voyager.multilingual.rtl')) dir="rtl" @endif>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="none" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="admin login">
    <title>Admin - {{ Voyager::setting("admin.title") }}</title>
    <link rel="stylesheet" href="{{ voyager_asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom_styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style_login.1.css') }}">
    @if (config('voyager.multilingual.rtl'))
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.css">
        <link rel="stylesheet" href="{{ voyager_asset('css/rtl.css') }}">
    @endif
    <style>
       .login100-form-title{
            background-image:url('{{ Voyager::image( Voyager::setting("admin.bg_image"), voyager_asset("images/bg.jpg") ) }}');
            background-size: cover;
        }
        
        .container-login100 {
            background: {{ Voyager::setting("admin.bg_login") }};
        }
        .focus-input100::before {
            background: {{ config('voyager.primary_color','#22A7F0') }};
        }
        a:hover {
            color: {{ config('voyager.primary_color','#22A7F0') }};
        }

        body.login .form-group-default.focused{
            border-color:{{ config('voyager.primary_color','#22A7F0') }};
        }
        .login-button, .bar:before, .bar:after{
            background:{{ config('voyager.primary_color','#22A7F0') }};
        }
        .new-user{
            border: 1px solid {{ config('voyager.primary_color','#22A7F0') }};
        }


    </style>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
</head>
<body class="login">
    <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100">

                    <img class="banner-home" src="{{ Voyager::image( Voyager::setting("admin.bg_image"), voyager_asset("images/bg.jpg") ) }}" alt="Smiley face">

                        <div class="login-container">


                            <p>{{ __('passwords.Reset_Password') }}</p>

                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <form method="POST" action="{{ route('password.email') }}" aria-label="{{ __('Reset Password') }}">
                                @csrf

                                <div class="form-group form-group-default" id="emailGroup">
                                    <label for="email" class="">{{ __('validation.attributes.email') }}</label>

                                    <div class="controls">
                                        <input id="email" type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="{{ __('validation.attributes.email') }}" required>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('passwords.Send_Link') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
              

                            <div style="clear:both"></div>




                        </div> <!-- .login-container -->

                    </div> <!-- .login-sidebar -->
                </div>
            </div>
    </div>
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/custom_register.js')}}"></script>
</body>
</html>


