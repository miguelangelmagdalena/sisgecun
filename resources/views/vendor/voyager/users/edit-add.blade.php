@extends('voyager::master')

@section('page_title', __('voyager::generic.'.(isset($dataTypeContent->id) ? 'edit' : 'add')).' '.$dataType->display_name_singular)

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@stop

@section('page_header')
    <h1 class="page-title">
        <i class="{{ $dataType->icon }}"></i>
        {{ __('voyager::generic.'.(isset($dataTypeContent->id) ? 'edit' : 'add')).' '.$dataType->display_name_singular }}
    </h1>
@stop

@section('content')
    <div class="page-content container-fluid">
        <form class="form-edit-add" role="form"
              action="{{ (isset($dataTypeContent->id)) ? route('voyager.'.$dataType->slug.'.update', $dataTypeContent->id) : route('voyager.'.$dataType->slug.'.store') }}"
              method="POST" enctype="multipart/form-data" autocomplete="off">
            <!-- PUT Method if we are editing -->
            @if(isset($dataTypeContent->id))
                {{ method_field("PUT") }}
            @endif

            <!-- CSRF TOKEN -->
            {{ csrf_field() }}

            <div class="row">

                <div class="col-md-8">

                    <!-- ### User ### -->
                    <div class="panel panel-bordered panel-info">
                        
                        <div class="panel-heading">
                                <h3 class="panel-title"><i class="icon wb-image"></i>Perfil</h3>
                                <div class="panel-actions">
                                    <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                                </div>
                        </div>

                        <div class="panel-body">
                            
                        @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                
                                <!-- Adding / Editing -->
                                @php
                                    $dataTypeRows = $dataType->{(!is_null($dataTypeContent->getKey()) ? 'editRows' : 'addRows' )};
                                @endphp
                                
                                @foreach($dataTypeRows as $row)
                                    <!-- GET THE DISPLAY OPTIONS -->
                                    @php
                                        $options = json_decode($row->details);
                                        $display_options = isset($options->display) ? $options->display : NULL;
                                    @endphp

                                    @if ($options && isset($options->legend) && isset($options->legend->text))
                                        <legend class="text-{{$options->legend->align or 'center'}}" style="background-color: {{$options->legend->bgcolor or '#f0f0f0'}};padding: 5px;">{{$options->legend->text}}</legend>
                                    @endif

                                    @if ($options && isset($options->formfields_custom))
                                        @include('voyager::formfields.custom.' . $options->formfields_custom)
                                    @else
                                        @if(!isset($display_options->contenedor) && $row->display_name != 'rol' && $row->display_name != 'roles')
                                            <div class="form-group @if($row->type == 'hidden') hidden @endif col-md-{{ $display_options->width or 12 }} @if(isset($display_options->class)) {{ $display_options->class }} @endif " @if(isset($display_options->id)){{ "id=$display_options->id" }}@endif>
                                                {{ $row->slugify }}
                                                <label for="name">{{ $row->display_name }}</label>
                                                @include('voyager::multilingual.input-hidden-bread-edit-add')
                                                @if($row->type == 'relationship')
                                                    @include('voyager::formfields.relationship')
                                                @else
                                                    {!! app('voyager')->formField($row, $dataType, $dataTypeContent) !!}
                                                @endif

                                                @foreach (app('voyager')->afterFormFields($row, $dataType, $dataTypeContent) as $after)
                                                    {!! $after->handle($row, $dataType, $dataTypeContent) !!}
                                                @endforeach
                                            </div>
                                        @endif
                                    @endif
                                @endforeach

                            @can('editRoles', $dataTypeContent)
                                <div class="form-group">
                                    <label for="default_role">{{ __('voyager::profile.role_default') }}</label>
                                    @php
                                        $dataTypeRows = $dataType->{(isset($dataTypeContent->id) ? 'editRows' : 'addRows' )};

                                        $row     = $dataTypeRows->where('field', 'user_belongsto_role_relationship')->first();
                                        $options = json_decode($row->details);
                                    @endphp
                                    @include('voyager::formfields.relationship')
                                </div>
                                <div class="form-group">
                                    <label for="additional_roles">{{ __('voyager::profile.roles_additional') }}</label>
                                    @php
                                        $row     = $dataTypeRows->where('field', 'user_belongstomany_role_relationship')->first();
                                        $options = json_decode($row->details);
                                    @endphp
                                    @include('voyager::formfields.relationship')
                                </div>


                            @endcan
                        </div> <!-- panel-body -->
                    </div>
                </div>

                <div class="col-md-4">

                    <!-- ### User Other fields ### -->
                    <div class="panel panel panel-bordered panel-warning">
                        <div class="panel-heading">
                                <h3 class="panel-title"><i class="icon wb-image"></i>Perfil - Datos adicionales</h3>
                                <div class="panel-actions">
                                    <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                                </div>
                        </div>
                        <div class="panel-body">
                            @foreach($dataTypeRows as $row)
                                <!-- GET THE DISPLAY OPTIONS -->
                                @php
                                    $options = json_decode($row->details);
                                    $display_options = isset($options->display) ? $options->display : NULL;
                                @endphp

                                @if ($options && isset($options->legend) && isset($options->legend->text))
                                    <legend class="text-{{$options->legend->align or 'center'}}" style="background-color: {{$options->legend->bgcolor or '#f0f0f0'}};padding: 5px;">{{$options->legend->text}}</legend>
                                @endif

                                @if ($options && isset($options->formfields_custom))
                                    @include('voyager::formfields.custom.' . $options->formfields_custom)
                                @else
                                    @if(isset($display_options->contenedor) && ($display_options->contenedor == 2))
                                        <div class="form-group @if($row->type == 'hidden') hidden @endif col-md-{{ $display_options->width or 12 }} @if(isset($display_options->class)) {{ $display_options->class }} @endif " @if(isset($display_options->id)){{ "id=$display_options->id" }}@endif>
                                            {{ $row->slugify }}
                                            <label for="name">{{ $row->display_name }}</label>
                                            @include('voyager::multilingual.input-hidden-bread-edit-add')
                                            @if($row->type == 'relationship')
                                                @include('voyager::formfields.relationship')
                                            @else
                                                {!! app('voyager')->formField($row, $dataType, $dataTypeContent) !!}
                                            @endif

                                            @foreach (app('voyager')->afterFormFields($row, $dataType, $dataTypeContent) as $after)
                                                {!! $after->handle($row, $dataType, $dataTypeContent) !!}
                                            @endforeach
                                        </div>
                                    @endif
                                @endif
                            @endforeach

                        </div>
                    </div>

                </div>
            </div>

            <button type="submit" class="btn btn-primary pull-right save">
                {{ __('voyager::generic.save') }}
            </button>
        </form>

        <iframe id="form_target" name="form_target" style="display:none"></iframe>
        <form id="my_form" action="{{ route('voyager.upload') }}" target="form_target" method="post" enctype="multipart/form-data" style="width:0px;height:0;overflow:hidden">
            {{ csrf_field() }}
            <input name="image" id="upload_file" type="file" onchange="$('#my_form').submit();this.value='';">
            <input type="hidden" name="type_slug" id="type_slug" value="{{ $dataType->slug }}">
        </form>
    </div>
@stop

@section('scripts')
<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/voyager/user_edit.js')}}"></script>
@show

@section('javascript')

    <script>
        $('document').ready(function () {
            $('.toggleswitch').bootstrapToggle();
        });
    </script>
@stop
