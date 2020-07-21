@extends('gerencia')

@section('content')

    <h2>{{ $cliente->nome }}</h2>
    <p><b>CPF:</b> {{ $cliente->cpf }}</p>
    <p><b>Endereço:</b> {{ $cliente->endereco }}</p>
    <p><b>Cidade:</b> {{ $cliente->cidade }}</p>
    <p><b>CEP:</b> {{ $cliente->cep }}</p>
    <p><b>UF:</b> {{ $cliente->uf }}</p>
    <p><b>Telefone:</b> ({{ $cliente->tel_ddd }}) {{ $cliente->tel_num }}</p>
    <p><b>Data de Criação da conta:</b> {{ date('d/m/Y H:m', strtotime($cliente->created_at)) }}</p>

@endsection
