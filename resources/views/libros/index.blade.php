@extends('dashboard')

@section('title', 'Banco de libros')

@section('content')
<div class="app-title">
    <div class="d-flex">
        <h1><i class="mx-2 fa fa-book"></i> Banco de libros</h1>
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
                                <th>Usuario registrado</th>
                                <th>Nombre del padre que solicita</th>
                                <th>Nombre del niño/a que solicita</th>
                                <th>Curso</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($libros as $libro)
                                <tr>
                                    <td>{{$libro->user->name}}</td>
                                    <td>{{$libro->padre_solicita}}</td>
                                    <td>{{$libro->menor_solicita}}</td>
                                    <td>{{$libro->curso}}</td>
                                    <td>
                                        <a href="{{ route ('libros.show', $libro->id) }}" type="button" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></a> 
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