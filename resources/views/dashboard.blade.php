<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Entradas
        </h2>
    </x-slot>

    <br /><br />

    <div class="container">
        <div class="row">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Nuevo ingreso: </h2>
        </div>
        <br />
        <div class="row">
            <div class="col-md-6">
                <form action="{{ url('/nuevo-ingreso') }}" method="post" class="form-group">
                    @csrf
                    <label for="user">Usuario</label>
                    <input type="text" name="user" class="form-control" placeholder="Codigo identificador" id="">
                    <br />

                    <label for="temperatura">Temperatura</label>
                    <input type="number" name="temperatura" step=".01" id="" class="form-control" required>
                    <br />

                    <label for="fecha_hora">Fecha del ingreso</label>
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
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Tabla de ingresos: </h2>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Ultimo ingreso</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Email</th>
                    <th scope="col">Usuario ID</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($ultimos_ingresos as $ultimo_ingreso)
                        <tr>
                            <th scope="row">{{ $ultimo_ingreso->id }}</th>
                            <td>{{ $ultimo_ingreso->ultimo_ingreso }}</td>
                            <td>{{ $ultimo_ingreso->usuario->nombre }}</td>
                            <td>{{ $ultimo_ingreso->usuario->email }}</td>
                            <td>{{ $ultimo_ingreso->usuario->campo_identificador }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</x-app-layout>
