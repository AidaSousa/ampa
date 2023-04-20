<form method="POST" action="{{ route('children.update', ['id' => $children->id]) }}">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    <div>
        <h6 class="mb-0 mt-3">Nombre:</h6>
        <input class="form-control" type="text" name="name" id="name" required>
    </div>
    <div>
        <h6 class="mb-0 mt-3">Apellido:</h6>
        <input class="form-control" type="text" name="surname" id="surname" required>
    </div>
    <div>
        <h6 class="mb-0 mt-3">Fecha de nacimiento:</h6>
        <input class="form-control" type="date" name="birth_date" id="birth_date" required>
    </div>
    <div>
        <h6 class="mb-0 mt-3">Año escolar:</h6>
        <select class="form-control" name="school_year" id="school_year" required>
            <option class="form-control" value="4_EI">4º Educación Infantil</option>
            <option class="form-control" value="5_EI">5º Educación Infantil</option>
            <option class="form-control" value="6_EI">6º Educación Infantil</option>
            <option class="form-control" value="1_EP">1º de Educación Primaria</option>
            <option class="form-control" value="2_EP">2º de Educación Primaria</option>
            <option class="form-control" value="3_EP">3º de Educación Primaria</option>
            <option class="form-control" value="4_EP">4º de Educación Primaria</option>
            <option class="form-control" value="5_EP">5º de Educación Primaria</option>
            <option class="form-control" value="6_EP">6º de Educación Primaria</option>
        </select>
    </div>
    <div>
        <button class="btn btn-primary btn-custom px-4 mt-3" type="submit">Editar</button>
    </div>
</form>
