@extends('dashboard')

@section('title', 'Pagos')
    
@section('content')
<div class="app-title">
    <div class="d-flex">
        <h1><i class="mx-2 fa fa-calendar"></i> Pagos</h1>
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
                                <th>Usuario</th>
                                <th>Cantidad</th>
                                <th>Actividad</th>
                                <th>Fecha</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($payments as $payment)
                                <tr>
                                    <td>{{$payment->user->name}}</td>
                                    <td>{{$payment->amount}}</td>
                                    <td>{{$payment->event->name}}</td>
                                    <td>{{$payment->created_at}}</td>
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