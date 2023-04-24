@extends('layouts.layout')

@section('title', 'Actividades')

@section('content')
<x-container class="py-12">
        
    <div class="grid grid-cols-3 gap-6">

        @foreach($events as $event)

            <div class="bg-white rounded shadow-lg">
                <div class="h-56 bg-cover bg-center p-4" style="background-image: url({{$event->image}});">
                    <span class="bg-blue-100 text-blue-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">{{$event->price_no_asociated}} €</span>
                </div>

                <div class="px-6 py-4">
                    <a href="{{ route ('events.show', $event) }}" class="text-gray-900 font-semibold text-xl text-uppercase">
                        {{$event->name}}
                    </a>

                    <p>{{Str::limit($event->description, 150 )}}</p>
                </div>
            </div>
        @endforeach
    </div>

</x-container>
@endsection