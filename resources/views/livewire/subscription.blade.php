<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        <div class="mx-auto max-w-screen-md text-center mb-4 lg:mb-6">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">MOI IMPORTANTE</h2>
            <p class="mb-5 font-light text-gray-500 sm:text-xl dark:text-gray-400">
                Para participar no servizo de comedor e madrugadores, así como nas actividades extraescolares, obradoiros, festas,  organizados pola ANPA ao longo do ano é necesario facerse socio/a. 
            </p>
            <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">
                Para calquera dúbida ou dificultade  podedes enviarnos un correo a <a href="mailto:anpaesanjurjo@gmail.com">anpaesanjurjo@gmail.com</a>
            </p>
        </div>
    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
        
            <div class="flex-1">



                @if(auth()->user()->subscribedToPrice('price_1MyCb0CNGUc1AmzpaqIyPyCb', 'Suscripcion Asociado'))

                @if (auth()->user()->subscription('Suscripcion Asociado')->onGracePeriod())

                    <x-secondary-button  class="justify-center" wire:click="resumeSubscription" wire:target="resumeSubscription" wire:loading.attr="disabled">

                        <x-spinner size="4" wire:target="resumeSubscription" wire:loading />

                        Reanudar
                    </x-secondary-button>

                @else

                    <x-danger-button wire:click="cancelSubscription" wire:target="cancelSubscription" wire:loading.attr="disabled">

                        <x-spinner size="4" wire:target="cancelSubscription" wire:loading />

                        Cancelar

                    </x-danger-button>

                @endif

            @else

                <x-button type="submit" style="background-color: #009688; color: white;" wire:click="newSubscription('price_1MyCb0CNGUc1AmzpaqIyPyCb')" class="justify-center" wire:target="newSubscription('price_1MyCb0CNGUc1AmzpaqIyPyCb')" wire:loading.attr="disabled">

                    <x-spinner size="4" wire:target="newSubscription('price_1MyCb0CNGUc1AmzpaqIyPyCb')" wire:loading />

                    Facerse socio
                </x-button>

            @endif
            <p class="text-gray-500 mt-2">Tu suscripción actual está {{ $this->getCurrentSubscriptionStatus() ? 'activa' : 'inactiva' }}</p>
            </div>
        </form>
    </div>
    </div>
  </section>



