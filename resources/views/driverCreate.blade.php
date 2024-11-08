<div>
    <form action="/driver" method="POST">
        @csrf
        <label for="">Nome:</label>
        <input type="text" name="name" id="">
        <br>
        <label for="">CPF:</label>
        <input type="text" name="cpf" id="">
        <br>
        <label for="">Telefone:</label>
        <input type="text" name="phone" id="">
        <br>
        <button title="Cadastrar Motorista" type="submit">Cadastrar</button>
    </form>
    <a href="/drivers">Voltar</a>
</div>
