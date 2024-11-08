<div>
    @isset($vehicle)
        <h1>{{$vehicle->mark}}</h1>
        <ul>
            <li>{{$vehicle->driver}}</li>
            <li>{{$vehicle->color}}</li>
            <li>{{$vehicle->year}}</li>
            <li>{{$vehicle->model}}</li>
            <li>{{$vehicle->category}}</li>
            <li>{{$vehicle->plate}}</li>
        </ul>
    @endisset
    <a href="/vehicles">Voltar</a>
    <a href="/vehicleUpdate/{{$vehicle->id}}">Editar</a>
</div>
