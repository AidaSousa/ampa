
<div>
    @if (count($invoices) > 0)
        <div class="bg-white rounded shadow-lg px-8 py-6">
        <table class="w-full">
            <thead>
                <tr>
                    <th class="w-1/2 px-4 py-2 text-left">Fecha</th>
                    <th class="w-1/4 px-4 py-2 text-left">Total</th>
                    <th class="w-1/4 px-4 py-2 text-left">Descargar</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($invoices as $invoice)
                    <tr>
                        <td class="px-4 py-2">{{ $invoice->date()->toFormattedDateString() }}</td>
                        <td class="px-4 py-2">{{ $invoice->total() }}</td>
                        <td class="px-4 py-2"><a class="btn btn-blue" href="/user/invoice/{{ $invoice->id }}">Download</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    @endif
</div>
