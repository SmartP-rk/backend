<div>
    @isset($park)
        <h1>{{$park->name}}</h1>
        <ul>
            <li>{{$park->proprietor}}</li>
            <li>{{$park->cnpj}}</li>
            <li>{{$park->phone}}</li>
            <li>{{$park->zcode}}</li>
            <li>{{$park->state}}</li>
            <li>{{$park->city}}</li>
            <li>{{$park->neighborhood}}</li>
            <li>{{$park->street}}</li>
            <li>{{$park->number}}</li>
            <li>{{$park->complement}}</li>
            <li>{{$park->vacancy_count}}</li>
        </ul>
    @endisset
    <a href="{{ route('park.all') }}">Voltar</a>
    <a href="{{ route('park.update.view', $park->id) }}">Editar</a>
</div>
