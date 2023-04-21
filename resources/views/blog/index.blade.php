@extends('dashboard')

@section('title', 'Index')

@section('content')


      <div class="app-title">
        <div class="d-flex">
          <h1><i class="fa fa-paperclip"></i> Blog</h1>
          <a href="{{ route('posts.create') }}" class="btn btn-primary ml-3" type="button" onclick="openModal();"><i class="fa fa-plus"></i>Nuevo</a>
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
                          <th>Titulo</th>
                          <th>Contenido</th>
                          <th>Imagen</th>
                          <th>Categoría</th>
                        </tr>
                      </thead>
                      <tbody>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
@include('posts.create')
@endsection