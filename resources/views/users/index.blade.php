@extends('layouts.app')
@section('stylesheet')

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
        @include('layouts.alert')
        <div class="row" id="table-striped">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="card-title">Listado de Usuarios</h4>
                        <a href="{{ url('usuarios/crear-usuario') }}" class="btn btn-primary "><i data-feather='plus'></i> Nuevo Usuario</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Usuario</th>
                                    <th>Correo Electrónico</th>
                                    <th>Rol</th>
                                    <th>Estatus</th>
                                    <th>Accción</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $item)
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar bg-light-primary mr-1">
                                                    <div class="avatar-content">
                                                        @if ($item->url_avatar)
                                                            
                                                        @endif
                                                        <img src="{{ asset('app-assets/images/portrait/small/avatar-s-20.jpg') }}" alt="avatar" width="32" height="32">
                                                    </div>
                                                </div>
                                                <span>{{ $item->name }}</span>
                                            </div>
                                        </td>
                                        <td>{{ $item->email }}</td>
                                        <td>
                                            <span class="badge badge-light-warning">{{ $item->role->name }}</span>
                                        </td>
                                        <td>
                                            @if ($item->status == true)
                                            <span class="badge badge-light-info">Activo</span>
                                            @else
                                            <span class="badge badge-light-secondary">Inactivo</span>
                                            @endif
                                        </td>
                                        <td class="p-0">
                                            <a href="{{ url('/usuarios/'.$item->id.'/ver-usuario') }}" class="btn btn-icon btn-icon rounded-circle btn-flat-primary waves-effect"><i data-feather='eye'></i></a>
                                                    <a href="{{ url('/usuarios/'.$item->id.'/editar-usuario') }}" class="btn btn-icon btn-icon rounded-circle btn-flat-warning waves-effect"><i data-feather='edit-2'></i></a>
                                                    <a href="javascript: void(0);" class="btn btn-icon btn-icon rounded-circle btn-flat-danger waves-effect" data-toggle="modal" data-target="#delete-{{ $item->id }}"><i data-feather='trash-2'></i></a> 
                                                    <!-- Modal -->
                                                    <div class="modal fade text-left modal-warning" id="delete-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel140" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                {{-- {{ url('/usuarios/'.$item->id.'/eliminar-usuario') }} --}}
                                                                <form  action="#">
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
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
        <!-- users list ends -->
    </div>
@endsection
@section('scripts')
    
@endsection
