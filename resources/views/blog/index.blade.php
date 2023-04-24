@extends('dashboard')

@section('title', 'Index')

@section('content')


      <div class="app-title">
        <div class="d-flex">
          <h1><i class="fa fa-paperclip"></i> Blog</h1>
          <a href="{{ route('blog.create') }}" type="button" class="btn btn-primary ml-3" data-toggle="modal" data-target="#ModalCreate" type="button"><i class="fa fa-plus"></i>Nuevo</a>
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
                          <th>Titulo</th>
                          <th>Contenido</th>
                          <th>Imagen</th>
                          <th>Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($blogs as $blog)
                          <tr>
                            <td>{{$blog->title}}</td>
                            <td>{{$blog->content}}</td>
                            <td><img width="60" height="60" src="{{asset($blog->image_path)}}"></td>
                            <td>
                              <form method="POST" action="{{ route('blog.destroy', $blog->id) }}" style="display:inline">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de que quieres eliminar esta entrada al blog?')"><i class="fa fa-trash"></i></button>
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
@endsection