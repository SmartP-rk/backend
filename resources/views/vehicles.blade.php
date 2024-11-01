<div>
    <h1>Veículos</h1>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Motorista</th>
                <th>Cor</th>
                <th>Ano</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Categoria</th>
                <th>Placa</th>
            </tr>
        </thead>
        <tbody>
            @isset($vehicles)
                @forelse ($vehicles as $vehicle)
                    <tr>
                        <td><a href="/vehicle/{{$vehicle->id}}">{{$vehicle->id}}</a></td>
                        <td>{{$vehicle->driver}}</td>
                        <td>{{$vehicle->color}}</td>
                        <td>{{$vehicle->year}}</td>
                        <td>{{$vehicle->mark}}</td>
                        <td>{{$vehicle->model}}</td>
                        <td>{{$vehicle->category}}</td>
                        <td>{{$vehicle->plate}}</td>
                    </tr>
                @empty
                    <tr>
                        <td>Não há veiculos cadastrados</td>
                    </tr>
                @endforelse
            @endisset
        </tbody>
    </table>
</div>
