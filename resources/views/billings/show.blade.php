@extends('dashboard')

@section('title', 'Usuarios')

@section('content')

<div class="app-title">
    <div class="d-flex">
        <h1><i class="mx-2 fa fa-users"></i> Usuarios</h1>
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
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Email</th>
                                <th>DNI</th>
                                <th>Beca Comedor</th>
                                <th>Telefono</th>
                                <th>Dirección</th>
                                <th>Colaboracion Ampa</th>
                                <th>Pago</th>
                                <th>Fecha inicio</th>
                                <th>Fecha Fin</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($subscriptions as $subscription)
                                <tr>
                                    <td>{{ $subscription['user_name'] }}</td>
                                    <td>{{ $subscription['user_surname'] }}</td>
                                    <td>{{ $subscription['user_email'] }}</td>
                                    <td>{{ $subscription['user_dni'] }}</td>
                                    <td>{{ $subscription['user_beca_comedor'] }}</td>
                                    <td>{{ $subscription['user_telefono'] }}</td>
                                    <td>{{ $subscription['user_direccion'] }}</td>
                                    <td>{{ $subscription['user_colaboracion_ampa'] }}</td>
                                    <td>
                                        @if ($subscription['user_is_paid'])
                                            Activo
                                        @else
                                            Inactivo
                                        @endif
                                    </td>
                                    <td>{{ $subscription['start_date'] }}</td>
                                    <td>
                                        @if ($subscription['user_is_paid'] == false)
                                            {{ $subscription['end_date'] }}
                                        @else
                                            Renovación automatica
                                        @endif
                                    </td>
                                    <td>
                                        
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection