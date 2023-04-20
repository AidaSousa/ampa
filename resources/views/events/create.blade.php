<form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{ route('events.store') }}">
    <div class="modal fade text-left" id="ModalCreate" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Crear nueva actividad</h4>
          </div>
          <div class="modal-body">
          <div class="container">
          <div class="row">
              <div class="col-md-12 col-md-offset-2">
                  <div class="panel panel-default">
                      <div class="panel-body">
                              {{ csrf_field() }}
                              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                              <label for="name" class="col-md-4 control-label">Nombre del padre/madre</label>
                                  <div class="col-xs-12 col-sm-12 col-md-12">
                                      <input id="name" type="text" class="form-control" name="name" required>
                                      @if ($errors->has('name'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('name') }}</strong>
                                      </span>
                                      @endif
                                  </div>
                              </div>
                              <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                              <label for="description" class="col-md-4 control-label">Descripción</label>
                                  <div class="col-xs-12 col-sm-12 col-md-12">
                                      <input id="description" type="text" class="form-control" name="description" required>
                                      @if ($errors->has('description'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('description') }}</strong>
                                      </span>
                                      @endif
                                  </div>
                              </div>
                              <div class="form-group{{ $errors->has('date_event') ? ' has-error' : '' }}">
                              <label for="date_event" type="date" class="col-md-4 control-label">Fecha de actividad</label>
                                  <div class="col-xs-12 col-sm-12 col-md-12">
                                      <input id="date_event" type="date" class="form-control" name="date_event" required>
                                      @if ($errors->has('date_event'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('date_event') }}</strong>
                                      </span>
                                      @endif
                                  </div>
                              </div>
                              <div class="form-group{{ $errors->has('price_no_accociated') ? ' has-error' : '' }}">
                              <label for="price_no_accociated" class="col-md-4 control-label">Precio de no asociado</label>
                                  <div class="col-xs-12 col-sm-12 col-md-12">
                                      <input id="price_no_accociated" type="text" class="form-control" name="price_no_accociated" required>
                                      @if ($errors->has('price_no_accociated'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('price_no_accociated') }}</strong>
                                      </span>
                                      @endif
                                  </div>
                              </div>
                              <div class="form-group{{ $errors->has('price_associated') ? ' has-error' : '' }}">
                              <label for="price_associated" class="col-md-4 control-label">Precio de asociado</label>
                                  <div class="col-xs-12 col-sm-12 col-md-12">
                                      <input id="price_associated" type="text" class="form-control" name="price_associated" required>
                                      @if ($errors->has('price_associated'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('price_associated') }}</strong>
                                      </span>
                                      @endif
                                  </div>
                              </div>
                              <div class="form-group{{ $errors->has('date_finilized') ? ' has-error' : '' }}">
                              <label for="date_finilized" type="date" class="col-md-4 control-label">Fecha de finalización de actividad</label>
                                  <div class="col-xs-12 col-sm-12 col-md-12">
                                      <input id="date_finilized" type="date" class="form-control" name="date_finilized" required>
                                      @if ($errors->has('date_finilized'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('date_finilized') }}</strong>
                                      </span>
                                      @endif
                                  </div>
                              </div>
                              <div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
                              <label for="category_id" class="col-md-4 control-label">Categoria</label>
                                  <div class="col-xs-12 col-sm-12 col-md-12">
                                      <input id="category_id" type="text" class="form-control" name="category_id" required>
                                      @if ($errors->has('category_id'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('category_id') }}</strong>
                                      </span>
                                      @endif
                                  </div>
                              </div>
                                  <div class="form-group">
                                      <div class="col-md-6 col-md-offset-4">
                                          <button type="submit" class="btn btn-primary">
                                              Registrar actividad
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
  