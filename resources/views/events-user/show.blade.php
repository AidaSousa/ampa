@extends('dashboard')

@section('title', 'Registro de actividad')

@section('content')
<div class="app-title">
    <div class="d-flex">
        <h1><i class="mx-2 fa fa-calendar"></i> Registro de actividades {{$eventUser->user->name}}</h1>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered" id="tableUsuarios">
                        <thead>
                            <tr>
                                <th>Actividad</th>
                                <th>Usuario</th>
                                <th>Nombre del niño/a</th>
                                <th>Apellido del niño/a</th>
                                <th>Fecha de nacimiento del niño/a</th>
                                <th>Curso escolar</th>
                                <th>Teléfono de contacto</th>
                                <th>¿Está matriculado en el centro?</th>
                                <th>¿Va directo al comedor?</th>
                                <th>¿Es un niño/a con necesidades especiales?</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td>{{$eventUser->event->name}}</td>
                                    <td>{{$eventUser->user->name}}</td>
                                    <td>{{$eventUser->name_children}}</td>
                                    <td>{{$eventUser->surname_children}}</td>
                                    <td>{{$eventUser->birth_date}}</td>
                                    <td>{{$eventUser->school_year}}</td>
                                    <td>{{$eventUser->phone_contact}}</td>
                                    <td>{{$eventUser->matriculado_centro}}</td>
                                    <td>{{$eventUser->directo_comedor}}</td>
                                    <td>{{$eventUser->necesidades_especiales}}</td>
                                    <td>
                                        <form method="POST" action="{{ route('events-user.destroy', $eventUser->id) }}" style="display:inline">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de que quieres eliminar este registro de actividad?')"><i class="fa fa-trash"></i></button>
                                        </form>                                    
                                    </td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection