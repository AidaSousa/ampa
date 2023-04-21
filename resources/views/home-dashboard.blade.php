@extends('dashboard')

@section('title', 'Dashboard')

@section('content')

<div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
        </div>
      </div>

<div class="app-content mx-auto mt-0 pt-0">
      <div class="col">
        <div class="col-md-12 col-lg-6">
          <div class="widget-small primary coloured-icon "><a href="{{ route('billings.show') }}"><i class="icon fa fa-user fa-2x"></i></a>
            <div class="info text-center">
              <h2><a href="{{ route('billings.show') }}">Usuarios</a></h2>
              <h5><b>300</b></h5>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-6">
          <div class="widget-small info coloured-icon"><a href="{{ route('categories.index') }}"><i class="icon fa fa-archive fa-3x"></i></a>
            <div class="info text-center">
              <h2><a href="{{ route('categories.index') }}">Categorias</h2></a>
              <h5><b>5</b></h5>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-6">
          <div class="widget-small warning coloured-icon"><a href="{{ route('events.index') }}"><i class="icon fa fa-star fa-3x"></i></a>
            <div class="info text-center">
              <h2><a href="{{ route('events.index') }}">Actividades</h2></a>
              <h5><b>27</b></h5>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-6">
          <div class="widget-small danger coloured-icon"><a href="{{ route('blogs.index') }}"><i class="icon fa fa-paperclip fa-3x"></i></a>
            <div class="info text-center">
              <h2><a href="{{ route('blogs.index') }}">Blog</h2></a>
              <h5><b>637</b></h5>
            </div>
          </div>
        </div>
      </div>
</div>

@endsection