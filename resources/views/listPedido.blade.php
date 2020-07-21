@extends('gerencia')

@section('content')

    @php
        $cliente = $pedido->find($pedido->idCliente)->relCliente;
        $vendedor = $pedido->find($pedido->idVendedor)->relVendedor;
        //$item_pedido = $pedido->find($pedido->)
    @endphp

    <h3>Número do Pedido: {{ $pedido->idPedido }}</h3>
    <p><b>Nome do Vendedor:</b> {{ $vendedor->nome }}</p>
    <p><b>Nome do Cliente:</b> {{ $cliente->nome }}</p>
    <p><b>Status do Pedido:</b> {{ $pedido->status }}</p>
    <p><b>Data de Criação do pedido:</b> {{ date('d/m/Y H:m', strtotime($pedido->created_at)) }}</p>

    <!-- ITEM PEDIDO  -->

    <!-- NAO CONSEGUIMOS INSERIR OS ITENS PEDIDOS CORRESPONDENTES AO PEDIDO; FOI FEITO EM OUTRA VIEW -->    

    <!-- ITEM PEDIDO  -->

@endsection