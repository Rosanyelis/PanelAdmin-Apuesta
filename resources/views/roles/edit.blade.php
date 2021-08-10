@extends('layouts.app')
@section('stylesheet')

@endsection
@section('content')
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Roles</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active">Configuraciones
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ url('/roles') }}"> Roles</a>
                                    </li>
                                    <li class="breadcrumb-item active">Editar Rol
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Editar Rol</h4>
                            </div>
                            <div class="card-body">
                                <form class="form form-horizontal needs-validation" novalidate method="POST" action="{{ url('/roles/'.$data->id.'/actualizar-rol') }}">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-3 col-form-label">
                                                    <label for="name">Nombre de Rol</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input id="name" type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $data->name }}"  placeholder="administrador" required/>
                                                    @if ($errors->has('name'))
                                                        <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-3 col-form-label">
                                                    <label for="name">Descripción de Rol</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input id="name" type="text" name="description" class="form-control @error('description') is-invalid @enderror" value="{{ $data->description }}"  placeholder="acceso a todos los módulos" required/>
                                                    @if ($errors->has('description'))
                                                        <div class="invalid-feedback">{{ $errors->first('description') }}</div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary mr-1">Guardar</button>
                                            <a href="{{ url('/roles') }}" class="btn btn-outline-secondary">Regresar</a>
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
    
@endsection