@extends('layouts.layout')

@section('title', 'actividades Form')

@section('content')

<section class="bg-white dark:bg-gray-900">
  <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
  <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
      <form action="{{ route('events-user.store') }}" method="POST">
        {{ csrf_field() }}
          <div class="mb-4">
              <label for="event_id" class="mb-2 text-sm font-medium text-gray-900 dark:text-white">Actividades</label>
              <select id="event_id" name="event_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                  <option value="">Selecciona una actividad</option>
                @foreach ($events as $event)
                  <option value="{{ $event->id }}">{{ $event->name }} - {{$event->price_no_asociated}}€</option>
                  @endforeach
              </select>
              
          </div>
                  <div class="grid gap-4 sm:grid-cols-1 sm:gap-6">
                      <div class="sm:col-span-2">
                          <label for="name_children" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre del niño/a</label>
                          <input type="text" name="name_children" id="name_children" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="">
                      </div>
                      <div class="sm:col-span-2">
                          <label for="surname_children" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Apellidos del niño/a</label>
                          <input type="text" name="surname_children" id="surname_children" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="">
                      </div>
                      <div class="sm:col-span-2">
                          <label for="birth_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fecha de nacimiento del niño/a</label>
                          <input type="date" name="birth_date" id="birth_date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="">
                      </div>
                      <div class="mb-4">
                        <label for="school_year" class="mb-2 text-sm font-medium text-gray-900 dark:text-white">Curso escolar</label>
                        <select id="school_year" name="school_year" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                          <option value="">Selecciona un curso</option>
                          <option value="4_EI">4 años Educación Infantil</option>
                          <option value="5_EI">5 años Educación Infantil</option>
                          <option value="6_EI">6 años Educación Infantil</option>
                          <option value="1_EP">1º Educación Primaria</option>
                          <option value="2_EP">2º Educación Primaria</option>
                          <option value="3_EP">3º Educación Primaria</option>
                          <option value="4_EP">4º Educación Primaria</option>
                          <option value="5_EP">5º Educación Primaria</option>
                          <option value="6_EP">6º Educación Primaria</option>
                        </select>
                      </div>
                      <div class="sm:col-span-2">
                          <label for="phone_contact" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Teléfono de contacto</label>
                          <input type="text" name="phone_contact" id="phone_contact" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="">
                      </div>
                  </div>
                  <div class="mb-4">
                    <label for="matriculado_centro" class="mb-2 text-sm font-medium text-gray-900 dark:text-white">¿Está matriculado en el centro?</label>
                    <select id="matriculado_centro" name="matriculado_centro" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                      <option value="">Selecciona</option>
                      <option value="si">Si</option>
                      <option value="no">No</option>
                    </select>
                  </div>
                  <div class="mb-4">
                    <label for="directo_comedor" class="mb-2 text-sm font-medium text-gray-900 dark:text-white">¿Va directo al comedor?</label>
                    <select id="directo_comedor" name="directo_comedor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                      <option value="">Selecciona</option>
                      <option value="si">Si</option>
                      <option value="no">No</option>
                    </select>
                  </div>
                  <div class="mb-4">
                    <label for="necesidades_especiales" class="mb-2 text-sm font-medium text-gray-900 dark:text-white">¿Es un niño/a con necesidades especiales?</label>
                    <select id="necesidades_especiales" name="necesidades_especiales" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                      <option value="">Selecciona</option>
                      <option value="si">Si</option>
                      <option value="no">No</option>
                    </select>
                  </div>
                  <div class="flex-1 justify-end">
                    <button type="submit" class="btn btn-custom px-4"  style="background-color: #009688; color: white;">Enviar formulario</button>
                  </div>
              </div>
      </form>
  </div>
  </div>

</section>


@endsection