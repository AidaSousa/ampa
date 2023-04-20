<div>

    <section class="bg-white rounded shadow-lg mb-12">

        <div class="px-8 py-6">

            <h1 class="text-gray-700 text-lg font-semibold mb-4">Agregar método de pago</h1>

            <div class="flex" wire:ignore>

                <p class="text-gray-600 mr-6">Información de tarjeta</p>

                <div class="flex-1">

                    <input id="card-holder-name" class="form-control mb-4" placeholder="Nombre del titular de la tarjeta">

                    <!-- Stripe Elements Placeholder -->
                    <div id="card-element" class="form-control mb-2"></div>

                    <span id="card-error-message" class="text-red-600 text-sm">
                        
                    </span>

                </div>

            </div>

        </div>

        <footer class="px-8 py-6 bg-gray-50 border-gray-200">

            <div class="flex justify-end">

                <x-button id="card-button" data-secret="{{ $intent->client_secret }}">
                    Actualizar método de pago
                </x-button>

            </div>

        </footer>

    </section>

    <x-spinner size="8" wire:target="addPaymentMethod" wire:loading.flex />


    @if (count($paymentMethods))

        <section class="bg-white rounded shadow-lg">

            <header class="px-8 py-6 bg-gray-50 border-b border-gray-200">
                <h1 class="text-gray-700 text-lg font-semibold">Métodos de pago agregados</h1>
            </header>

            <div class="px-8 py-6">

                <ul class="divide-y divide-gray-200">

                    @foreach ($paymentMethods as $paymentMethod)

                        <li class="py-2 flex justify-between">
                            <div>
                                <p>
                                    <span class="font-semibold">{{$paymentMethod->billing_details->name}}</span> xxxx-{{$paymentMethod->card->last4}}

                                    @if ($this->defaultPaymentMethod->id == $paymentMethod->id)
                                        <span class="ml-2 bg-blue-100 text-blue-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">Predeterminado</span>
                                    @endif

                                </p>

                                <p>Expira: {{$paymentMethod->card->exp_month}}/{{$paymentMethod->card->exp_year}}</p>
                            </div>

                            @if($this->defaultPaymentMethod->id != $paymentMethod->id)
                                <div class="flex space-x-4">
                                    <button class="disabled:opacity-25" wire:click="defaultPaymentMethod('{{$paymentMethod->id}}')" wire:target="defaultPaymentMethod('{{$paymentMethod->id}}')" wire:loading.attr="disabled">
                                        <i class="fa-regular fa-star"></i>
                                    </button>

                                    <button class="disabled:opacity-25" wire:click="deletePaymentMethod('{{$paymentMethod->id}}')" wire:target="deletePaymentMethod('{{$paymentMethod->id}}')" wire:loading.attr="disabled">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </button>
                                </div>
                            @endif
                        </li>

                    @endforeach

                </ul>

            </div>

        </section>

    @endif

    @push('js')

        <script src="https://js.stripe.com/v3/"></script>

        <script>
            const stripe = Stripe("{{ env('STRIPE_KEY')}}");

            const elements = stripe.elements();
            const cardElement = elements.create('card');

            cardElement.mount('#card-element');
        </script>

        <script>
            const cardHolderName = document.getElementById('card-holder-name');
            const cardButton = document.getElementById('card-button');
            
            cardButton.addEventListener('click', async (e) => {

                cardButton.disabled = true;

                const clientSecret = cardButton.dataset.secret;


                const { setupIntent, error } = await stripe.confirmCardSetup(
                    clientSecret, {
                        payment_method: {
                            card: cardElement,
                            billing_details: { name: cardHolderName.value }
                        }
                    }
                );

                cardButton.disabled = false;
            
                if (error) {
                    // Display "error.message" to the user...

                    let span = document.getElementById('card-error-message');


                    span.textContent = error.message;
                } else {

                    cardHolderName.value = '';
                    cardElement.clear();

                    let span = document.getElementById('card-error-message');
                    span.textContent = '';
                    
                    @this.addPaymentMethod(setupIntent.payment_method);

                }
            });
        </script>

    @endpush

</div>
