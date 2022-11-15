@extends('app')

@section('titulo', 'Detalhes do projetos')

@section('conteudo')
    <div class="card my-3">
        <h5 class="card-header">
            Detalhes do Projeto {{ $project->nome }}
        </h5>
            <div class="card-body">
                <p><strong>ID:</strong> {{ $project->id }}</p>
                <p><strong>Nome:</strong> {{ $project->nome }}</p>
                <p><strong>Cliente:</strong> {{ $project->client->nome }}</p>
                <br>
            </div>
    </div>

    <div class="card my-3">
        <h5 class="card-header">
            Funcionários que trabalham no projeto {{ $project->nome }}
        </h5>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($project->employees as $employee)
                            <tr>
                                <th scope="row">{{ $employee->id }}</th>
                                <td>{{ $employee->nome }}</td>
                            </tr>
                            @empty
                                <tr>
                                    <th>Nenhum funcionário alocado no Projeto</th>
                                </tr>
                                <tr></tr>
                        @endforelse
                    </tbody>
            </table>
        </div>
    </div>

        <a class="btn btn-success" href="{{ route('projects.index') }}">Voltar para lista</a>

@endsection

