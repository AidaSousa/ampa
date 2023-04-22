@extends('layouts.layout')

@section('title', 'Actividades')

@section('content')

    
<div class="row grid mt-8 mb-8 d-flex justify-content-center">

            @foreach($events as $event)

            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item ruta mx-auto">
                <div class="block2">
                    <div class="block2-pic hov-img0 p-0">
                        <img src="{{$event->image}}" alt="IMG">
                        <a href="{{ route ('events.show', $event->id) }}"  class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
                            Más información...
                        </a>
                    </div>
                    <h4 class="mtext-101 cl2 hov-cl1 trans-04">
                        {{ $event->name }}
                    </h4>
                    <p class="stext-108 cl6">{{ $event->price_associated }}€ asociados / {{ $event->price_no_asociated }}€ no asociados</p>
                </div>
            </div>

            @endforeach

   
</div>

 
@endsection