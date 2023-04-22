@if($libros)
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>Padre solicita</th>
                <th>Menor solicita</th>
                <th>Curso</th>
                <th>Donado libros</th>
            </tr>
        </thead>
        <tbody>
            @foreach($libros as $libro)
                <tr>
                    <td>{{ $libro->padre_solicita }}</td>
                    <td>{{ $libro->menor_solicita }}</td>
                    <td>{{ $libro->curso }}</td>
                    <td>{{ $libro->donado_libros }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p>No se encontraron registros de libros para este usuario.</p>
@endif
