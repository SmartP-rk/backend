<div>
    <form action="/vehicle/update/{{$vehicle->id}}" method="POST">
        @csrf
        <label for="">Motorista:</label>
        <input type="text" name="driver" id="" value="{{$vehicle->driver}}">
        <br>
        <label for="">Cor:</label>
        <input type="text" name="color" id="" value="{{$vehicle->color}}">
        <br>
        <label for="">Ano:</label>
        <input type="text" name="year" id="" value="{{$vehicle->year}}">
        <br>
        <label for="">Marca:</label>
        <input type="text" name="mark" id="" value="{{$vehicle->mark}}">
        <br>
        <label for="">Modelo:</label>
        <input type="text" name="model" id="" value="{{$vehicle->model}}">
        <br>
        <label for="">Categoria:</label>
        <input type="text" name="category" id="" value="{{$vehicle->category}}">
        <br>
        <label for="">Placa:</label>
        <input type="text" name="plate" id="" value="{{$vehicle->plate}}">
        <br>
        <br>
        <button type="submit">Editar</button>
    </form>
    <a href="/vehicles">Voltar</a>
</div>
