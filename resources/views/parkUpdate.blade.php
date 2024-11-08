<div>
    <h1>Editar Estacionamentos</h1>
    <form action="{{ route('park.update', $park->id) }}" method="post">
        @csrf
        <label for="">Proprietário:</label>
        <input type="number" name="proprietor" value="{{$park->proprietor}}">
        <br>
        <label for="">CNPJ:</label>
        <input type="text" name="cnpj" value="{{$park->cnpj}}">
        <br>
        <label for="">Nome:</label>
        <input type="text" name="name" value="{{$park->name}}">
        <br>
        <label for="">Telefone:</label>
        <input type="text" name="phone" value="{{$park->phone}}">
        <br>
        <label for="">CEP:</label>
        <input type="text" name="zcode" value="{{$park->zcode}}">
        <br>
        <label for="">Estado:</label>
        <input type="text" name="state" value="{{$park->state}}">
        <br>
        <label for="">Cidade:</label>
        <input type="text" name="city" value="{{$park->city}}">
        <br>
        <label for="">Bairro:</label>
        <input type="text" name="neighborhood" value="{{$park->neighborhood}}">
        <br>
        <label for="">Rua:</label>
        <input type="text" name="street" value="{{$park->street}}">
        <br>
        <label for="">Número:</label>
        <input type="text" name="number" value="{{$park->number}}">
        <br>
        <label for="">Complemento:</label>
        <input type="text" name="complement" value="{{$park->complement}}">
        <br>
        <label for="">Quantidade de Vagas:</label>
        <input type="number" name="vacancy_count" value="{{$park->vacancy_count}}">
        <br>
        <label for="">Image:</label>
        <input type="text" name="image" value="{{$park->image}}">
        <br>
        <br>
        <button type="submit">Editar</button>
    </form>
    <a href="{{ route('park.all') }}">Voltar</a>
</div>
