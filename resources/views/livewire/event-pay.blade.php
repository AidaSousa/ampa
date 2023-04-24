<div>
    
    <div class="card shadow-lg rounded-lg overflow-hidden bg-white">
        <div class="card-body px-8 py-6">

            <div class="flex justify-between items-center mb-4">
                <h1 class="text-lg font-semibold text-gray-700">Método de pago</h1>
                <img class="h-8" src="\img\credit-cards2.png" alt="">
            </div>

            <ul class="mb-4"> 
                @foreach ($paymentMethods as $paymentMethod) 
                    
                     <li>
                        <label>
                            <input wire:model="paymentMethodId" class="mr-2 border-solid" type="radio" name="paymentMethod" value="{{$paymentMethod->id}}">

                            {{ $paymentMethod->billing_details->name}}
                            (xxxx-{{ $paymentMethod->card->last4 }})

                            @if ($this->defaultPaymentMethod->id == $paymentMethod->id)
                                <span class="ml-2 bg-blue-100 text-blue-800 text-xs font-medium mr-2 px-2.py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">Predeterminado</span>
                            @endif
                        </label>
                    </li> 

                 @endforeach 
             </ul>

            <x-danger-button wire:click="purchase">
                Pagar
            </x-danger-button>

        </div>
    </div>

</div>

