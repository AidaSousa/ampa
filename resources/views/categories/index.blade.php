@extends('dashboard')

@section('title', 'Index')

@section('content')


        <div class="app-title">
          <div class="d-flex">
            <h1><i class="fa fa-archive"></i> Categorias</h1>
            <a href="{{ route('categories.create') }}" type="button" class="btn btn-primary ml-3" data-toggle="modal" data-target="#ModalCreate" type="button"><i class="fa fa-plus"></i>Nuevo</a>
          </div>
        </div>
        <div class="row">
            <div class="col-md-6">
              <div class="tile">
                <div class="tile-body">
                  <div class="table-responsive">
                    <table class="table table-hover table-bordered" id="tableUsuarios">
                      <thead>
                        <tr>
                          <th>Nombre</th>
                          <th>Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($categories as $category)
                        <tr>
                          <td>{{$category->name}}</td>
                          <td>
                          <form method="POST" action="{{ route('categories.destroy', $category->id) }}" style="display:inline">
                              {{ csrf_field() }}
                              {{ method_field('DELETE') }}
                          <div class="d-flex">
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de que quieres eliminar esta categoría?')">Eliminar</button>
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
@include('categories.create')
@endsection