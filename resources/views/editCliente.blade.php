@extends('gerencia')

@section('content')
    
    <form action="{{ route('clientes.update', ['cliente' => $cliente->idCliente]) }}" method="post">
        @csrf
        
        @method('PUT')

        <label for="">CPF:</label><br>
        <input type="text" name="cpf" value="{{ $cliente->cpf }}" class="form-control" placeholder="Ex.: 000.000.000-00" data-mask="000.000.000-00" maxlength="10" autocomplete="off">
        <br><br>
        <label for="">Nome:</label><br>
        <input type="text" name="nome" value="{{ $cliente->nome }}">
        <br><br>
        <label for="">Endereço:</label><br>
        <input type="text" name="endereco" value="{{ $cliente->endereco }}">
        <br><br>
        <label for="">Cidade:</label><br>
        <input type="text" name="cidade" value="{{ $cliente->cidade }}">
        <br><br>
        <label for="">CEP:</label><br>
        <input type="text" name="cep" value="{{ $cliente->cep }}">
        <br><br>
        <label for="">UF:</label><br>
        <input type="text" name="uf" value="{{ $cliente->uf }}">
        <br><br>
        <label for="">DDD:</label><br>
        <input type="number" name="tel_ddd" value="{{ $cliente->tel_ddd }}">
        <br><br>
        <label for="">Telefone:</label><br>
        <input type="text" name="tel_num" value="{{ $cliente->tel_num }}">
        <br><br>
        <label for="">Limite de Crédito:</label><br>
        <input type="number" name="lim_cred" value="{{ $cliente->lim_cred }}">
        <br><br>
        <label for="">Limite Disponível:</label><br>
        <input type="number" name="lim_disp" value="{{ $cliente->lim_disp }}">
        <br><br>
        <input class="btn btn-primary" type="submit" value="Editar">
    </form>
    <br><br>
@endsection
