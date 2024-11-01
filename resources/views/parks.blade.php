<div>
    <h1>Estacionamentos</h1>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Proprietário</th>
                <th>CNPJ</th>
                <th>Telefone</th>
                <th>CEP</th>
                <th>Estado</th>
                <th>Cidade</th>
                <th>Bairro</th>
                <th>Rua</th>
                <th>Número</th>
                <th>Complemento</th>
                <th>Quantidade de Vagas</th>
            </tr>
        </thead>
        <tbody>
            @isset($parks)
                @forelse ($parks as $park)
                    <tr>
                        <td><a href="/park/{{$park->id}}">{{$park->id}}</a></td>
                        <td>{{$park->name}}</td>
                        <td>{{$park->proprietor}}</td>
                        <td>{{$park->cnpj}}</td>
                        <td>{{$park->phone}}</td>
                        <td>{{$park->zcode}}</td>
                        <td>{{$park->state}}</td>
                        <td>{{$park->city}}</td>
                        <td>{{$park->neighborhood}}</td>
                        <td>{{$park->street}}</td>
                        <td>{{$park->number}}</td>
                        <td>{{$park->complement}}</td>
                        <td>{{$park->vacancy_count}}</td>
                    </tr>
                @empty
                    <tr>
                        <td>Não há estacionamentos cadastrados</td>
                    </tr>
                @endforelse
            @endisset
        </tbody>
    </table>
</div>
