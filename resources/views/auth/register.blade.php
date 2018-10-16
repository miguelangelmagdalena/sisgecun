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


                <p>Registrarse</p>

                <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}" id="register">
                        @csrf

                        <div class="form-group form-group-default">
                            <label for="name" class="">{{ __('validation.attributes.name') }}</label>

                            <div class="controls">
                                <input id="name" type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" placeholder="{{ __('validation.attributes.name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

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
             
                        <div class="form-group form-group-default">
                            <label for="password" class="">{{ __('validation.attributes.password') }}</label>

                            <div class="controls">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="{{ __('validation.attributes.password') }}" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group form-group-default">
                            <label for="password-confirm" class="">{{ __('validation.attributes.password_confirmation') }}</label>

                            <div class="controls">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="{{ __('validation.attributes.password_confirmation') }}" required>
                            </div>
                        </div>
                        
                        @if(!$errors->isEmpty())
                        <div class="alert alert-red">
                            <ul class="list-unstyled">
                                @foreach($errors->all() as $err)
                                <li>{{ $err }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif



                        <div class="form-group ">
                            <div class="col-sm-6 btn-padd">

                                <button type="button" class="btn btn-danger login-button red" onclick="window.location='/'">
                                    
                                    <span class="signingin hidden"><span class="voyager-refresh"></span> Regresando</span>
                                    <span class="signin">Cancelar</span>
                                </button>

                            </div>
                            <div class="col-sm-6 btn-padd">

                                <button type="submit" class="btn btn-block login-button">
                                    <span class="signingin hidden"><span class="voyager-refresh"></span> {{ __('Registrarse') }}</span>
                                    <span class="signin">{{ __('Registrarse') }}</span>
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
