<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <br /><br />

    <div class="container">
        <div class="row">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Nueva salida: </h2>
        </div>
        <br />
        <div class="row">
            <div class="col-md-6">
                <form action="{{ url('/nueva-salida') }}" method="post" class="form-group">
                    @csrf
                    <label for="user">Usuario</label>
                    <input type="text" name="user" class="form-control" placeholder="Codigo identificador" id="">
                    <br />

                    <label for="fecha_hora">Fecha de salida</label>
                    <input type="datetime-local" name="fecha_hora" step=".01" id="" class="form-control" required>
                    <br />

                    <button type="submit" class="btn btn-primary">Cargar</button>
                </form>
            </div>
        </div>
    </div>

    <br />
    <br />

    <div class="container">
        <div class="row">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Tabla de salidas: </h2>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Ultima salida</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Email</th>
                </tr>
                </thead>
                <tbody>
                @foreach($salidas as $salida)
                    <tr>
                        <th scope="row">{{ $salida->id }}</th>
                        <td>{{ $salida->ultimo_egreso }}</td>
                        <td>{{ $salida->usuario->nombre }}</td>
                        <td>{{ $salida->usuario->email }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

</x-app-layout>
