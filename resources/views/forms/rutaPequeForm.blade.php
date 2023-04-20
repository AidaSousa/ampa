@extends('layouts.layout')

@section('title', 'Formulario Peque Ruta')

@section('content')

<div class="row">
    <div class="col-md-16 col-xl-4 p-b-30 m-lr-auto">
        <div class="block1 wrap-pic-w">
            <img src="img/pequeruta-img.png" alt="Peque ruta">
            <h1>INSCRICIÓN PEQUERUTA DO SANJURJO. RÍO DOS DOUS NOMES. COIRÓS 1/6/2023</h1>
            <p class="text-justify">Saída a natureza para facer a ruta do Río dos dous nomes co obxectivo de pasar un día ao aire libre, compartir este espazo co resto das familias e aprender da natureza.

                Condicións:
                - Actividade gratuíta para familias socias da ANPA e con custe de 8 euros para as no socias
                - Cada neno ou nena irá acompañado dun adulto responsable.
                - Está previsto o servizo de autobús e guías especializados/as
                - Máximo de persoas inscritas por unidade familiar: 5
                - Asignación de prazas: por orde de inscrición.</p>
            <img src="img/img-5.jpg" alt="Peque ruta">
        </div>
        <div class="row justify-content-center">
            <div class="col-md-16">
                <div class="tile">
                    <h3 class="tile-title text-center m-5">FORMULARIO PEQUE-RUTA</h3>
                    <div class="tile-body">
                        <form action="" method="POST">
                            @csrf
                            <div class="form-group">
                                <label class="control-label" for="">Número total de persoas do grupo</label>
                                <select class="form-control">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Número total de menores de 12 años en el grupo</label>
                                <select class="form-control">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <h3 class="control-label text-center m-5" for="">Datos da persoa adulta responsable do grupo</h3>
                                <label class="control-label" for="">Nome e apelidos</label>
                                <input class="form-control" type="text">
                                <div class="form-group">
                                    <label class="control-label" for="">Data de nacemento</label>
                                    <input class="form-control" type="date">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">DNI</label>
                                <input class="form-control" type="text" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="">Teléfono de contacto</label>
                                <input class="form-control" type="tel">
                            </div>
                            <div class="form-group">
                                <h3 class="tile-title text-center m-5">DATOS DO RESTO DO GRUPO</h3>
                                <div class="form-group">
                                    <label class="control-label">Nome e apelidos</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label">Data do nacemento</label>
                                <input class="form-control" type="date">
                            </div>
                            <div class="form-group">
                                <label class="control-label">DNI</label>
                                <input class="form-control" type="text">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Teléfono de contacto</label>
                                <input class="form-control" type="tel">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-custom" type="submit" onclick="agregarFormulario()">AGREGAR PARTICIPANTE</button>
                            </div>
                            <div class="form-group" id="formularios-container">
                                <!-- Este div se usará para contener los formularios agregados -->
                            </div>
                    </div>
                    <hr class="mt-3">
                    <h3 class="tile-title text-center mt-5 mb-3">Condicións de participación</h3>
                    <h4 class="mt-3 mb-3">Debes aceptar as condicións de participación para que a inscrición sexa valida.</h4>
                    <div class="form-group">
                        <div class="form-check d-flex">
                            <label class="form-check-label"><br />
                                <input class="form-check-input mb-3" type="checkbox">Confirmo que no grupo se engade alomenos un menor de 12 anos.
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <label class="form-check-label"></br>
                                <input class="form-check-input" type="checkbox" required>Confirmo que no grupo existe unha persoa adulta responsable do grupo.
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <label class="form-check-label"></br>
                                <input class="form-check-input" type="checkbox" required>En todo momento as persoas cumpriran as instrucións das persoas guías da ruta
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <label class="form-check-label"></br>
                                <input class="form-check-input" type="checkbox" required>Confirmo que o grupo ten as condicións físicas e psíquicas adecuadas para desenvolver a actividad
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <label class="form-check-label"></br>
                                <input class="form-check-input" type="checkbox" required>Confirmo que aceptamos as bases de participación da actividade
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>A unidade familiar é socia da ANPA</label>
                        <div class="form-check form-check-inline mr-1 form-check-label">
                            <input class="form-check-input ml-1" type="radio" name="ampa" id="ampa_si" value="si" required>
                            <label class="form-check-label" for="ampa_si">Si</label>
                        </div>
                        <div class="form-check form-check-inline mr-1 form-check-label">
                            <input class="form-check-input ml-1" type="radio" name="ampa" id="ampa_no" value="no" required>
                            <label class="form-check-label" for="ampa_no">No</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Autorizo a publicación de fotos nas que aparecen persoas do grupo no blogue da ANPA</label>
                        <div class="form-check form-check-inline mr-1 form-check-label">
                            <input class="form-check-input ml-1" type="radio" name="fotos" id="fotos_si" value="si">
                            <label class="form-check-label" for="fotos_si">Si</label>
                        </div>
                        <div class="form-check form-check-inline mr-1 form-check-label">
                            <input class="form-check-input ml-1" type="radio" name="fotos" id="fotos_no" value="no">
                            <label class="form-check-label " for="fotos_no">No</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <label class="form-check-label"></br>
                                <input class="form-check-input" type="checkbox">Acepto los términos y condiciones
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-custom" type="submit" style="background-color: #009688;
    color: white;">ENVIAR</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>


<script>
    function agregarFormulario() {
        var formulario = `
        <div class="formulario">
            <div class="form-group">
            <label class="control-label">Nombre y apellidos</label>
            <input class="form-control" type="text">
            </div>
            <div class="form-group">
                <label class="control-label">Fecha de nacimiento</label>
                <input class="form-control" type="date">
            </div>
            <div class="form-group">
                <label class="control-label">DNI</label>
                <input class="form-control" type="text">
            </div>
            <div class="form-group">
                <label class="control-label">Teléfono de contacto</label>
                <input class="form-control" type="tel">
            </div>
        </div>
        `;
        // Crea un nuevo elemento div y agrega el formulario como HTML
        var nuevoFormulario = document.createElement("div");
        nuevoFormulario.innerHTML = formulario.trim();
        // Agrega el nuevo formulario al contenedor
        var contenedorFormularios = document.getElementById("formularios-container");
        contenedorFormularios.appendChild(nuevoFormulario.firstChild);
    }
</script>

@endsection