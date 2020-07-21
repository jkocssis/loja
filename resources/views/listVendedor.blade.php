@extends('gerencia')

@section('content')

    <h2>{{ $vendedor->nome }}</h2>
    <p><b>CPF:</b> {{ $vendedor->cpf }}</p>
    <p><b>Endereço:</b> {{ $vendedor->endereco }}</p>
    <p><b>Cidade:</b> {{ $vendedor->cidade }}</p>
    <p><b>CEP:</b> {{ $vendedor->cep }}</p>
    <p><b>UF:</b> {{ $vendedor->uf }}</p>
    <p><b>Telefone:</b> ({{ $vendedor->tel_ddd }}) {{ $vendedor->tel_num }}</p>
    <p><b>Data de Criação da conta:</b> {{ date('d/m/Y H:m', strtotime($vendedor->created_at)) }}</p>
    
@endsection

