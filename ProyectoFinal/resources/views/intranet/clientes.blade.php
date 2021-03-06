<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
            <nav>
                <ul style="position: absolute; right: 30px; top: 90px">
                <li style="display: inline;"><a href="/intranet/restaurante">Restaurante</a> |</li>
                <li style="display: inline;"><a href="/intranet/cliente">Cliente</a> |</li>
                <li style="display: inline;"><a href="/intranet/repartidor">Repartidor</a></li>
            </ul>
            </nav>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h3>Restaurantes</h3>

            </div>
        </div>
    </div>
</x-app-layout>
