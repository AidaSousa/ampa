<x-app-layout>

    <x-container class="py-12">

        
        @livewire('payment-method')
        <div class="mb-24 py-12">
            @livewire('subscription')
        </div>
        
        @livewire('invoices')

    </x-container>

</x-app-layout>