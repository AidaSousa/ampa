@extends('dashboard')

@section('title', 'Registro de actividad')

@section('content')
<div class="app-title">
    <div class="d-flex">
        <h1><i class="mx-2 fa fa-book"></i> Registro de libros de {{$libro->user->name}}</h1>
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
                                <th>NOME DA NAI/PAI QUE SOLICITA DOAZON DE LIBROS
                                </th>
                                <th>NOME DO/A MENOR/ES PARA OS QUE SE SOLICITA LIBROS</th>
                                <th>SOLICITA LIBROS PARA O CURSO</th>
                                <th>TEÑO DOADO LIBROS AO BANCO</th>
                                <th>FORRAR OS LIBROS</th>
                                <th>POÑER O NOME ENRIBA DO FORRO</th>
                                <th>SUPERVISAR QUE NON SE ESCRIBA, SUBLIÑE OU DEBUXE NOS LIBROS</th>
                                <th>REPOÑER OU PAGAR O/OS LIBRO/OS EN CASO DE DETERIORO GRAVE* OU PERDA.</th>
                                <th>DEVOLVER OS LIBROS AO FINAL DO CURSO</th>
                                <th>Declaro ter lida toda a información sobre o Banco de libros</th>
                                <th>Conforme coas normas de uso do Banco de libro</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td>{{$libro->padre_solicita}}</td>
                                    <td>{{$libro->menor_solicita}}</td>
                                    <td>{{$libro->curso}}</td>
                                    <td>{{$libro->donado_libros}}</td>
                                    <td>{{$libro->tapa_libros ? 'Si' : 'No' }}</td>
                                    <td>{{$libro->poner_nombre ? 'Si' : 'No' }}</td>
                                    <td>{{$libro->no_subrayado ? 'Si' : 'No' }}</td>
                                    <td>{{$libro->reemplazar ? 'Si' : 'No' }}</td>
                                    <td>{{$libro->devolver ? 'Si' : 'No' }}</td>
                                    <td>{{$libro->declaracion_leida ? 'Si' : 'No' }}</td>
                                    <td>{{$libro->conforme ? 'Si' : 'No' }}</td>
                                    <td>
                                        <form method="POST" action="{{ route('libros.destroy', $libro->id) }}" style="display:inline">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de que quieres eliminar este registro de libro?')"><i class="fa fa-trash"></i></button>
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