<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Laravel\Cashier\Cashier;
use Laravel\Cashier\Subscription;

class BillingController extends Controller
{
    public function index()
    {
        return view('billings.index');
    }

    public function showAll()
    {
        $users = User::all();
        
        $subscritions = collect();

        foreach ($users as $user) {
        
            $subscrition = $user->subscription('Suscripcion Asociado');

            $endDate = '';

            if (!$subscrition->is_paid) {
                $endDate = $subscrition->ends_at->format('d-m-Y');
            }

            $subscritions->push([
                'user_id' => $user->id,
                'user_name' => $user->name,
                'user_surname' => $user->surname,
                'user_email' => $user->email,
                'user_dni' => $user->dni,
                'user_beca_comedor' => $user->beca_comedor,
                'user_telefono' => $user->telefono,
                'user_direccion' => $user->direccion,
                'user_colaboracion_ampa' => $user->colaboracion_ampa,
                'user_is_paid' => $user->is_paid,
                'start_date' => $subscrition->created_at->format('d-m-Y'),
                'end_date' => $endDate,
            ]);
            }
        

        return view('billings.show', ['subscriptions' => $subscritions]);
    }
}
