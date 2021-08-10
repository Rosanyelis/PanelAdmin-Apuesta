@extends('layouts.app')
@section('stylesheet')

@endsection
@section('content')
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Agencias</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active">Configuraciones
                                    </li>
                                    <li class="breadcrumb-item active">Agencias
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                @include('layouts.alert')
                <div class="row" id="table-striped">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <h4 class="card-title">Listado de Agencias</h4>
                                <a href="{{ url('/agencias/crear-agencia') }}" class="btn btn-primary "><i data-feather='plus'></i> Nuevo Agencia</a>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nombre de Agencia</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($agencies as $item)
                                            <tr>
                                                <td>{{ $item->name }}</td>
                                                <td class="p-0">
                                                    <a href="{{ url('/agencias/'.$item->id.'/ver-agencia') }}" class="btn btn-icon btn-icon rounded-circle btn-flat-primary waves-effect"><i data-feather='eye'></i></a>
                                                    <a href="{{ url('/agencias/'.$item->id.'/editar-agencia') }}" class="btn btn-icon btn-icon rounded-circle btn-flat-warning waves-effect"><i data-feather='edit-2'></i></a>
                                                    <a href="javascript: void(0);" class="btn btn-icon btn-icon rounded-circle btn-flat-danger waves-effect" data-toggle="modal" data-target="#delete-{{ $item->id }}"><i data-feather='trash-2'></i></a> 
                                                    <!-- Modal -->
                                                    <div class="modal fade text-left modal-warning" id="delete-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel140" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <form method="POST" action="{{ url('/agencias/'.$item->id.'/eliminar-agencia') }}">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="myModalLabel140">Warning</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body text-center">
                                                                        <h3>¿Está seguro de eliminar éste registro?</h3>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-outline-dark waves-effect " data-dismiss="modal">Cancelar</button>
                                                                        <button type="submit" class="btn btn-warning">Si, estoy seguro</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer d-flex justify-content-center">
                                {{ $agencies->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
@section('scripts')
    
@endsection