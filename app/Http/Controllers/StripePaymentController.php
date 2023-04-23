<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Stripe;
     
class StripePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe($event)
    {
        $event = Event::findOrFail($event);
        return view('stripe', ['event' => $event]);
    }
    
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request, $event)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        $event = Event::findOrFail($event);
        $price_no_asociated = $event->price_no_asociated;

        $user = Auth::user();
    
        Stripe\Charge::create ([
                "amount" => $price_no_asociated * 100,
                "currency" => "eur",
                "source" => $request->stripeToken,
                "description" => "Test payment from itsolutionstuff.com." ,
                "metadata" => [
                    'user_id' => Auth::user()->id,
                    'user_name' => Auth::user()->name,
                    'activity_id' => $event->id,
                    'activity_name' => $event->name,
                ]
        ]);

        $payment = new Payment;
        $payment->user_id = $user->id;
        $payment->amount = $price_no_asociated;
        $payment->event_id = $event->id;
        $payment->save();


        Session::flash('success', '¡Pago completado con exito!');

        return redirect()->route('events-user.create');
    }

    public function index()
    {
        $payments = Payment::all();

        return view('payments.index', compact('payments'));
    }
}
    // public function stripePost(Request $request, $eventId)
    // {
    //     Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

    //     $event = Event::findOrFail($eventId);
    //     $price_no_asociated = $event->price_no_asociated;

    //     Stripe\Charge::create([
    //         'amount' => $price_no_asociated * 100,
    //         'currency' => 'eur',
    //         'source' => $request->stripeToken,
    //         'description' => 'Pago por actividad' . $event->name 
    //     ]);

    //     Session::flash('success', 'Pago realizado con éxito');

    //     return back();
    // }


