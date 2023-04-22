@extends('layouts.layout')

@section('content') 

<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item ruta mx-auto">
    <div class="block2">
        <div class="block2-pic hov-img0 p-0">
            <img src="{{asset($event->image)}}" alt="IMG">
        </div>
        <h4 class="mtext-101 cl2 hov-cl1 trans-04">
            {{ $event->name }}
        </h4>
        <p class="mb-4 text-justify">{{ $event->description }}</p>

        <p class="stext-108 cl6">{{ $event->price_associated }}€ asociados / {{ $event->price_no_asociated }}€ no asociados</p>
    </div>
</div>
@endsection