{{-- <div>
<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        <div class="mx-auto max-w-screen-md text-center mb-8 lg:mb-12">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Designed for business teams like yours</h2>
            <p class="mb-5 font-light text-gray-500 sm:text-xl dark:text-gray-400">Here at Flowbite we focus on markets where technology, innovation, and capital can unlock long-term value and drive economic growth.</p>
        </div>
        <div class="space-y-8 lg:grid lg:grid-cols-3 sm:gap-6 xl:gap-10 lg:space-y-0">
            <!-- Pricing Card -->
            <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                <h3 class="mb-4 text-2xl font-semibold">Starter</h3>
                <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400">Best option for personal use & for your next project.</p>
                <div class="flex justify-center items-baseline my-8">
                    <span class="mr-2 text-5xl font-extrabold">9.99€</span>
                    <span class="text-gray-500 dark:text-gray-400">/mensual</span>
                </div>
                <!-- List -->
                <ul role="list" class="mb-8 space-y-4 text-left">
                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>Individual configuration</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>No setup, or hidden fees</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>Team size: <span class="font-semibold">1 developer</span></span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>Premium support: <span class="font-semibold">6 months</span></span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>Free updates: <span class="font-semibold">6 months</span></span>
                    </li>
                </ul>

                @if(auth()->user()->subscribedToPrice('price_1MyCb0CNGUc1AmzpaqIyPyCb', 'Suscripcion Asociado'))

                    @if (auth()->user()->subscription('Suscripcion Asociado')->onGracePeriod())

                        <x-secondary-button class="justify-center" wire:click="resumeSubscription" wire:target="resumeSubscription" wire:loading.attr="disabled">

                            <x-spinner size="4" wire:target="resumeSubscription" wire:loading />

                            Reanudar
                        </x-secondary-button>

                    @else

                        <x-danger-button wire:click="cancelSubscription" wire:target="cancelSubscription" wire:loading.attr="disabled">

                            <x-spinner size="4" wire:target="cancelSubscription" wire:loading />

                            Cancelar

                        </x-danger-button>

                    @endif

                @else

                    <x-button wire:click="newSubscription('price_1MyCb0CNGUc1AmzpaqIyPyCb')" class="justify-center" wire:target="newSubscription('price_1MyCb0CNGUc1AmzpaqIyPyCb')" wire:loading.attr="disabled">

                        <x-spinner size="4" wire:target="newSubscription('price_1MyCb0CNGUc1AmzpaqIyPyCb')" wire:loading />

                        Suscribirse
                    </x-button>

                @endif
                
            </div>
            <!-- Pricing Card -->
            <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                <h3 class="mb-4 text-2xl font-semibold">Company</h3>
                <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400">Relevant for multiple users, extended & premium support.</p>
                <div class="flex justify-center items-baseline my-8">
                    <span class="mr-2 text-5xl font-extrabold">24.99€</span>
                    <span class="text-gray-500 dark:text-gray-400" dark:text-gray-400>/trimestral</span>
                </div>
                <!-- List -->
                <ul role="list" class="mb-8 space-y-4 text-left">
                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>Individual configuration</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>No setup, or hidden fees</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>Team size: <span class="font-semibold">10 developers</span></span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>Premium support: <span class="font-semibold">24 months</span></span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>Free updates: <span class="font-semibold">24 months</span></span>
                    </li>
                </ul>

                @if(auth()->user()->subscribedToPrice('price_1MyCb1CNGUc1Amzp5VBuAjDl', 'Suscripcion Asociado'))

                    @if (auth()->user()->subscription('Suscripcion Asociado')->onGracePeriod())

                        <x-secondary-button class="justify-center" wire:click="resumeSubscription" wire:target="resumeSubscription" wire:loading.attr="disabled">

                            <x-spinner size="4" wire:target="resumeSubscription" wire:loading />

                            Reanudar
                        </x-secondary-button>

                    @else

                        <x-danger-button wire:click="cancelSubscription" wire:target="cancelSubscription" wire:loading.attr="disabled">

                            <x-spinner size="4" wire:target="cancelSubscription" wire:loading />

                            Cancelar

                        </x-danger-button>

                    @endif

                @else

                    <x-button wire:click="newSubscription('price_1MyCb1CNGUc1Amzp5VBuAjDl')" class="justify-center" wire:target="newSubscription('price_1MyCb1CNGUc1Amzp5VBuAjDl')" wire:loading.attr="disabled">

                        <x-spinner size="4" wire:target="newSubscription('price_1MyCb1CNGUc1Amzp5VBuAjDl')" wire:loading />

                        Suscribirse

                    </x-button>

                @endif
            </div>
            <!-- Pricing Card -->
            <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                <h3 class="mb-4 text-2xl font-semibold">Enterprise</h3>
                <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400">Best for large scale uses and extended redistribution rights.</p>
                <div class="flex justify-center items-baseline my-8">
                    <span class="mr-2 text-5xl font-extrabold">79.99€</span>
                    <span class="text-gray-500 dark:text-gray-400">/anual</span>
                </div>
                <!-- List -->
                <ul role="list" class="mb-8 space-y-4 text-left">
                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>Individual configuration</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>No setup, or hidden fees</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>Team size: <span class="font-semibold">100+ developers</span></span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>Premium support: <span class="font-semibold">36 months</span></span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>Free updates: <span class="font-semibold">36 months</span></span>
                    </li>
                </ul>

                @if(auth()->user()->subscribedToPrice('price_1MyCb0CNGUc1Amzpo8aHmtxl', 'Suscripcion Asociado'))

                    @if (auth()->user()->subscription('Suscripcion Asociado')->onGracePeriod())

                        <x-secondary-button class="justify-center" wire:click="resumeSubscription" wire:target="resumeSubscription" wire:loading.attr="disabled">

                            <x-spinner size="4" wire:target="resumeSubscription" wire:loading />

                            Reanudar
                        </x-secondary-button>

                    @else

                        <x-danger-button wire:click="cancelSubscription" wire:target="cancelSubscription" wire:loading.attr="disabled">

                            <x-spinner size="4" wire:target="cancelSubscription" wire:loading />

                            Cancelar

                        </x-danger-button>

                    @endif

                @else

                    <x-button wire:click="newSubscription('price_1MyCb0CNGUc1Amzpo8aHmtxl')" class="justify-center" wire:target="newSubscription('price_1MyCb0CNGUc1Amzpo8aHmtxl')" wire:loading.attr="disabled">

                    <x-spinner size="4" wire:target="newSubscription('price_1MyCb0CNGUc1Amzpo8aHmtxl')" wire:loading />

                        Suscribirse

                    </x-button>

                @endif


            </div>
        </div>
    </div>
</section> --}}



@push('js')

    <script>

        Livewire.on('error', function(message) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: message,
            })
        })
    </script>

@endpush


</div>
