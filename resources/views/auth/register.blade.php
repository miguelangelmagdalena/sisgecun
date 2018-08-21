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
    @if (config('voyager.multilingual.rtl'))
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.css">
        <link rel="stylesheet" href="{{ voyager_asset('css/rtl.css') }}">
    @endif
    <style>
        body {
            background-image:url('{{ Voyager::image( Voyager::setting("admin.bg_image"), voyager_asset("images/bg.jpg") ) }}');
            background-color: {{ Voyager::setting("admin.bg_color", "#FFFFFF" ) }};
        }
        body.login .login-sidebar {
            border-top:5px solid {{ config('voyager.primary_color','#22A7F0') }};
            overflow: auto;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        @media (max-width: 767px) {
            body.login .login-sidebar {
                border-top:0px !important;
                border-left:5px solid {{ config('voyager.primary_color','#22A7F0') }};
                height: 0px;
            }
            body.login .login-container2 {
                align-self: end;
            }

        }
        body.login .form-group-default.focused{
            border-color:{{ config('voyager.primary_color','#22A7F0') }};
        }
        .login-button, .bar:before, .bar:after{
            background:{{ config('voyager.primary_color','#22A7F0') }};
        }


    </style>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
</head>
<body class="login">
<div class="container-fluid">
    <div class="row">
        <div class="faded-bg animated"></div>
        <div class="hidden-xs col-sm-7 col-md-8">
            <div class="clearfix">
                <div class="col-sm-12 col-md-10 col-md-offset-2">
                    <div class="logo-title-container">
                        <?php $admin_logo_img = Voyager::setting('admin.icon_image', ''); ?>
                        @if($admin_logo_img == '')
                        <img class="img-responsive pull-left flip logo hidden-xs animated fadeIn" src="{{ voyager_asset('images/logo-icon-light.png') }}" alt="Logo Icon">
                        @else
                        <img class="img-responsive pull-left flip logo hidden-xs animated fadeIn" src="{{ Voyager::image($admin_logo_img) }}" alt="Logo Icon">
                        @endif
                        <div class="copy animated fadeIn">
                            <h1>{{ Voyager::setting('admin.title', 'Voyager') }}</h1>
                            <p>{{ Voyager::setting('admin.description', __('voyager::login.welcome')) }}</p>
                        </div>
                    </div> <!-- .logo-title-container -->
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-5 col-md-4 login-sidebar">

            <div class="login-container2">

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
                            <label for="id_estado" class="">{{ __('estado') }}</label>

                            <div class="controls">
                                <select id="id_estado" class="dynamic-address form-control{{ $errors->has('id_estado') ? ' is-invalid' : '' }}" name="id_estado" value="{{ old('id_estado') }}" data-dependent="id_municipio" > 
                                    <option value="">Selecciona un Estado</option>
                                    @foreach($state as $st)
                                    <option value="{{ $st->id }}">{{ $st->estado }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group form-group-default">
                            <label for="id_municipio" class="">{{ __('municipio') }}</label>

                            <div class="controls">
                                <select id="id_municipio" class="dynamic-address form-control{{ $errors->has('id_municipio') ? ' is-invalid' : '' }}" name="id_municipio" value="{{ old('id_municipio') }}" data-dependent="id_parroquia" > 
                                    <option value="">Selecciona municipio</option>

                                </select>
                            </div>
                        </div>

                        <div class="form-group form-group-default">
                            <label for="id_parroquia" class="">{{ __('parroquia') }}</label>

                            <div class="controls">
                                <select id="id_parroquia" class="form-control{{ $errors->has('id_parroquia') ? ' is-invalid' : '' }}" name="id_parroquia" value="{{ old('id_parroquia') }}" > 
                                    <option value="">Selecciona parroquia</option>

                                </select>
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

                        <div class="form-group">
                            <div class="col-sm-6 btn-padd">
                                <button type="button" class="btn btn-danger login-button red" onclick="window.location='/'">
                                    Cancelar
                                </button>
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="col-sm-6 btn-padd">

                                <button type="submit" class="btn btn-block login-button">
                                    <span class="signingin hidden"><span class="voyager-refresh"></span> {{ __('Registrarse') }}</span>
                                    <span class="signin">{{ __('Registrarse') }}</span>
                                </button>
                            </div>
                        </div>

                    </form>

              <div style="clear:both"></div>

              @if(!$errors->isEmpty())
              <div class="alert alert-red">
                <ul class="list-unstyled">
                    @foreach($errors->all() as $err)
                    <li>{{ $err }}</li>
                    @endforeach
                </ul>
              </div>
              @endif

            </div> <!-- .login-container -->

        </div> <!-- .login-sidebar -->
    </div> <!-- .row -->
</div> <!-- .container-fluid -->
<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/custom_register.js')}}"></script>
</body>
</html>
