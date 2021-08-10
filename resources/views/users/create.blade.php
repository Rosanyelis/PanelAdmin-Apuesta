@extends('layouts.app')
@section('stylesheet')
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/forms/select/select2.min.css') }}">
@endsection
@section('content')
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Usuarios</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Usuarios</li>
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
                                <h4 class="card-title">Crear Usuario</h4>
                            </div>
                            <div class="card-body">
                                <form class="form form-horizontal needs-validation" novalidate method="POST" action="{{ url('/usuarios/guardar-usuario') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <h4 class="mb-1">
                                                <i data-feather="user" class="font-medium-4 mr-25"></i>
                                                <span class="align-middle">Datos Personales</span>
                                            </h4>
                                            <hr>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-3 col-form-label">
                                                    <label for="firstname">Nombre</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input id="firstname" type="text" name="firstname" class="form-control @error('firstname') is-invalid @enderror" value="{{ old('firstname') }}"  placeholder="Jon" required/>
                                                    @if ($errors->has('firstname'))
                                                        <div class="invalid-feedback">{{ $errors->first('firstname') }}</div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-3 col-form-label">
                                                    <label for="lastname">Apellido</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input id="lastname" type="text" name="lastname" class="form-control @error('lastname') is-invalid @enderror" value="{{ old('lastname') }}"  placeholder="Doe" required/>
                                                    @if ($errors->has('lastname'))
                                                        <div class="invalid-feedback">{{ $errors->first('lastname') }}</div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-3 col-form-label">
                                                    <label for="dni">DNI o Documento de Identificación</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input id="dni" type="text" name="dni" class="form-control @error('dni') is-invalid @enderror" value="{{ old('dni') }}"  placeholder="123456789" required/>
                                                    @if ($errors->has('dni'))
                                                        <div class="invalid-feedback">{{ $errors->first('dni') }}</div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-3 col-form-label">
                                                    <label for="date_of_birth">Fecha de Nacimiento</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input id="date_of_birth" type="text" name="date_of_birth" class="form-control @error('date_of_birth') is-invalid @enderror" value="{{ old('date_of_birth') }}"  placeholder="01/04/1997" />
                                                    @if ($errors->has('date_of_birth'))
                                                        <div class="invalid-feedback">{{ $errors->first('date_of_birth') }}</div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-3 col-form-label">
                                                    <label for="phone">Teléfono</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input id="phone" type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}"  placeholder="+584148030000" />
                                                    @if ($errors->has('phone'))
                                                        <div class="invalid-feedback">{{ $errors->first('phone') }}</div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-3 col-form-label">
                                                    <label for="country_id">País</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <select name="country_id" class="select2 form-control" required>
                                                        <option >Seleccione el país</option>
                                                        @foreach ($countries as $item)
                                                            <option value="{{ $item->id }}" {{ old('country_id') == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    
                                                    @if ($errors->has('country_id'))
                                                        <div class="invalid-feedback">{{ $errors->first('country_id') }}</div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-2">
                                            <h4 class="mb-1">
                                                <i data-feather="user" class="font-medium-4 mr-25"></i>
                                                <span class="align-middle">Datos Usuario</span>
                                            </h4>
                                            <hr>
                                        </div>
                                        
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-3 col-form-label">
                                                    <label for="name">Nombre de Usuario</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input id="name" type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}"  placeholder="JonDoe-1" required/>
                                                    @if ($errors->has('name'))
                                                        <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-3 col-form-label">
                                                    <label for="email">Correo Electrónico</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input id="email" type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"  placeholder="example@example.com" required/>
                                                    @if ($errors->has('email'))
                                                        <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-3 col-form-label">
                                                    <label for="password">Contraseña</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input id="password" type="password" name="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}"  placeholder="********" required/>
                                                    @if ($errors->has('password'))
                                                        <div class="invalid-feedback">{{ $errors->first('password') }}</div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-3 col-form-label">
                                                    <label for="role_id">Rol</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <select name="role_id" id="role_id" class="form-control" required>
                                                        <option value="">Seleccione un rol</option>
                                                        @foreach ($roles as $item)
                                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    @if ($errors->has('role_id'))
                                                        <div class="invalid-feedback">{{ $errors->first('role_id') }}</div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 mt-2">
                                            <h4 class="mb-1">
                                                <i data-feather="user" class="font-medium-4 mr-25"></i>
                                                <span class="align-middle">Datos de Cuenta</span>
                                            </h4>
                                            <hr>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-3 col-form-label">
                                                    <label for="responsable">Responsable</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input id="responsable" type="text" name="responsable" class="form-control @error('responsable') is-invalid @enderror" value="{{ old('responsable') }}"  placeholder="Jon Doe"/>
                                                    @if ($errors->has('responsable'))
                                                        <div class="invalid-feedback">{{ $errors->first('responsable') }}</div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-3 col-form-label">
                                                    <label for="rif">RIF</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input id="rif" type="text" name="rif" class="form-control @error('rif') is-invalid @enderror" value="{{ old('rif') }}"  placeholder="J-12349876-1"/>
                                                    @if ($errors->has('rif'))
                                                        <div class="invalid-feedback">{{ $errors->first('rif') }}</div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-3 col-form-label">
                                                    <label for="password">Agencia</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <select name="agency_id" id="" class="form-control">
                                                        <option >Seleccione una agencia</option>
                                                        @foreach ($agencies as $item)
                                                        <option value="{{ $item->id }}">{{ $item->name }}</option>    
                                                        @endforeach
                                                    </select>
                                                    @if ($errors->has('password'))
                                                        <div class="invalid-feedback">{{ $errors->first('password') }}</div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-3 col-form-label">
                                                    <label for="role_id">Moneda</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <select name="currency_id" id="" class="form-control">
                                                        <option value="">Seleccione una moneda</option>
                                                        @foreach ($currencies as $item)
                                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    @if ($errors->has('currency_id'))
                                                        <div class="invalid-feedback">{{ $errors->first('currency_id') }}</div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-3 col-form-label">
                                                    <label for="tipo_venta">Tipo de Venta</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <select name="tipo_venta" id="tipo_venta" class="form-control">
                                                        <option value="">Seleccione el tipo de venta</option>
                                                        <option value="PrePago"> PrePago</option>
                                                        <option value="PostPago"> PostPago</option>
                                                    </select>
                                                    @if ($errors->has('tipo_venta'))
                                                        <div class="invalid-feedback">{{ $errors->first('tipo_venta') }}</div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-3 col-form-label">
                                                    <label for="responsable">Codigo Promocional</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input id="promotional_code" type="text" name="promotional_code" class="form-control @error('promotional_code') is-invalid @enderror" value="{{ old('promotional_code') }}"  placeholder="FR45678"/>
                                                    @if ($errors->has('promotional_code'))
                                                        <div class="invalid-feedback">{{ $errors->first('promotional_code') }}</div>
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
    <script src="{{ asset('app-assets/vendors/js/forms/select/select2.full.min.js') }}"></script>
    <script>
        $(function () {
            'use strict';

            $('.select2').each(function () {
                var $this = $(this);
                $this.wrap('<div class="position-relative"></div>');
                $this.select2({
                // the following code is used to disable x-scrollbar when click in select input and
                // take 100% width in responsive also
                    dropdownAutoWidth: true,
                    width: '100%',
                    dropdownParent: $this.parent()
                });
            });
        });
    </script>
@endsection