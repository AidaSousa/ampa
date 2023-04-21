<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        <div class="mx-auto max-w-screen-md text-center mb-4 lg:mb-6">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">MOI IMPORTANTE</h2>
            <p class="mb-5 font-light text-gray-500 sm:text-xl dark:text-gray-400">
                Para participar no servizo de comedor e madrugadores, así como nas actividades extraescolares, obradoiros, festas,  organizados pola ANPA ao longo do ano é necesario facerse socio/a a través deste formulario. 
            </p>
            <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">
                Unha vez enviado o formulario recibiredes un correo de confirmación.
                Para calquera dúbida ou dificultade  podedes enviarnos un correo a <a href="mailto:anpaesanjurjo@gmail.com">anpaesanjurjo@gmail.com</a>
            </p>
        </div>
    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
        <form action="{{ route('associated.store')}}" method="POST">
            <div class="mb-4">
                <label for="situacion" class="mb-2 text-sm font-medium text-gray-900 dark:text-white">Por favor, indica cal é a vosa situación</label>
                <select id="situacion" name="situacion" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    <option selected="">Seleccione a súa situación</option>
                    <option value="Alta-nueva">Alta nova</option>
                    <option value="Renovacion">Renovación</option>
                    <option value="Modificacion-datos">Modificación de datos</option>
                </select>
            </div>
            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                <div class="sm:col-span-2">
                    <label for="email_comunicacion_directa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Enderezo electrónico para recibir comunicacións xerais da ANPA (envío de información, avisos etc)</label>
                    <input type="email" name="email_comunicacion_directa" id="email_comunicacion_directa" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="">
                </div>
                <div class="mb-2">
                    <label for="beca_comedor" class="mb-2 text-sm font-medium text-gray-900 dark:text-white">Sodes solicitantes da beca comedor?</label>
                    <select id="beca_comedor" name="beca_comedor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option selected="">Seleccione a súa situación</option>
                        <option value="si">Si</option>
                        <option value="no">Non</option>
                    </select>
                    <div class="grid gap-4 sm:grid-cols-1 sm:gap-6">
                        <h4 class="flex-1 text-1xl tracking-tight font-extrabold text-gray-900 dark:text-white mt-4">DATOS NAI/PAI/TITOR/A 1</h4>
                        <div class="sm:col-span-2">
                            <label for="name_padre_madre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome</label>
                            <input type="text" name="name_padre_madre" id="name_padre_madre" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="">
                        </div>
                        <div class="sm:col-span-2">
                            <label for="surname_padre_madre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Apelidos</label>
                            <input type="text" name="surname_padre_madre" id="surname_padre_madre" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="">
                        </div>
                        <div class="sm:col-span-2">
                            <label for="dni" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">DNI/NIE</label>
                            <p class="font-light text-gray-500 sm:text-sm dark:text-gray-400">
                                DNI o NIE co seguinte formato 12345678X, o X1234567Z  caso do NIE
                            </p>
                            <input type="text" name="dni" id="dni" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="">
                        </div>
                        <div class="sm:col-span-2">
                            <label for="telefono" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Teléfono</label>
                            <input type="text" name="telefono" id="telefono" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="">
                        </div>
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="direccion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Direción</label>
                    <textarea id="direccion" name="direccion" rows="2" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Your description here"></textarea>
                </div>
                <div class="sm:col-span-2">
                    <label for="colaboracion_ampa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No caso de estar interesado/a en colaborar coa ANPA, qué consideras que podes aportar? En que área te gustaría axudar ? (festas, actividades, comedor, subvencións, horta...)</label>
                    <textarea id="colaboracion_ampa" name="colaboracion_ampa" rows="2" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder=></textarea>
                </div>
            <div class="flex-1 justify-end">
                <p>Tu suscripción actual está {{ $this->getCurrentSubscriptionStatus() ? 'activa' : 'inactiva' }}</p>


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
