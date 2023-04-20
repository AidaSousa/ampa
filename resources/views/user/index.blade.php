@extends('dashboard')

@section('title', 'Index')

@section('content')


      <div class="app-title">
        <div class="d-flex">
          <h1><i class="fa fa-users"></i> Usuarios</h1>
          <a href="{{ route('associated.create') }}" class="btn btn-primary ml-3" type="button" onclick="openModal();"><i class="fa fa-plus"></i>Nuevo</a>
        </div>
      </div>
      
        <div class="row">
            <div class="col-md-12">
              <div class="tile">
                <div class="tile-body">
                  <div class="table-responsive">
                    <table class="table table-hover table-bordered" id="tableUsuarios">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Nombre</th>
                          <th>Apellidos</th>
                          <th>Email</th>
                          <th>Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Aida</td>
                          <td>Sousa Lozano</td>
                          <td>aida@aida.com</td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Noelia</td>
                          <td>Rilova Ayuso</td>
                          <td>noelia@noelia.com</td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>Arancha</td>
                          <td>Fernandez Fernandez</td>
                          <td>arancha@arancha.com</td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>Georgette</td>
                          <td>Velasco Aliss</td>
                          <td>georgette@georgette.com</td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>5</td>
                          <td>Ana</td>
                          <td>De la Vega</td>
                          <td>ana@ana.com</td>
                          <td></td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                </div>
              </div>
            </div>
        </div>
@include('user.create')
@endsection