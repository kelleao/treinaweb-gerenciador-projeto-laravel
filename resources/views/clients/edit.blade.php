@extends('app')

@section('titulo', 'Editar cliente')

@section('conteudo')
    <h1>Editar Cliente</h1>
        <form action="{{ route('clients.update', $client) }}" method="POST">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" value="{{ old('nome', $client->nome) }}" class="form-control" id="nome" name="nome" placeholder="Digite o nome" required>
            </div>
            <div class="mb-3">
                <label for="endereco" class="form-label">Endereço</label>
                <input type="text" value="{{ old('endereco', $client->endereco) }}" class="form-control" id="endereco" name="endereco" placeholder="Digite o endereço" required>
            </div>
            <div class="mb-3">
                <label for="observacao" class="form-label">Observação</label>
                <textarea class="form-control" id="observacao" name="observacao" rows="3" placeholder="Digite a observação" required>{{ old('observacao', $client->observacao) }}</textarea>
            </div>
            <button class="btn btn-success" type="submit">Enviar</button>
        </form>

@endsection

