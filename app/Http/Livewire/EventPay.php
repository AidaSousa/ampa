<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EventPay extends Component
{

    public $event;
    public $paymentMethodId;

    public function mount()
    {
        if (auth()->user()->hasDefaultPaymentMethod()) {

            $this->paymentMethodId = $this->defaultPaymentMethod->id;
        }
    }

    public function getDefaultPaymentMethodProperty()
    {
        return auth()->user()->defaultPaymentMethod();
    }

    public function purchase()
    {
        auth()->user()->charge($this->event->price_associated, $this->paymentMethodId);

        dd('Compra realizada con exito!');

    }

    // public function purchase()
    // {
    //     $price = auth()->user()->is_paid ? $this->event->price_associated : $this->event->price_no_asociated;
    //     auth()->user()->charge($price * 100, $this->paymentMethodId);

    //     dd('Compra realizada con exito!');
    // }


    public function render()
    {
        return view('livewire.event-pay', [
            'paymentMethods' => auth()->user()->paymentMethods()
        ]);
    }
}
