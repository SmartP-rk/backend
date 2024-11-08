<div>
    <h1>Motoristas</h1>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>Telefone</th>
            </tr>
        </thead>
        <tbody>
            @isset($drivers)
                @forelse ($drivers as $driver)
                    <tr>
                        <td><a href="/driver/{{$driver->id}}">{{$driver->id}}</a></td>
                        <td>{{$driver->name}}</td>
                        <td>{{$driver->cpf}}</td>
                        <td>{{$driver->phone}}</td>
                        <td><a href="/driver/delete/{{$driver->id}}">Excluir</a></td>
                    </tr>
                @empty
                    <tr>
                        <td>Não há motoristas cadastrados</td>
                    </tr>
                @endforelse
            @endisset
        </tbody>
    </table>
    <a href="/driver">Cadastrar Motorista</a>
</div>
