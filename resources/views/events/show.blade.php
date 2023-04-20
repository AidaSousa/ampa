@extends('layouts.layout')

@section('content') 
<div class="container mt-4 mb-4">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1 class="mb-4">{{ $event->name }}</h1>
                <div class="d-flex flex-column align-items-center text-center">
                    <img src="{{ asset($event->image_path) }}" alt="Imagen del post" class="img-fluid mb-4">
                </div>
                <p class="mb-4 text-justify">{{ $event->description }}</p>
                <a href="{{ route('events.events') }}" class="btn btn-success mx-auto" style="background-color: #459C94; margin-top: 20px; margin-bottom: 20px;">Volver</a>
            </div>
        </div>
    </div>

@endsection
