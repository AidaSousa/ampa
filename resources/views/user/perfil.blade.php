
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
              					</div>
            				</div>
            				<hr class="my-4 mb-7">
							<h1 class="font-bold text-gray-900 text-center mb-2">Libros Solicitados</h1>
							@include('libros.showAll')
        				</div>
        			</div>
      			</div>
      			<div class="col-lg-8">
        			<div class="card">
          				<div class="card-body">
							<br/>
							<h1 class="font-bold text-gray-900 text-center mb-2">Actividades registradas</h1>
							<br/>
							@include('events-user.showAll')
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
