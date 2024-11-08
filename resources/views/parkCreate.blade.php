<div>
    <h1>Cadastro de Estacionamentos</h1>
    <form action="{{route('park.add')}}" method="post">
        @csrf
        <label for="">Proprietário:</label>
        <input type="number" name="proprietor">
        <br>
        <label for="">CNPJ:</label>
        <input type="text" name="cnpj">
        <br>
        <label for="">Nome:</label>
        <input type="text" name="name">
        <br>
        <label for="">Telefone:</label>
        <input type="text" name="phone">
        <br>
        <label for="">CEP:</label>
        <input type="text" name="zcode">
        <br>
        <label for="">Estado:</label>
        <input type="text" name="state">
        <br>
        <label for="">Cidade:</label>
        <input type="text" name="city">
        <br>
        <label for="">Bairro:</label>
        <input type="text" name="neighborhood">
        <br>
        <label for="">Rua:</label>
        <input type="text" name="street">
        <br>
        <label for="">Número:</label>
        <input type="text" name="number">
        <br>
        <label for="">Complemento:</label>
        <input type="text" name="complement">
        <br>
        <label for="">Quantidade de Vagas:</label>
        <input type="number" name="vacancy_count">
        <br>
        <label for="">Image:</label>
        <input type="text" name="image">
        <br>
        <br>
        <button type="submit">Criar</button>
    </form>
    <a href="{{route('park.all')}}">Voltar</a>
</div>
