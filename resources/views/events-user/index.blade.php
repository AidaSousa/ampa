@extends('dashboard')

@section('title', 'Registro de eventos')
    
@section('content')
<div class="app-title">
    <div class="d-flex">
        <h1><i class="mx-2 fa fa-calendar"></i> Registro de actividades</h1>
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
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($eventUsers as $eventUser)
                                <tr>
                                    <td>{{$eventUser->event->name}}</td>
                                    <td>{{$eventUser->user->name}}</td>
                                    <td>{{$eventUser->name_children}}</td>
                                    <td>{{$eventUser->surname_children}}</td>
                                    <td>{{$eventUser->birth_date}}</td>
                                    <td>
                                        <a href="{{ route ('events-user.show', $eventUser->id) }}" type="button" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></a> 
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection