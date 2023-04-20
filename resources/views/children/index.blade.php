<div class="col-md-12">
    <div class="tile">
      <h4 class="mb-3">Mis hijos</h4>
      <div class="tile-body">
        <div class="table-responsive">
          <table class="table table-hover table-bordered" id="tableUsuarios">
            <thead>
              <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Fecha de nacimiento</th>
                <th>Año escolar</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
            @foreach($children as $child)
              <tr>
                <td>{{$child->name}}</td>
                <td>{{$child->surname}}</td>
                <td>{{$child->birth_date}}</td>
                <td>{{$child->school_year}}</td>
                <td>
                <div class="d-flex">
                  <a href="{{ route('children.edit', $child->id) }}" class="btn btn-sm btn-primary">Editar</a>                          </div>
                  <form method="POST" action="{{ route('children.destroy', $child->id) }}" style="display:inline">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                <div class="d-flex">
                  <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de que quieres eliminar este hijo?')">Eliminar</button>
                </div>
                  </form>
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>