@extends('layouts.layout')

@section('title', 'Banco Libros')

@section('content')

<div class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        <div class="mx-auto max-w-screen-md text-center mb-4 lg:mb-6">
            <h3 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">BANCO LIBROS "ENTRE FAMILIAS"</h3>
            <div class="tile-body text-justify">
                <p class="mb-5 font-light text-gray-500 sm:text-xl dark:text-gray-400">Os libros de texto correspondentes ao proxecto do Banco de Libros entre familias é unha iniciativa voluntaria. As familias reciben os libros como préstamo e devólvenos ao final de curso. Cada libro conta cunha pegatina e un selo da anpa para identificalos. O banco de libros cubre os cursos 3, 4, 5 e 6 de Educación Primaria.</p>

                <p class="mb-5 font-light text-gray-500 sm:text-xl dark:text-gray-400">Informarvos de varios aspectos a ter en conta en relación ao banco de libros entre familias para o curso escolar 23-24:</p>

                <ol class="mb-5 font-light text-gray-500 sm:text-xl dark:text-gray-400">
                    <li class="mb-1 font-light text-gray-500 sm:text-xl dark:text-gray-400">Debido ao cambio de libros nos cursos de 3º e 5º de Educación Primaria, o banco só se realizará para os cursos de 4º e 6º de Educación Primaria</li>
                    <li class="mb-3 font-light text-gray-500 sm:text-xl dark:text-gray-400">Este formulario é para as familias que queran recibir libros para o curso 2023-2024. (Se algunha o que quere e doar, pode poñerse en contacto con nos a través do mail anpaesanjurjo@gmail.com)</li>
                    <li class="mb-3 font-light text-gray-500 sm:text-xl dark:text-gray-400">Os criterios de entrega dos libros no caso de rexistrarse máis solicitudes do número de exemplares dos que se dispónson:
                    <li class="mb-3 font-light text-gray-500 sm:text-xl dark:text-gray-400">Terán prioridade no reparto aquelas familias que doasen libros ao banco</li>
                    <li class="mb-3 font-light text-gray-500 sm:text-xl dark:text-gray-400">Rigurosa orde de recepción dos formularios on line</li>
                </ol>

                <form action="{{ route('libros.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="padre_solicita" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome da nai/pai ou persoa titora que solicita doazón de libros</label>
                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" name="padre_solicita">
                    </div>
                    <div class="mb-3">
                        <label for="menor_solicita" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome do/a menor/es para os que se solicita libros</label>
                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" name="menor_solicita">
                    </div>
                    <div class="mb-3">
                        <label for="curso" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Solicito libros para o curso:</label>
                        <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" name="curso" required>
                            <option value="">Selecciona un curso</option>
                            <option value="4º E.P.">4 EP</option>
                            <option value="6º E.P.">6 EP</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="donado_libros" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Teño doado libros ao banco:</label>
                        <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" name="donado_libros" required>
                            <option value="">Selecciona un curso</option>
                            <option value="si">Si</option>
                            <option value="no">Non</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">COMPROMISOS:</label>
                        <ul>
                            <li class="mb-1 font-light text-gray-500 sm:text-xl dark:text-gray-400">Deterioro grave. Considérase mal uso ou deterioración do libro de texto:
                                <ol>
                                    <li class="mb-1 font-light text-gray-500 sm:text-xl dark:text-gray-400">Realizar exercicios nas propostas de actividades, os exercicios fanse nas libretas.</li>
                                    <li class="mb-1 font-light text-gray-500 sm:text-xl dark:text-gray-400">Escribir palabras e mensaxes en calquera formato.</li>
                                    <li class="mb-1 font-light text-gray-500 sm:text-xl dark:text-gray-400">Facer debuxos ou pór adhesivos.</li>
                                    <li class="mb-1 font-light text-gray-500 sm:text-xl dark:text-gray-400">Dobrar as follas para marcar os temas.</li>
                                    <li class="mb-1 font-light text-gray-500 sm:text-xl dark:text-gray-400">Ensuciar as páxinas con calquera produto. Evitar merendar ou comer diante dos libros.</li>
                                    <li class="mb-1 font-light text-gray-500 sm:text-xl dark:text-gray-400">Romper, engurrar ou mollar calquera folla do libro.</li>
                                </ol>
                            </li>

                        </ul>

                        <div>

                            <div class="form-group mt-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="tapa_libros" value="1"><label class="block mb-2 text-sm font-medium text-gray-600 dark:text-white"> OS LIBROS para preservar a súa conservación.</label> <br>
                                    <input class="form-check-input" type="checkbox" name="poner_nombre" value="1"><label class="block mb-2 text-sm font-medium text-gray-600 dark:text-white">POÑER O NOME ENRIBA DO FORRO, cun folio e celo (prohibido empregar etiquetas, nin escribir o nome dentro do libro)</label><br>
                                    <input class="form-check-input" type="checkbox" name="no_subrayado" value="1"><label class="block mb-2 text-sm font-medium text-gray-600 dark:text-white">SUPERVISAR QUE NON SE ESCRIBA, SUBLIÑE OU DEBUXE NOS LIBROS. (Importante concienciar @s nen@s).</label> <br>
                                    <input class="form-check-input" type="checkbox" name="reemplazar" value="1"><label class="block mb-2 text-sm font-medium text-gray-600 dark:text-white">REPOÑER OU PAGAR O/OS LIBRO/OS EN CASO DE DETERIORO GRAVE* OU PERDA. A negativa, suporá a baixa do banco na anualidade seguinte.</label><br>
                                    <input class="form-check-input" type="checkbox" name="devolver" value="1"><label class="block mb-2 text-sm font-medium text-gray-600 dark:text-white"> OS LIBROS AO FINAL DO CURSO.</label><br>
                                </div>
                            </div>

                            <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">DECLARACIÓN E CONFORMIDADE</label>
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="declaracion_leida" value="1"><label class="block mb-2 text-sm font-medium text-gray-600 dark:text-white"> ter lida toda a información sobre o Banco de libros "Entre familias" e a súa normativa, publicada no blogue http://bloganpaes.blogspot.com/</label> <br>
                                    <input class="form-check-input" type="checkbox" name="conforme" value="1"><label class="block mb-2 text-sm font-medium text-gray-600 dark:text-white">Estou conforme coas normas de uso do Banco de libros.</label><br>

                                </div>
                            </div>

                            <div class="form-group">
                                <button class="btn btn-custom" type="submit" style="background-color: #009688; color: white;">ENVIAR</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>

@endsection