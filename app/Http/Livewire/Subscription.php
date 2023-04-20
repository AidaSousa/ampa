<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Subscription extends Component
{

    public function getDefaultPaymentMethodProperty()
    {
        return auth()->user()->defaultPaymentMethod();
    }

    public function newSubscription($plan)
    {

        if(! $this->defaultPaymentMethod) {
            // session()->flash('error', 'No tienes un método de pago por defecto');

            $this->emit('error', 'No tienes un método de pago por defecto');
            
            return;
        }

        try {

            auth()->user()->newSubscription('Suscripcion Asociado', $plan)
            ->create($this->defaultPaymentMethod->id);

            $this->emit('newSubscription');

        } catch (\Exception $e) {
            
            $this->emit('error', __($e->getMessage()));
        }
    }

    public function cancelSubscription()
    {
        auth()->user()->subscription('Suscripcion Asociado')->cancel();
    }

    public function resumeSubscription()
    {
        auth()->user()->subscription('Suscripcion Asociado')->resume();
    }


    public function render()
    {
        return view('livewire.subscription');
    }
}
