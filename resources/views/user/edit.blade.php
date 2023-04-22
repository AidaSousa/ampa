@extends('dashboard')

@section('title', 'Editar usuario')

@section('content')
    
<form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{ route('user.update', $user->id) }}">
    {{-- <div class="modal fade text-left" id="ModalCreate" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body"> --}}
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-md-offset-2">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        @csrf
                                        @method('PUT')
                                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                                <label for="name" class="col-md-4 control-label">Nombre</label>
                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required>
                                                    @if ($errors->has('name'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('name') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }}">
                                                <label for="surname" class="col-md-4 control-label">Apellidos</label>
                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                    <input id="surname" type="text" class="form-control" name="surname" value="{{ old('surname') }}" required>
                                                    @if ($errors->has('surname'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('surname') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                <label for="email" class="col-md-4 control-label">Email</label>
                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                                    @if ($errors->has('email'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
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
                                            </div>
                                            <div class="form-group {{ $errors->has('beca_comedor') ? ' has-error' : '' }}">
                                                <label for="beca_comedor" class="col-md-4 control-label">Sodes solicitantes da beca comedor?</label>
                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                    <select id="beca_comedor" class="form-control" name="beca_comedor">
                                                    <option selected="">Seleccione a súa situación</option>
                                                    <option value="si">Si</option>
                                                    <option value="no">Non</option>
                                                    </select>
                                                    @if ($errors->has('beca_comedor'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('beca_comedor') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
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
                                            </div>
                                            <div class="form-group{{ $errors->has('direccion') ? ' has-error' : '' }}">
                                                <label for="direccion" class="col-md-4 control-label">Dirección</label>
                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                    <textarea rows="2" id="direccion" type="text" class="form-control" name="direccion" value="{{ old('direccion') }}"></textarea>
                                                    @if ($errors->has('direccion'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('direccion') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group{{ $errors->has('colaboracion_ampa') ? ' has-error' : '' }}">
                                                <label for="colaboracion_ampa" class="col-md-4 control-label">No caso de estar interesado/a en colaborar coa ANPA, qué consideras que podes aportar? En que área te gustaría axudar ? (festas, actividades, comedor, subvencións, horta...)</label>
                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                    <textarea rows="2" id="colaboracion_ampa" type="text" class="form-control" name="colaboracion_ampa" value="{{ old('colaboracion_ampa') }}"></textarea>
                                                    @if ($errors->has('colaboracion_ampa'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('colaboracion_ampa') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-custom mx-3"  style="background-color: #009688; color: white;">Actualizar datos</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>    
                {{-- </div>
            </div>
        </div>
    </div> --}}
</form>

@endsection