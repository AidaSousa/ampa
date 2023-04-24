@extends('dashboard')

@section('content')
<form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{ route('events.store') }}">
        <div class="text-left">
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
                                                    <label for="name" class="col-md-4 control-label">Actividad</label>
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
                                                    <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                                                        <label for="image" class="col-md-4 control-label">Imagen</label>
                                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                                            <input id="image" type="file" class="form-control" name="image" required>
                                                            @if ($errors->has('image'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('image') }}</strong>
                                                            </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="form-group{{ $errors->has('date_event') ? ' has-error' : '' }}">
                                                        <label for="start_date" type="date" class="col-md-4 control-label">Fecha de actividad</label>
                                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                                <input id="start_date" type="date" class="form-control" name="start_date" required>
                                                                    @if ($errors->has('start_date'))
                                                                    <span class="help-block">
                                                                        <strong>{{ $errors->first('start_date') }}</strong>
                                                                    </span>
                                                                    @endif
                                                                </div>
                                                    </div>
                                                    <div class="form-group{{ $errors->has('price_no_asociated') ? ' has-error' : '' }}">
                                                        <label for="price_no_asociated" class="col-md-4 control-label">Precio</label>
                                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                                            <input id="price_no_asociated" type="text" class="form-control" name="price_no_asociated" required>
                                                            @if ($errors->has('price_no_asociated'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('price_no_ascociated') }}</strong>
                                                            </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="form-group{{ $errors->has('end_date') ? ' has-error' : '' }}">
                                                        <label for="end_date" type="date" class="col-md-4 control-label">Fecha tope de registro</label>
                                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                                            <input id="end_date" type="date" class="form-control" name="end_date" required>
                                                            @if ($errors->has('end_date'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('end_date') }}</strong>
                                                            </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
                                                        <label for="category_id" class="col-md-4 control-label">Categoría</label>
                                                        <div class="col-md-6">
                                                            <select id="category_id" name="category_id" class="form-control" required>
                                                                <option value="">Selecciona una categoría</option>
                                                                @foreach ($categories as $category)
                                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                                @endforeach
                                                            </select>
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
                                                            <a href="{{ route('events.index')}}" type="button" class="btn btn-secondary">Volver</a>
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