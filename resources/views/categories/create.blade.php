@extends('dashboard')

@section('content')
<form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{ route('categories.store') }}">
    <div class="text-left">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Crear nueva categoria</h4>
          </div>
          <div class="modal-body">
          <div class="container">
          <div class="row">
              <div class="col-md-12 col-md-offset-2">
                  <div class="panel panel-default">
                      <div class="panel-body">
                              {{ csrf_field() }}
                              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                              <label for="name" class="col-md-4 control-label">Categoría</label>
                                  <div class="col-xs-12 col-sm-12 col-md-12">
                                      <input id="name" type="text" class="form-control" name="name" required>
                                      @if ($errors->has('name'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('name') }}</strong>
                                      </span>
                                      @endif
                                  </div>
                              </div>
                                  <div class="form-group">
                                      <div class="col-md-6 col-md-offset-4">
                                          <button type="submit" class="btn btn-primary">
                                              Crear categoría
                                          </button>
                                          <a href="{{ route('categories.index')}}" type="button" class="btn btn-secondary">Volver</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>    
          </div>
        </div>
      </div>
    </div>
  </form>
@endsection