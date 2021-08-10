@extends('layouts.app')
@section('stylesheet')

@endsection
@section('content')
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Monedas</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active">Configuraciones
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ url('/monedas') }}"> Monedas</a>
                                    </li>
                                    <li class="breadcrumb-item active">Crear Moneda
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
                                <h4 class="card-title">Crear Moneda</h4>
                            </div>
                            <div class="card-body">
                                <form class="form form-horizontal needs-validation" novalidate method="POST" action="{{ url('/monedas/guardar-moneda') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-3 col-form-label">
                                                    <label for="name">Nombre de Moneda</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input id="name" type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}"  placeholder="Doláres" required/>
                                                    @if ($errors->has('name'))
                                                        <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-3 col-form-label">
                                                    <label for="name">Siglas de Moneda</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input id="name" type="text" name="acronym" class="form-control @error('acronym') is-invalid @enderror" value="{{ old('acronym') }}"  placeholder="USD" required/>
                                                    @if ($errors->has('acronym'))
                                                        <div class="invalid-feedback">{{ $errors->first('acronym') }}</div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-3 col-form-label">
                                                    <label for="name">Simbolo de Moneda</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input id="name" type="text" name="symbol" class="form-control @error('symbol') is-invalid @enderror" value="{{ old('symbol') }}"  placeholder="$" required/>
                                                    @if ($errors->has('symbol'))
                                                        <div class="invalid-feedback">{{ $errors->first('symbol') }}</div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary mr-1">Guardar</button>
                                            <a href="{{ url('/monedas') }}" class="btn btn-outline-secondary">Regresar</a>
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