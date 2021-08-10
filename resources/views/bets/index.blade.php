@extends('layouts.app')
@section('stylesheet')

@endsection
@section('content')
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">Apuestas</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Apuestas</li>
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
                    <div class="d-flex  align-items-center mx-50 row pt-0 pb-2">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="status">Estado</label>
                                <select class="form-control" id="status" aria-invalid="false">
                                    <option>En Curso</option>
                                    <option>Pendientes</option>
                                    <option>Ganadoras</option>
                                    <option>Perdedoras</option>
                                    <option>Caducadas</option>
                                    <option>Retiradas</option>
                                    <option>Anuladas</option>
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
                        <h4 class="card-title">Listado de Apuestas</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Fecha</th>
                                    <th>Hora</th>
                                    <th>Usuario</th>
                                    <th>Nro.Items</th>
                                    <th>Apostado</th>
                                    <th>Logro</th>
                                    <th>Premio</th>
                                    <th>Pagada</th>
                                    <th>Moneda</th>
                                    <th>Estatus</th>
                                    <th>Accción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>04-08-2021</td>
                                    <td>09:30:00 pm</td>
                                    <td>Taquilla TEST</td>
                                    <td>1</td>
                                    <td>6.000,00</td>
                                    <td>1,70</td>
                                    <td>10.200,00</td>
                                    <td>Si</td>
                                    <td>COP</td>
                                    <td><span class="badge badge-light-info">En Curso</span></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>04-08-2021</td>
                                    <td>09:30:00 pm</td>
                                    <td>Taquilla TEST</td>
                                    <td>1</td>
                                    <td>6.000,00</td>
                                    <td>1,70</td>
                                    <td>10.200,00</td>
                                    <td>Si</td>
                                    <td>COP</td>
                                    <td><span class="badge badge-light-warning">Pendiente</span></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>04-08-2021</td>
                                    <td>09:30:00 pm</td>
                                    <td>Taquilla TEST</td>
                                    <td>1</td>
                                    <td>6.000,00</td>
                                    <td>1,70</td>
                                    <td>10.200,00</td>
                                    <td>Si</td>
                                    <td>COP</td>
                                    <td><span class="badge badge-light-success">Ganadoras</span></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>04-08-2021</td>
                                    <td>09:30:00 pm</td>
                                    <td>Taquilla TEST</td>
                                    <td>1</td>
                                    <td>6.000,00</td>
                                    <td>1,70</td>
                                    <td>10.200,00</td>
                                    <td>Si</td>
                                    <td>COP</td>
                                    <td><span class="badge badge-light-danger">Perdedoras</span></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>04-08-2021</td>
                                    <td>09:30:00 pm</td>
                                    <td>Taquilla TEST</td>
                                    <td>1</td>
                                    <td>6.000,00</td>
                                    <td>1,70</td>
                                    <td>10.200,00</td>
                                    <td>Si</td>
                                    <td>COP</td>
                                    <td><span class="badge badge-light-secondary">Caducas</span></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>04-08-2021</td>
                                    <td>09:30:00 pm</td>
                                    <td>Taquilla TEST</td>
                                    <td>1</td>
                                    <td>6.000,00</td>
                                    <td>1,70</td>
                                    <td>10.200,00</td>
                                    <td>Si</td>
                                    <td>COP</td>
                                    <td><span class="badge badge-light-dark">Retiradas</span></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>04-08-2021</td>
                                    <td>09:30:00 pm</td>
                                    <td>Taquilla TEST</td>
                                    <td>1</td>
                                    <td>6.000,00</td>
                                    <td>1,70</td>
                                    <td>10.200,00</td>
                                    <td>Si</td>
                                    <td>COP</td>
                                    <td><span class="badge badge-light-primary">Anuladas</span></td>
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