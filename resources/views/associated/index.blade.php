@extends('dashboard')

@section('title', 'Index')

@section('content')

      <div class="app-title">
        <div class="d-flex">
          <h1><i class="fa fa-users"></i> Asociados</h1>
          <a href="{{ route('associated.create') }}" type="button" class="btn btn-primary ml-3" data-toggle="modal" data-target="#ModalCreate" type="button"><i class="fa fa-plus"></i>Nuevo</a>
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
                          <th>ID</th>
                          <th>Nombre del padre/madre</th>
                          <th>DNI</th>
                          <th>Teléfono</th>
                          <th>Dirección</th>
                          <th>Email de contacto</th>
                          <th>Beca de comedor</th>
                          <th>Colaboración con AMPA</th>
                          <th>Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($associated as $asso)
                        <tr>
                          <td>{{$asso->id}}</td>
                          <td>{{$asso->name_padre_madre}} {{$asso->surname_padre_madre}}</td>
                          <td>{{$asso->dni}}</td>
                          <td>{{$asso->telefono}}</td>
                          <td>{{$asso->direccion}}</td>
                          <td>{{$asso->email_comunicacion_directa}}</td>
                          <td>{{$asso->beca_comedor}}</td>
                          <td>{{$asso->colaboracion_ampa}}</td>
                          <td>
                          <div class="d-flex">
                                      <a href="{{ route('associated.edit', $asso->id) }}" type="button" data-toggle="modal" data-target="#ModalEdit" class="btn btn-sm btn-primary">Editar</a> 

                          </div>
                            <form method="POST" action="{{ route('associated.destroy', $asso->id) }}" style="display:inline">
                              {{ csrf_field() }}
                              {{ method_field('DELETE') }}
                          <div class="d-flex">
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de que quieres eliminar este asociado?')"><i class="fa fa-trash"></i></button>
                          </div>
                            </form>
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
@include('associated.create')
@endsection
