<x-app-layout>

    <x-container class="py-12">
        {{-- <p>La fecha de inicio de la suscripción es: {{ $startDate }}</p>
        <div>EndDate: {{ dd($endDate) }}</div> --}}

        
        @livewire('payment-method')
        <div class="mb-24 py-12">
            @livewire('subscription')
        </div>
        
        @livewire('invoices')

    </x-container>

</x-app-layout>