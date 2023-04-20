@extends('layouts.layout')

@section('title', 'Formulario alta socio')

@section('content')



<div class="row">
    <div class="col-md-18 col-xl-4 p-b-30 m-lr-auto">
        <div class="block1 wrap-pic-w">
            <img src="img/anpa.png" alt="img">

            <h1>ALTA SOCIAS/OS ANPA 2022/23</h1>
            <p>C.E.I.P: TORRE DE HERCULES
                Rua Alcalde Sanjurjo, 4A, 15002, A Coruña
                anpaesanjurjo@gmail.com
                604 049 984
                http://bloganpaes.blogspot.com/.</p>

        </div>

        <div class="row justify-content-center">
            <div class="col-md-16">
                <div class="tile">
                    <h3 class="tile-title text-center m-5"></h3>
                    <div class="tile-body">
                        <form>
                            <div class="form-group">
                                <label class="control-label" for="">Por favor, indica cal é a vosa situación
                                </label>
                                <select class="form-control">
                                    <option value="Alta nova">Alta nova</option>
                                    <option value="Renovación">Renovación</option>
                                    <option value="modificación de datos">Modificación de datos</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Enderezo/s electrónico para recibir comunicacións xerais da ANPA (envío de información, avisos etc) Se poñedes varios separádeos cunha coma.
                                </label>
                                <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="correo electronico"><small class="form-text text-muted" id="emailHelp">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label>Sodes solicitantes da beca comedor?
                                </label>
                                <div class="form-check form-check-inline mr-1 form-check-label">
                                    <input class="form-check-input ml-1" type="radio" name="ampa" id="ampa_si" value="si" required>
                                    <label class="form-check-label" for="ampa_si">Si</label>
                                </div>
                                <div class="form-check form-check-inline mr-1 form-check-label">
                                    <input class="form-check-input ml-1" type="radio" name="ampa" id="ampa_no" value="no" required>
                                    <label class="form-check-label" for="ampa_no">Non</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <h3 class="control-label text-center m-5" for="">DATOS NAI/PAI/TITOR/A 1</h3>
                                <label class="control-label" for="">Apelidos</label>
                                <input class="form-control" type="text">
                                <label class="control-label" for="">Nome</label>
                                <input class="form-control" type="text">
                            </div>
                            <div class="form-group">
                                <label class="control-label">DNI/NIE
                                    *
                                    DNI o NIE co seguinte formato 12345678X, o X1234567Z caso do NIE
                                </label>
                                <input class="form-control" type="text" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">ENDEREZO ELECTRÓNICO (só para contacto directo, non para información Xeral)
                                </label>

                                <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="correo electronico"><small class="form-text text-muted" id="emailHelp">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="">Teléfono de contacto</label>
                                <input class="form-control" type="tel">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Direcion</label>
                                <textarea class="form-control" rows="2" placeholder=""></textarea>
                            </div>

                            <div class="form-group" style="text-align: justify">
                                <label class="control-label" for="">No caso de estar interesado/a en colaborar coa ANPA, qué consideras que podes aportar? En que área te gustaría axudar ? (festas, actividades, comedor, subvencións, horta...)</label>
                                <input class="form-control" type="text">
                            </div>

                            <div class="form-group">
                                <h3 class="control-label text-center m-5" for="">DATOS NAI/PAI/TITOR/A 2</h3>
                                <label class="control-label" for="">Apelidos</label>
                                <input class="form-control" type="text">
                                <label class="control-label" for="">Nome</label>
                                <input class="form-control" type="text">
                            </div>
                            <div class="form-group" style="text-align: justify">
                                <label class="control-label">DNI/NIE

                                    DNI o NIE co seguinte formato 12345678X, o X1234567Z caso do NIE
                                </label>
                                <input class="form-control" type="text" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">ENDEREZO ELECTRÓNICO (só para contacto directo, non para información Xeral)
                                </label>

                                <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="correo electronico"><small class="form-text text-muted" id="emailHelp">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="">Teléfono de contacto</label>
                                <input class="form-control" type="tel">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Direcion</label>
                                <textarea class="form-control" rows="2" placeholder=""></textarea>
                            </div>

                            <div class="form-group" style="text-align: justify">
                                <label class="control-label" for="">No caso de estar interesado/a en colaborar coa ANPA, qué consideras que podes aportar? En que área te gustaría axudar ? (festas, actividades, comedor, subvencións, horta...)</label>
                                <input class="form-control" type="text">
                            </div>

                            <div class="form-group">
                                <h3 class="control-label text-center m-5" for="">DATOS DOS/AS FILLOS/AS NO CENTRO</h3>
                                <label class="control-label" for="">Fillo/a 1- APELIDOS
                                </label>
                                <input class="form-control" type="text">
                                <label class="control-label" for="">Fillo/a 1 - NOME
                                </label>
                                <input class="form-control" type="text">
                                <div class="form-group">
                                    <label class="control-label" for="">Fillo/a 1- DATA NACEMENTO</label>
                                    <input class="form-control" type="date">
                                </div>
                                <div class="form-check">
                                    <label class="control-label">Fillo/a 1 - Curso (2021-22)
                                        Recordade que para Infantil os grupos son 4º, 5º y 6º</label>
                                    <select class="form-control">
                                        <option value="4_EI">4º EI</option>
                                        <option value="5_EI">5º EI</option>
                                        <option value="6_EI">6º EI</option>
                                        <option value="1_EP">1º EP</option>
                                        <option value="2_EP">2º EP</option>
                                        <option value="3_EP">3º EP</option>
                                        <option value="4_EP">4º EP</option>
                                        <option value="5_EP">5º EP</option>
                                        <option value="6_EP">6º EP</option>
                                    </select>
                                </div>
                            </div>
                    
                    <div class="form-group mt-3">
                        <label class="control-label" for="">Fillo/a 2- APELIDOS
                        </label>
                        <input class="form-control" type="text">
                        <label class="control-label" for="">Fillo/a 2 - NOME

                        </label>
                        <input class="form-control" type="text">
                        <div class="form-group">
                            <label class="control-label" for="">Fillo/a 2- DATA NACEMENTO</label>
                            <input class="form-control" type="date">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-check">
                            <label class="control-label">Fillo/a 2 - Curso (2021-22)
                                *
                                Recordade que para Infantil os grupos son 4º, 5º y 6º</label>
                            <select class="form-control">
                                <option value="4_EI">4º EI</option>
                                <option value="5_EI">5º EI</option>
                                <option value="6_EI">6º EI</option>
                                <option value="1_EP">1º EP</option>
                                <option value="2_EP">2º EP</option>
                                <option value="3_EP">3º EP</option>
                                <option value="4_EP">4º EP</option>
                                <option value="5_EP">5º EP</option>
                                <option value="6_EP">6º EP</option>

                            </select>

                        </div>

                        <div class="form-group mt-3">
                            <label class="control-label" for="">Fillo/a 3- APELIDOS
                            </label>
                            <input class="form-control" type="text">
                            <label class="control-label" for="">Fillo/a 3 - NOME

                            </label>
                            <input class="form-control" type="text">
                            <div class="form-group">
                                <label class="control-label" for="">Fillo/a 3- DATA NACEMENTO</label>
                                <input class="form-control" type="date">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <label class="control-label">Fillo/a 3 - Curso (2021-22)
                                    *
                                    Recordade que para Infantil os grupos son 4º, 5º y 6º</label>
                                <select class="form-control">
                                    <option value="4_EI">4º EI</option>
                                    <option value="5_EI">5º EI</option>
                                    <option value="6_EI">6º EI</option>
                                    <option value="1_EP">1º EP</option>
                                    <option value="2_EP">2º EP</option>
                                    <option value="3_EP">3º EP</option>
                                    <option value="4_EP">4º EP</option>
                                    <option value="5_EP">5º EP</option>
                                    <option value="6_EP">6º EP</option>
                                </select>

                                <div class="form-group mt-5" style="text-align: justify">
                                    <h1>AUTORIZACIONS</h1>
                                    <p>AUTORIZACIÓN DE PAGOS

                                        Co envío deste formulario, a ANPA Eduardo Sanjurjo está facultada para cargar o correspondente recibo anual ao socio/a da ANPA no curso académico 2022-23 así como os recibos correspondentes ás actividades xestionadas pola ANPA e outras actividades organizadas pola ANPA que implique unha contribución económica.

                                        A cota de participación é de 20 € por curso e por familia (independentemente do número de nenos/as no centro) + 5 € para o seguro de accidentes para actividades extraescolares e actividades propias organizadas pola ANPA.

                                        Lembrade que este seguro de accidentes da ANPA cubriría tanto as actividades extraescolares propias como calquera actividade organizada pola ANPA como festas, obradoiros, saídas, etc.


                                        Formas de pago:

                                        A forma de pago será preferentemente a domiciliación bancaria, o cargo pasarase no mes de Outubro de 2022. No caso de devolver un recibo, a comisión para a devolución do banco debe ser pagada pola familia.

                                        De non ser esta a opción elixida pola familia poderase facer transferencia bancaria ( IBAN ES28 2080 0039 1130 0001 3175) e remitir o xustificante por mail a anpaesanjurjo@gmail.com.

                                        No caso de que necesitese recibir os recibos nun determinado período (por exemplo, a partir do 5 do mes), indícao en "Observacións".</p>

                                </div>

                                <div class="form-group">
                                    <label>Domiciliación bancaria das cotas</label>

                                    <div class="form-check form-check-inline mr-1 form-check-label">
                                        <input class="form-check-input ml-1" type="radio" name="fotos" id="fotos_si" value="si">
                                        <label class="form-check-label" for="fotos_si">Si</label>
                                    </div>
                                    <div class="form-check form-check-inline mr-1 form-check-label">
                                        <input class="form-check-input ml-1" type="radio" name="fotos" id="fotos_no" value="no">
                                        <label class="form-check-label " for="fotos_no">Non</label>
                                    </div>

                                    <div class="form-group" style="text-align: justify">
                                        <label class="control-label" for="">NUMERO DE CONTA</label>
                                        <p>El IBAN ten o seguinte formato : ES12-1234-1234-1234-1234-1234. Prégase especial coidado en que o formato e número sexa o correcto, xa que os erros dificultan moito a xestión bancaria.</p>
                                        </label>
                                        <input class="form-control" type="tel">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Outra opción de pago (Indicar cal)</label>
                                        <textarea class="form-control" rows="1" placeholder=""></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Observacións</label>
                                        <textarea class="form-control" rows="2" placeholder=""></textarea>
                                        <p>Se enviará una copia de tus respuestas por correo electrónico a la dirección que has proporcionado.</p>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-custom btn-success" type="submit">ENVIAR</button>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection