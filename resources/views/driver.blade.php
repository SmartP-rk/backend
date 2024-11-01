<div>
    @isset($driver)
        <h1>{{$driver->name}}</h1>
        <ul>
            <li>{{$driver->cpf}}</li>
            <li>{{$driver->phone}}</li>
        </ul>
    @endisset
    <a href="/drivers">Voltar</a>
</div>
