@extends('layouts.app', ['title' => __('Editar especialidad')])

@section('content')

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
                <div class="card card-profile shadow">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 order-lg-2">
                            <div class="card-profile-image">
                                <a href="#">
                                    <img src="{{ asset('img/theme/team-4-800x800.jpg') }}" class="rounded-circle">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">

                    </div>

                    <div class="card-body pt-0 pt-md-4">
                        <div class="row">
                        <div class="col">
                            <img src="{{ asset('img//proyecto/especialidad.jpg') }}"  width="300" height="250">
                        </div>                                    
        
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xl-8 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <h3 class="mb-0">{{ __('Especialidad') }}</h3>
                        </div>
                    </div>
                    <div class="card-body">
					{!!Form::model($especialidad,['method'=>'PATCH', 'files'=>true, 'route'=>['especialidad.update',$especialidad->id]])!!}
					{{Form::token()}}
                            <h6 class="heading-small text-muted mb-4">{{ __('Información de la especialidad') }}</h6>
                            
                            @if (session('status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif


                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Nombre') }}</label>
                                    <input type="text" name="name" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}"  value="{{ $especialidad->nombre }}"  required autofocus>

                                </div>
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="description">{{ __('Descripción') }}</label>          
                                    <input type="text" name="description" id="description" class="form-control form-control-alternative{{ $errors->has('description') ? ' is-invalid' : '' }}"  value="{{ $especialidad->descripcion }}"  required>

                                </div>

                                <div class="form-row">

                                <div class="col-md-6 mb-6">
                                    <label for="name">&nbsp;</label>
                                    <button type="submit" class="btn btn-outline-primary btn-sm form-control">Guardar</button>
                                </div>

                                </div>

                            </div>
                        {!!Form::close()!!}

                        <hr class="my-4" />

                    </div>
                </div>
            </div>
        </div>
        
        @include('layouts.footers.auth')
    </div>
@endsection
