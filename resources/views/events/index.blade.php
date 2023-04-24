@extends('dashboard')

@section('title', 'Index')

@section('content')


      <div class="app-title">
        <div class="d-flex">
          <h1><i class="fa fa-star"></i> Actividades</h1>
          <a href="{{ route('events.create') }}" type="button" class="btn btn-primary ml-3" data-toggle="modal" data-target="#ModalCreate" type="button"><i class="fa fa-plus"></i>Nuevo</a>
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
                          <th>Imagen</th>
                          <th>Actividad</th>
                          <th>Descripción</th>
                          <th>Fecha de inicio</th>
                          <th>Precio no asociado</th>
                          <th>Fecha finalización</th>
                          <th>Categoria</th>
                          <th>Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($events as $event)
                          <tr>
                            <td><img src="{{$event->image}}" width="50" height="50"/></td>
                            <td>{{$event->name}}</td>
                            <td>{{$event->description}}</td>
                            <td>{{$event->start_date}}</td>
                            <td>{{$event->price_no_asociated}}€</td>
                            <td>{{$event->end_date}}</td>
                            <td>{{$event->category->name}}</td>
                            <td>
                              <form method="POST" action="{{ route('events.destroy', $event->id) }}" style="display:inline">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de que quieres eliminar esta actividad?')"><i class="fa fa-trash"></i></button>
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
@include('events.create')
@endsection