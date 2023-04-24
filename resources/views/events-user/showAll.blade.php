@if($eventUsers)
    <table class="table pb-6">
        <thead class="thead-dark">
            <tr>
                <th>Actividad</th>
                <th>Usuario</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Fecha nacimiento</th>
                <th>Curso</th>
                <th>Teléfono</th>
                <th>¿Matriculado?</th>
                <th>¿Comedor?</th>
                <th>¿Necesidades especiales?</th>
            </tr>
        </thead>
        <tbody>
            @foreach($eventUsers as $eventUser)
                <tr>
                    <td class="text-center">{{$eventUser->event->name}}</td>
                    <td class="text-center">{{$eventUser->user->name}}</td>
                    <td class="text-center">{{$eventUser->name_children}}</td>
                    <td class="text-center">{{$eventUser->surname_children}}</td>
                    <td class="text-center">{{$eventUser->birth_date}}</td>
                    <td class="text-center">{{$eventUser->school_year}}</td>
                    <td class="text-center">{{$eventUser->phone_contact}}</td>
                    <td class="text-center">{{$eventUser->matriculado_centro}}</td>
                    <td class="text-center">{{$eventUser->directo_comedor}}</td>
                    <td class="text-center">{{$eventUser->necesidades_especiales}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p>No se encontraron registros de actividades para este usuario.</p>
@endif
