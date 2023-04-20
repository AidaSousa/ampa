{{-- @extends('layouts.layout')

@section('title', 'Mi Perfil')

@section('content')

<div class="container">
		<div class="main-body">
			<div class="row">
				<div class="col-lg-4">
					<div class="card">
						<div class="card-body">
							<div class="d-flex flex-column align-items-center text-center">
								<img src="/img/user.png" alt="Admin" class="rounded-circle p-1 bg-transparent" width="75">
								<div class="mt-3">
									<h4>{{ auth()->user()->name }}</h4>
									<p class="text-secondary mb-1">{{auth()->user()->surname }}</p>
									<a class="btn btn-success text-white btn-custom" href="{{ route('subscription.index') }}">Hacerme socio</a>
									<a class="btn btn-success text-white btn-custom" href="{{ route('billings.index') }}">Métodos de pago</a>

								</div>
							</div>
							<hr class="my-4">
							<h3>Agregar hijo</h3>
                            @include('children.create')
						</div>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="card">
						<div class="card-body">
							<form method="POST" action="{{ route('user.update', ['id' => $user->id]) }}">
								@csrf
								@method('PUT')
								<div class="row mb-3">
									<div class="col-sm-3">
										<h6 class="mb-0">Nombre</h6>
									</div>
									<div class="col-sm-9 text-secondary">
										<input type="text" class="form-control" name="name" id="name" value="{{ auth()->user()->name }}">
									</div>
								</div>
								<div class="row mb-3">
									<div class="col-sm-3">
										<h6 class="mb-0">Apellidos</h6>
									</div>
									<div class="col-sm-9 text-secondary">
										<input type="text" class="form-control" name="surname" id="surname" value="{{ auth()->user()->surname }}">
									</div>
								</div>
								<div class="row mb-3">
									<div class="col-sm-3">
										<h6 class="mb-0">Email</h6>
									</div>
									<div class="col-sm-9 text-secondary">
										<input type="email" class="form-control" name="email" id="email" value="{{ auth()->user()->email }}">
									</div>
								</div>
								<div class="row mb-3">
									<div class="col-sm-3">
										<h6 class="mb-0">Password</h6>
									</div>
									<div class="col-sm-9 text-secondary">
										<input type="password" class="form-control" name="password" id="password" value="{{ auth()->user()->password }}">
									</div>
								</div>
								<div class="row">
									<div class="col-sm-3"></div>
									<div class="col-sm-9 text-secondary">
										<button type="submit" class="btn btn-success px-4">Guardar cambios</button>
									</div>
								</div>
							</form>
							<br/>
							<hr>
							<br/>
							<div class="row">
								@include('children.index', ['children' => $children])
							
							</div>
				</div>
			</div>
		</div>
	</div>
@endsection --}}

@extends('layouts.layout')

@section('title', 'Mi Perfil')

@section('content')
<div class="container">
	<div class="main-body">
    	<div class="row">
      		<div class="col-lg-4">
        		<div class="card">
          			<div class="card-body">
            			<div class="d-flex flex-column align-items-center text-center">
              				<img src="/img/user.png" alt="Admin" class="rounded-circle p-1 bg-transparent" width="75">
              					<div class="mt-3">
                					<h4 class="mb-4">{{ auth()->user()->name }}</h4>
									<p class="text-secondary mb-1">{{ auth()->user()->surname }}</p>
									<a  class="btn btn-custom px-4"  style="background-color: #009688; color: white;" href="{{ route('billings.index') }}">Hacerme socio</a>
									<a  class="btn btn-custom px-4"  style="background-color: #009688; color: white;" href="{{ route('billings.index') }}">Métodos de pago</a>
              					</div>
            				</div>
            				<hr class="my-4">
            				<h3 class="text-gray-700 font-semibold text-lg">Agregar hijo</h3>
            				@include('children.create')
        				</div>
        			</div>
      			</div>
      			<div class="col-lg-8">
        			<div class="card">
          				<div class="card-body">
            				<!-- Inicio de formulario de actualización de perfil -->
            				<form method="POST" action="{{ route('user-profile-information.update') }}">
								@csrf
								@method('PUT')
								<!-- Nombre -->
								<div class="form-group row">
									<label for="name" class="col-md-4 col-form-label text-md-right">Nombre y apellidos</label>

									<div class="col-md-6">
										<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') ?? auth()->user()->name }}" required autocomplete="name" autofocus>

										@error('name')
											<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
											</span>
										@enderror
                					</div>
              			</div>
						<!-- Correo electrónico -->
						<div class="form-group row">
							<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo electrónico') }}</label>

							<div class="col-md-6">
								<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') ?? auth()->user()->email }}" required autocomplete="email">

								@error('email')
									<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
			  			</div>
						{{-- Password --}}
						<div class="form-group row">
							<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

							<div class="col-md-6">
								<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="" required autocomplete="password">

								@error('password')
									<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
			  			</div>
						{{-- Confirmar Password --}}
						<div class="form-group row">
							<label for="password_confirmation" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar contraseña') }}</label>

							<div class="col-md-6">
								<input id="password_confirmation" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" value="" required autocomplete="password_confirmation">

								@error('password_confirmation')
									<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
			  			</div>
					</div>
			  		<div class="col-sm-3 mx-auto">
						<div class="col-sm-9 text-secondary">
							<button type="submit" class="btn btn-custom px-4"  style="background-color: #009688; color: white;">Guardar cambios</button>
						</div>
					</div>
							</form>
							<br/>
							<hr>
							<br/>
							<div class="row mx-2">
								@include('children.index', ['children' => $children])
							
							</div>
				</div>
			</div>
		</div>
	</div>

@endsection