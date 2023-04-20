@extends('layouts.layout')

@section('title', 'Banco Libros')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
        <div class="tile">
            <h3 class="tile-title text-center mb-4">BANCO LIBROS "ENTRE FAMILIAS"</h3>
            <div class="tile-body text-justify">
                <p>Os libros de texto correspondentes ao proxecto do Banco de Libros entre familias é unha iniciativa voluntaria. As familias reciben os libros como préstamo e devólvenos ao final de curso. Cada libro conta cunha pegatina e un selo da anpa para identificalos. O banco de libros cubre os cursos 3, 4, 5 e 6 de Educación Primaria.</p>

                <p>Informarvos de varios aspectos a ter en conta en relación ao banco de libros entre familias para o curso escolar 23-24:</p>

                <ol>
                    <li>Debido ao cambio de libros nos cursos de 3º e 5º de Educación Primaria, o banco só se realizará para os cursos de 4º e 6º de Educación Primaria</li>
                    <li>Este formulario é para as familias que queran recibir libros para o curso 2023-2024. (Se algunha o que quere e doar, pode poñerse en contacto con nos a través do mail anpaesanjurjo@gmail.com)</li>
                    <li>Os criterios de entrega dos libros no caso de rexistrarse máis solicitudes do número de exemplares dos que se dispónson:
                    <li>Terán prioridade no reparto aquelas familias que doasen libros ao banco</li>
                    <li>Rigurosa orde de recepción dos formularios on line</li>
                </ol>

                <form action="" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo *</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="nombre-tutor" class="form-label">Nome da nai/pai ou persoa titora que solicita doazón de libros</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="nombre-nino" class="form-label">Nome do/a menor/es para os que se solicita libros</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="curso" class="form-label">Solicito libros para o curso:</label>
                        <select class="form-select" required>
                            <option value="">Selecciona un curso</option>
                            <option value="4 EP">4 EP</option>
                            <option value="6 EP">6 EP</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Teño doado libros ao banco</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="donado" id="donado-si" value="1">
                            <label class="form-check-label" for="donado-si">
                                Sí
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="donado" id="donado-no" value="0" checked>
                            <label class="form-check-label" for="donado-no">
                                Non
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">COMPROMISOS:</label>
                        <ul>
                            <li>Deterioro grave. Considérase mal uso ou deterioración do libro de texto:
                                <ol>
                                    <li>Realizar exercicios nas propostas de actividades, os exercicios fanse nas libretas.</li>
                                    <li>Escribir palabras e mensaxes en calquera formato.</li>
                                    <li>Facer debuxos ou pór adhesivos.</li>
                                    <li>Dobrar as follas para marcar os temas.</li>
                                    <li>Ensuciar as páxinas con calquera produto. Evitar merendar ou comer diante dos libros.</li>
                                    <li>Romper, engurrar ou mollar calquera folla do libro.</li>
                                </ol>
                            </li>

                        </ul>

                        <div>

                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">FORRAR OS LIBROS para preservar a súa conservación. <br>
                                    <input class="form-check-input" type="checkbox">POÑER O NOME ENRIBA DO FORRO, cun folio e celo (prohibido empregar etiquetas, nin escribir o nome dentro do libro)<br>
                                    <input class="form-check-input" type="checkbox">SUPERVISAR QUE NON SE ESCRIBA, SUBLIÑE OU DEBUXE NOS LIBROS. (Importante concienciar @s nen@s). <br>
                                    <input class="form-check-input" type="checkbox">REPOÑER OU PAGAR O/OS LIBRO/OS EN CASO DE DETERIORO GRAVE* OU PERDA. A negativa, suporá a baixa do banco na anualidade seguinte.<br>
                                    <input class="form-check-input" type="checkbox">DEVOLVER OS LIBROS AO FINAL DO CURSO.<br>
                                    </label>
                                </div>
                            </div>

                            <label class="form-label">DECLARACIÓN E CONFORMIDADE</label>
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">Declaro ter lida toda a información sobre o Banco de libros "Entre familias" e a súa normativa, publicada no blogue http://bloganpaes.blogspot.com/ <br>
                                    <input class="form-check-input" type="checkbox">Estou conforme coas normas de uso do Banco de libros.<br>

                                    </label>
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