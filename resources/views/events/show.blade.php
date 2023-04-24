@extends('layouts.layout')

@section('content') 

{{-- <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item ruta mx-auto">
    <div class="block2">
        <div class="block2-pic hov-img0 p-0">
            <img src="{{asset($event->image)}}" alt="IMG">
            <a href="{{ route ('events-user.create') }}"  class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
                INSCRIBETE
            </a>
        </div>
        <h4 class="mtext-101 cl2 hov-cl1 trans-04">
            {{ $event->name }}
        </h4>

        <p class="mb-4 text-justify">{{ $event->description }}</p>

        <p class="stext-108 cl6">{{ $event->price_associated }}€ asociados / {{ $event->price_no_asociated }}€ no asociados</p>
    </div>
</div> --}}

<x-container class="py-12">
    
    <div class="grid grid-cols-12 gap-8">

        <div class="col-span-7">
            <div class="card shadow-lg rounded-lg overflow-hidden bg-white">
                <div class="card-body px-8 py-6">

                    <div class="flex">

                        <figure>
                            <img class="w-48 h-28 object-cover object-center" src="{{asset($event->image)}}">
                        </figure>

                        <div class="ml-4 flex-1">
                            <h1 class="text-gray-700 font-semibold text-3xl">
                                {{ $event->name }}
                            </h1>

                            <p class="font-semibold text-sm text-gray-500">
                                {{ $event->price_no_asociated }}€
                            </p>
                        </div>
                    </div>

                    <hr class="my-4">

                    <p class="text-gray-700 text-sm">{{ $event->description }}</p>
                </div>
            </div>
        </div>

        <div class="col-span-5">
            @include('stripe')
        </div>
</x-container>
@endsection
