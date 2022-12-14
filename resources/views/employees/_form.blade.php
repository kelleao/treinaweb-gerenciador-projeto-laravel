@csrf

<div class="row mb-2">
    <div class="col-md-4">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input value="{{ old('nome', $employee->nome ?? '') }}" class="form-control" type="text" name="nome" id="nome" placeholder="Digite o nome">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="cpf">CPF</label>
            <input value="{{ old('cpf', $employee->cpf ?? '') }}" class="form-control" type="text" name="cpf" id="cpf" data-mask="000.000.000-00" placeholder="Digite o cpf">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="data_contratacao">Data Contratação</label>
            <input value="{{ old('data_contratacao', isset($employee->data_contratacao) ? date_to_br($employee->data_contratacao) : '') }}" class="form-control" type="text" name="data_contratacao" id="data_contratacao" data-mask="00/00/0000" placeholder="Digite a data de contratacao">
        </div>
    </div>
</div>

<div class="row mb-2">
    <div class="col-md-4">
        <div class="form-group">
            <label for="logradouro">Logradouro</label>
            <input value="{{ old('logradouro', $employee->address->logradouro ?? '') }}" class="form-control" type="text" name="logradouro" id="logradouro" maxlength="255" placeholder="Digite o logradouro">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="numero">Número</label>
            <input value="{{ old('numero', $employee->address->numero ?? '') }}" class="form-control" type="text" name="numero" id="numero" maxlength="20" placeholder="Digite o número">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="complemento">Complemento</label>
            <input value="{{ old('complemento', $employee->address->complemento ?? '') }}" class="form-control" type="text" name="complemento" id="complemento" maxlength="50" placeholder="Digite o complemento">
        </div>
    </div>
</div>

<div class="row mb-2">
    <div class="col-md-3">
        <div class="form-group">
            <label for="bairro">Bairro</label>
            <input value="{{ old('bairro', $employee->address->bairro ?? '') }}" class="form-control" type="text" name="bairro" id="bairro" maxlength="50" placeholder="Digite o bairro">
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="cidade">Cidade</label>
            <input value="{{ old('cidade', $employee->address->cidade ?? '') }}" class="form-control" type="text" name="cidade" id="cidade" maxlength="50" placeholder="Digite a cidade">
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="cep">CEP</label>
            <input value="{{ old('cep', $employee->address->cep ?? '') }}" class="form-control" type="text" name="cep" id="cep" data-mask="00000-000" placeholder="Digite o CEP">
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="estado">Estado</label>
            <input value="{{ old('estado', $employee->address->estado ?? '') }}" class="form-control" type="text" name="estado" id="estado" data-mask="SS" placeholder="Digite o estado">
        </div>
    </div>
</div>

<button class="btn btn-success" type="submit">Salvar</button>
