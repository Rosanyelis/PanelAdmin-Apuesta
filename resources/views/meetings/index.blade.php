
@extends('layouts.app')
@section('stylesheet')

@endsection
@section('content')
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">Encuentros</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Encuentros</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">
        <!-- users list start -->
        <div class="row" id="table-striped">
            <div class="col-12">
                <div class="card">
                    <h5 class="card-header">Filtros</h5>
                    <div class="d-flex justify-content-between align-items-center mx-50 row pt-0 pb-2">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="status">Estado</label>
                                <select class="form-control" id="status" aria-invalid="false">
                                    <option>En Curso</option>
                                    <option>Finalizado</option>
                                    <option>Cancelado</option>
                                    <option>Apostado</option>
                                    <option>Deshabilitado</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="status">Juegos</label>
                                <select class="form-control" id="status" aria-invalid="false">
                                    <option>Fútbol</option>
                                    <option>Basketball</option>
                                    <option>Volleybal</option>
                                    <option>Boxeo</option>
                                    <option>Baseball</option>
                                    <option>Tenis</option>
                                    <option>Futsal</option>
                                    <option>Fútbol Americano</option>
                                    <option>Rugby</option>
                                    <option>Waterpolo</option>
                                    <option>BalonMano</option>
                                    <option>Critcket</option>
                                    <option>Dardos</option>
                                    <option>Badminton</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 user_status">
                            <div class="form-group">
                                <label for="status">Periódo de Fecha</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="card-title">Listado de Encuentros</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Fecha</th>
                                    <th>Hora</th>
                                    <th>Liga</th>
                                    <th>Evento</th>
                                    <th>Estatus</th>
                                    <th>Accción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>04-08-2021</td>
                                    <td>09:30:00 pm</td>
                                    <td>MLS</td>
                                    <td>Los Angeles FC VS Sporting Kansas City</td>
                                    <td><span class="badge badge-light-success">En Curso</span></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>04-08-2021</td>
                                    <td>09:30:00 pm</td>
                                    <td>MLS</td>
                                    <td>Los Angeles FC VS Sporting Kansas City</td>
                                    <td><span class="badge badge-light-dark">Finalizado</span></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>04-08-2021</td>
                                    <td>09:30:00 pm</td>
                                    <td>MLS</td>
                                    <td>Los Angeles FC VS Sporting Kansas City</td>
                                    <td><span class="badge badge-light-danger">Cancelado</span></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>04-08-2021</td>
                                    <td>09:30:00 pm</td>
                                    <td>MLS</td>
                                    <td>Los Angeles FC VS Sporting Kansas City</td>
                                    <td><span class="badge badge-light-primary">Apostado</span></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>04-08-2021</td>
                                    <td>09:30:00 pm</td>
                                    <td>MLS</td>
                                    <td>Los Angeles FC VS Sporting Kansas City</td>
                                    <td><span class="badge badge-light-secondary">Deshabilitado</span></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer d-flex justify-content-center">
                        {{-- {{ $users->links() }} --}}
                    </div>
                </div>
            </div>
        </div>
        <!-- users list ends -->
    </div>
@endsection
@section('scripts')
    
@endsection

