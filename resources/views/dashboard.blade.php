<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
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
                    <select name="user" id="" class="form-control" required>
                        @foreach($users as $user)
                            <option value="{{ $user->id }}">{{ $user->nombre }}</option>
                        @endforeach
                    </select>
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
    </div>

</x-app-layout>
