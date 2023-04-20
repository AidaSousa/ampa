<form action="" method="post" enctype="multipart/form-data">
    <div class="modal fade text-left" id="ModalDestroy" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">{{__('Crear nuevo asociado') }}</h4>
            <button type="button" class="close" data-demission="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <div class="container">
          <div class="row">
              <div class="col-md-12 col-md-offset-2">
                  <div class="panel panel-default">
  
                      <div class="panel-body">
                          <form class="form-horizontal" method="POST" action="#">
                              {{ csrf_field() }}
  
                              <div class="form-group{{ $errors->has('situacion') ? ' has-error' : '' }}">
                                  <label for="situacion" class="col-md-4 control-label">Situación</label>
  
                                  <div class="col-xs-12 col-sm-12 col-md-12">
                                      <select id="situacion" name="situacion" class="form-control" required autofocus>
                                          <option value="">Seleccione</option>
                                          <option value="Alta-nueva">Alta nueva</option>
                                          <option value="Renovacion">Renovación</option>
                                          <option value="Modificacion-datos">Modificación datos</option>
                                      </select>
  
                                      @if ($errors->has('situacion'))
                                          <span class="help-block">
                                              <strong>{{ $errors->first('situacion') }}</strong>
                                          </span>
                                      @endif
                                  </div>
                              </div>
  
                              <div class="form-group{{ $errors->has('email_comunicacion_directa') ? ' has-error' : '' }}">
                                  <label for="email_comunicacion_directa" class="col-md-4 control-label">Email de comunicación directa</label>
  
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
                                  <label for="beca_comedor" class="col-md-4 control-label">Beca comedor</label>
  
                                  <div class="col-md-6">
                                      <select id="beca_comedor" name="beca_comedor" class="form-control" required>
                                          <option value="">Seleccione</option>
                                          <option value="si">Sí</option>
                                          <option value="no">No</option>
                                      </select>
  
                                      @if ($errors->has('beca_comedor'))
                                          <span class="help-block">
                                              <strong>{{ $errors->first('beca_comedor') }}</strong>
                                          </span>
                                      @endif
                                  </div>
                              </div>
  
                              <div class="form-group{{ $errors->has('name_padre_madre') ? ' has-error' : '' }}">
                                  <label for="name_padre_madre" class="col-md-4 control-label">Nombre del padre/madre</label>
  
                                  <div class="col-xs-12 col-sm-12 col-md-12">
                                      <input id="name_padre_madre" type="text" class="form-control" name="name_padre_madre" value="{{ old('name_padre_madre') }}" required>
                                      @if ($errors->has('name_padre_madre'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('name_padre_madre') }}</strong>
                                      </span>
                                      @endif
                                  </div>
  
                                  <div class="form-group{{ $errors->has('surname_padre_madre') ? ' has-error' : '' }}">
                                  <label for="surname_padre_madre" class="col-md-4 control-label">Apellido del padre/madre</label>
  
                                  <div class="col-xs-12 col-sm-12 col-md-12">
                                      <input id="surname_padre_madre" type="text" class="form-control" name="surname_padre_madre" value="{{ old('surname_padre_madre') }}" required>
                                      @if ($errors->has('surname_padre_madre'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('surname_padre_madre') }}</strong>
                                      </span>
                                      @endif
                                  </div>
                                  <div class="form-group{{ $errors->has('dni') ? ' has-error' : '' }}">
                                  <label for="dni" class="col-md-4 control-label">DNI</label>
  
                                  <div class="col-xs-12 col-sm-12 col-md-12">
                                      <input id="dni" type="text" class="form-control" name="dni" value="{{ old('dni') }}" required>
                                      @if ($errors->has('dni'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('dni') }}</strong>
                                      </span>
                                      @endif
                                  </div>
  
                                  <div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }}">
                                  <label for="telefono" class="col-md-4 control-label">Teléfono</label>
  
                                  <div class="col-xs-12 col-sm-12 col-md-12">
                                      <input id="telefono" type="text" class="form-control" name="telefono" value="{{ old('telefono') }}" required>
                                      @if ($errors->has('telefono'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('telefono') }}</strong>
                                      </span>
                                      @endif
                                  </div>
  
                                  <div class="form-group{{ $errors->has('direccion') ? ' has-error' : '' }}">
                                  <label for="direccion" class="col-md-4 control-label">Dirección</label>
  
                                  <div class="col-xs-12 col-sm-12 col-md-12">
                                      <input id="direccion" type="text" class="form-control" name="direccion" value="{{ old('direccion') }}" required>
                                      @if ($errors->has('direccion'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('direccion') }}</strong>
                                      </span>
                                      @endif
                                  </div>
  
                                  <div class="form-group{{ $errors->has('colaboracion_ampa') ? ' has-error' : '' }}">
                                  <label for="colaboracion_ampa" class="col-md-4 control-label">Colaboracion ampa</label>
  
                                  <div class="col-xs-12 col-sm-12 col-md-12">
                                      <input id="colaboracion_ampa" type="text" class="form-control" name="colaboracion_ampa" value="{{ old('colaboracion_ampa') }}" required>
                                      @if ($errors->has('colaboracion_ampa'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('colaboracion_ampa') }}</strong>
                                      </span>
                                      @endif
                                  </div> <br>
  
                                  <div class="form-group">
                                      <div class="col-md-6 col-md-offset-4">
                                          <button type="submit" class="btn btn-primary">
                                              Registrar asociado
                                          </button>
                                      </div>
                                  </div>
                          </form>
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