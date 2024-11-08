<div>
    <form action="/vehicle" method="POST">
        @csrf
        <label for="">Motorista:</label>
        <input type="text" name="driver" id="">
        <br>
        <label for="">Cor:</label>
        <input type="text" name="color" id="">
        <br>
        <label for="">Ano:</label>
        <input type="text" name="year" id="">
        <br>
        <label for="">Marca:</label>
        <input type="text" name="mark" id="">
        <br>
        <label for="">Modelo:</label>
        <input type="text" name="model" id="">
        <br>
        <label for="">Categoria:</label>
        <input type="text" name="category" id="">
        <br>
        <label for="">Placa:</label>
        <input type="text" name="plate" id="">
        <br>
        <br>
        <button type="submit">Cadastrar</button>
    </form>
    <a href="/vehicles">Voltar</a>
</div>
