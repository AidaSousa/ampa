<x-app-layout>

    <x-container class="py-12">

        @livewire('subscription')

        <div class="mb-24">
            @livewire('payment-method')
        </div>
        
        @livewire('invoices')

    </x-container>

</x-app-layout>