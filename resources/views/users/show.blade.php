@extends('layouts.app')
@section('stylesheet')
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/forms/form-validation.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/app-user.css') }}">
@endsection
@section('content')
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Dashboard</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="{{ url('usuarios') }}">Usuarios</a></li>
                                        <li class="breadcrumb-item active">Ver Usuarios</li>
                                    </ol>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <div class="card">
                    <div class="card-body">
                        <div class="tab-content">
                            <!-- general tab -->
                            <div role="tabpanel" class="tab-pane active" id="account-vertical-general" aria-labelledby="account-pill-general" aria-expanded="true">
                                
                                <h3>Ver Datos de Usuario</h3>

                                <div class="col-xl-9 col-lg-8 col-md-7">
                                    <div class="card user-card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-12 d-flex flex-column justify-content-between border-container-lg">
                                                    <div class="user-avatar-section">
                                                        <div class="d-flex justify-content-start">
                                                            <img class="img-fluid rounded" src="{{ asset('app-assets/images/portrait/small/avatar-s-20.jpg') }}" height="104" width="104" alt="User avatar">
                                                            <div class="d-flex flex-column ml-1">
                                                                <div class="user-info mb-1">
                                                                    <h4 class="mb-0">{{ $data->firstname }} {{ $data->lastname }}</h4>
                                                                    <span class="card-text">{{ $data->email }}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 mt-2 mt-xl-0">
                                                    <div class="user-info-wrapper">
                                                        <div class="d-flex flex-wrap">
                                                            <div class="user-info-title">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user mr-1"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                                                <span class="card-text user-info-title font-weight-bold mb-0">Usuario: &nbsp;</span>
                                                            </div>
                                                            <p class="card-text mb-0"> {{ $data->name }}</p>
                                                        </div>
                                                        <div class="d-flex flex-wrap my-50">
                                                            <div class="user-info-title">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check mr-1"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                                                <span class="card-text user-info-title font-weight-bold mb-0">Estatus: &nbsp;</span>
                                                            </div>
                                                            <p class="card-text mb-0"> @if ($data->status == true) Activo @else Inactivo @endif</p>
                                                        </div>
                                                        <div class="d-flex flex-wrap my-50">
                                                            <div class="user-info-title">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star mr-1"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                                <span class="card-text user-info-title font-weight-bold mb-0">Rol:&nbsp;</span>
                                                            </div>
                                                            <p class="card-text mb-0">{{ $data->role->name }}</p>
                                                        </div>
                                                        {{-- <div class="d-flex flex-wrap my-50">
                                                            <div class="user-info-title">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-flag mr-1"><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path><line x1="4" y1="22" x2="4" y2="15"></line></svg>
                                                                <span class="card-text user-info-title font-weight-bold mb-0">Pa??s</span>
                                                            </div>
                                                            <p class="card-text mb-0">England</p>
                                                        </div> --}}
                                                        <div class="d-flex flex-wrap">
                                                            <div class="user-info-title">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone mr-1"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                                                <span class="card-text user-info-title font-weight-bold mb-0">Tel??fono: &nbsp;</span>
                                                            </div>
                                                            <p class="card-text mb-0">{{ $data->phone }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <!--/ general tab -->

                            
                        </div>
                    </div>
                </div>
            </div>
@endsection
@section('scripts')
    <script src="{{ asset('app-assets/vendors/js/forms/validation/jquery.validate.min.js') }}"></script>
@endsection