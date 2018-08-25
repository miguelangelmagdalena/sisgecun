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

                    <p>{{ __('voyager::login.signin_below') }}</p>

                    <form action="{{ route('voyager.login') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group form-group-default" id="emailGroup">
                            <label>{{ __('validation.attributes.email') }}</label>
                            <div class="controls">
                                <input type="text" name="email" id="email" value="{{ old('email') }}" placeholder="{{ __('validation.attributes.email') }}" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group form-group-default" id="passwordGroup">
                            <label>{{ __('voyager::generic.password') }}</label>
                            <div class="controls">
                                <input type="password" name="password" placeholder="{{ __('voyager::generic.password') }}" class="form-control" required>
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

                        <button type="submit" class="btn btn-block login-button">
                            <span class="signingin hidden"><span class="voyager-refresh"></span> {{ __('voyager::login.loggingin') }}...</span>
                            <span class="signin">{{ __('voyager::generic.login') }}</span>
                        </button>

                        
                    </form>


                    <div style="clear:both"></div>




                    

                    <div class="new-user">
                        <a onclick="window.location='/register'"> 
                        <p>No tienes cuenta, Registrate</p>
                        </a>
                    </div>

                    </div> <!-- .login-container -->

                </div> <!-- .login-sidebar -->
			</div>
		</div>
	</div>

<script>
    var btn = document.querySelector('button[type="submit"]');
    var form = document.forms[0];
    var email = document.querySelector('[name="email"]');
    var password = document.querySelector('[name="password"]');
    btn.addEventListener('click', function(ev){
        if (form.checkValidity()) {
            btn.querySelector('.signingin').className = 'signingin';
            btn.querySelector('.signin').className = 'signin hidden';
        } else {
            ev.preventDefault();
        }
    });
    email.focus();
    document.getElementById('emailGroup').classList.add("focused");

    // Focus events for email and password fields
    email.addEventListener('focusin', function(e){
        document.getElementById('emailGroup').classList.add("focused");
    });
    email.addEventListener('focusout', function(e){
       document.getElementById('emailGroup').classList.remove("focused");
    });

    password.addEventListener('focusin', function(e){
        document.getElementById('passwordGroup').classList.add("focused");
    });
    password.addEventListener('focusout', function(e){
       document.getElementById('passwordGroup').classList.remove("focused");
    });

</script>
</body>
</html>
