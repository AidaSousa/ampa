<form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{ route('associated.store') }}">
    <div class="modal fade text-left" id="ModalCreate" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Crear nuevo usuario</h4>
          </div>
          <div class="modal-body">
          <div class="container">
          <div class="row">
              <div class="col-md-12 col-md-offset-2">
                  <div class="panel panel-default">
                      <div class="panel-body">
                              {{ csrf_field() }}
                              <div class="form-group{{ $errors->has('situacion') ? ' has-error' : '' }}">
                                  <label for="situacion" class="col-md-4 control-label">Nombre</label>
                                      @if ($errors->has('situacion'))
                                          <span class="help-block">
                                              <strong>{{ $errors->first('situacion') }}</strong>
                                          </span>
                                      @endif
                              </div>
                              <div class="form-group{{ $errors->has('email_comunicacion_directa') ? ' has-error' : '' }}">
                                  <label for="email_comunicacion_directa" class="col-md-4 control-label">Apellidos</label>
                                  <div class="col-xs-12 col-sm-12 col-md-12">
                                      <input id="email_comunicacion_directa" type="email" class="form-control" name="email_comunicacion_directa" value="{{ old('email_comunicacion_directa') }}" required>
                                      @if ($errors->has('email_comunicacion_directa'))
                                          <span class="help-block">
                                              <strong>{{ $errors->first('email_comunicacion_directa') }}</strong>
                                          </span>
                                      @endif
                                  </div>
                              </div>
                              <div class="form-group{{ $errors->has('beca_comedor') ? ' has-error' : '' }}">
                                  <label for="beca_comedor" class="col-md-4 control-label">Correo electronico</label>
                                      @if ($errors->has('beca_comedor'))
                                          <span class="help-block">
                                              <strong>{{ $errors->first('beca_comedor') }}</strong>
                                          </span>
                                      @endif
                              </div> <br>
                                  <div class="form-group">
                                      <div class="col-md-6 col-md-offset-4">
                                          <button type="submit" class="btn btn-primary">
                                              Registrar usuario
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