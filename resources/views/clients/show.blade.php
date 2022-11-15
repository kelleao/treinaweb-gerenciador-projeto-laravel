@extends('app')

@section('titulo', 'Detalhes do clientes')

@section('conteudo')
    <div class="card mt-3">
        <h5 class="card-header">
            Detalhes do Cliente {{ $client->nome }}
        </h5>
            <div class="card-body">
                <p><strong>ID:</strong> {{ $client->id }}</p>
                <p><strong>Nome:</strong> {{ $client->nome }}</p>
                <p><strong>Endereço:</strong> {{ $client->endereco }}</p>
                <p><strong>Observação:</strong> {{ $client->observacao }}</p>
                <br>
                <a class="btn btn-success" href="{{ route('clients.index') }}">Voltar para lista</a>
            </div>
    </div>
@endsection

