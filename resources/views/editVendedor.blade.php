@extends('gerencia')

@section('content')
    
    <form action="{{ route('vendedores.update', ['vendedor' => $vendedor->idVendedor]) }}" method="post">
        @csrf
        
        @method('PUT')

        <label for="">CPF:</label><br>
        <input type="text" name="cpf"  data-mask="000.000.000-00" value="{{ $vendedor->cpf }}">
        <br><br>
        <label for="">Nome:</label><br>
        <input type="text" name="nome" value="{{ $vendedor->nome }}">
        <br><br>
        <label for="">Endereço:</label><br>
        <input type="text" name="endereco" value="{{ $vendedor->endereco }}">
        <br><br>
        <label for="">Cidade:</label><br>
        <input type="text" name="cidade" value="{{ $vendedor->cidade }}">
        <br><br>
        <label for="">CEP:</label><br>
        <input type="text" name="cep" value="{{ $vendedor->cep }}">
        <br><br>
        <label for="">UF:</label><br>
        <input type="text" name="uf" value="{{ $vendedor->uf }}">
        <br><br>
        <label for="">DDD:</label><br>
        <input type="number" name="tel_ddd" value="{{ $vendedor->tel_ddd }}">
        <br><br>
        <label for="">Telefone:</label><br>
        <input type="text" name="tel_num" value="{{ $vendedor->tel_num }}">
        <br><br>
        <label for="">Salário Base:</label><br>
        <input type="number" name="sal_base" value="{{ $vendedor->sal_base }}">
        <br><br>
        <label for="">Taxa Comissão:</label><br>
        <input type="number" name="taxa_com" value="{{ $vendedor->taxa_com }}">
        <br><br>
        <input class="btn btn-primary" type="submit" value="Editar">
    </form>
    <br><br>
@endsection
