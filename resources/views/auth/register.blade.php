@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="id_estado" class="col-md-4 col-form-label text-md-right">{{ __('Estado') }}</label>

                            <div class="col-md-6">
                                <select id="id_estado" class="dynamic-address form-control{{ $errors->has('id_estado') ? ' is-invalid' : '' }}" name="id_estado" value="{{ old('id_estado') }}" data-dependent="id_municipio" autofocus> 
                                    <option value="">Selecciona un Estado</option>
                                    @foreach($state as $st)
                                    <option value="{{ $st->id }}">{{ $st->estado }}</option>
                                    @endforeach
                                </select>
                                <!--<input id="id_estado" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="id_estado" value="{{ old('id_estado') }}" autofocus>

                                @if ($errors->has('id_estado'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('id_estado') }}</strong>
                                    </span>
                                @endif -->
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="id_municipio" class="col-md-4 col-form-label text-md-right">{{ __('Municipio') }}</label>

                            <div class="col-md-6">
                                <select id="id_municipio" class="dynamic-address form-control{{ $errors->has('id_municipio') ? ' is-invalid' : '' }}" name="id_municipio" value="{{ old('id_municipio') }}" data-dependent="id_parroquia" autofocus> 
                                    <option value="">Selecciona municipio</option>

                                </select>
                                
                                <!--<input id="id_municipio" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="id_municipio" value="{{ old('id_estado') }}" autofocus>

                                @if ($errors->has('id_municipio'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('id_municipio') }}</strong>
                                    </span>
                                @endif-->
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="id_parroquia" class="col-md-4 col-form-label text-md-right">{{ __('Parroquia') }}</label>

                            <div class="col-md-6">
                                <select id="id_parroquia" class="form-control{{ $errors->has('id_parroquia') ? ' is-invalid' : '' }}" name="id_parroquia" value="{{ old('id_parroquia') }}" autofocus> 
                                    <option value="">Selecciona parroquia</option>

                                </select>
                                
                                <!--<input id="id_parroquia" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="id_parroquia" value="{{ old('id_estado') }}" autofocus>

                                @if ($errors->has('id_parroquia'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('id_parroquia') }}</strong>
                                    </span>
                                @endif-->
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/app2.js')}}"></script>
@show