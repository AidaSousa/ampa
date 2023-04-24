<form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{ route('blog.store') }}">
    <div class="modal fade text-left" id="ModalCreate" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Nueva entrada al blog</h4>
          </div>
          <div class="modal-body">
          <div class="container">
          <div class="row">
              <div class="col-md-12 col-md-offset-2">
                  <div class="panel panel-default">
                      <div class="panel-body">
                              {{ csrf_field() }}
                              <div class="form-group">
                                <label for="title">Título</label>
                                <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" required>
                            </div>
                    
                            <div class="form-group">
                                <label for="content">Contenido</label>
                                <textarea name="content" id="content" rows="5" class="form-control" required>{{ old('content') }}</textarea>
                            </div>
                    
                            <div class="form-group">
                                <label for="image">Imagen</label>
                                <input type="file" name="image_path" id="image" class="form-control-file">
                            </div>
                    
                            <button type="submit" class="btn btn-primary">Crear Blog</button>
                          </div>
                      </div>
                  </div>
              </div>    
          </div>
        </div>
      </div>
    </div>
  </form>
  
{{-- <div class="container">
    <h1>Crear nuevo Blog</h1>

    <form action="{{ route('blog.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Título</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" required>
        </div>

        <div class="form-group">
            <label for="content">Contenido</label>
            <textarea name="content" id="content" rows="5" class="form-control" required>{{ old('content') }}</textarea>
        </div>

        <div class="form-group">
            <label for="image">Imagen</label>
            <input type="file" name="image" id="image" class="form-control-file">
        </div>
        <div class="form-group">
            <label for="category">Categoría</label>
            <input type="text" name="category" id="category" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Crear Blog</button>
        <a href="{{ route('blogs.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div> --}}

