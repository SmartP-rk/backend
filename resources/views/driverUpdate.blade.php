<div>
    <h1>Editar Motorista</h1>
    <form action="/driver/update/{{$driver->id}}" method="post">
        @csrf
        <label for="">Nome:</label>
        <input type="text" name="name" value="{{$driver->name}}">
        <br>
        <label for="">CPF:</label>
        <input type="text" name="cpf" value="{{$driver->cpf}}">
        <br>
        <label for="">Telefone:</label>
        <input type="text" name="phone" value="{{$driver->phone}}">
        <br>
        <br>
        <button type="submit">Editar</button>
    </form>
    <a href="/drivers">Voltar</a>
</div>
