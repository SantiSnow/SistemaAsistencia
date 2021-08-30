<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Ultimo ingreso</th>
                <th scope="col">Nombre</th>
                <th scope="col">Email</th>
                <th scope="col">Departamento</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                @foreach($ultimos_ingresos as $ultimo_ingreso)
                    <th scope="row">{{ $ultimo_ingreso->id }}</th>
                    <td>{{ $ultimo_ingreso }}</td>
                    <td>{{ $ultimo_ingreso->user->name }}</td>
                    <td>{{ $ultimo_ingreso->user->email }}</td>
                    <td>{{ $ultimo_ingreso->user->departamento->nombre }}</td>
                @endforeach
            </tr>
            </tbody>
        </table>
    </div>
</x-app-layout>
