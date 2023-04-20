<form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{ route('categories.store') }}">
    <div class="modal fade text-left" id="ModalCreate" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
  
            <h4 class="modal-title">Crear nuevo categoria</h4>
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
                                      <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required>
                                      @if ($errors->has('name'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('name') }}</strong>
                                      </span>
                                      @endif
                                  </div>
                                  <div class="form-group">
                                      <div class="col-md-6 col-md-offset-4">
                                          <button type="submit" class="btn btn-primary">
                                              Crear categoría
                                          </button>
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
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
  
  