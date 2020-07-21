@extends('gerencia')

@section('content')

    <form action="{{ route('pedidos.update', ['pedido' => $pedido->idPedido]) }}" method="post">        
        @csrf

        @method('PUT')

        <h3>Número do Pedido: {{ $pedido->idPedido }}</h3>
        <br><br>
        <label for="idCliente">Nome do Cliente:</label><br>
        <input type="number" name="idCliente" value="{{ $pedido->idCliente }}">
        <br><br>
        <label for="idVendedor">Nome do Vendedor:</label><br>
        <input type="number" name="idVendedor" value="{{ $pedido->idVendedor }}">
        <br><br>
        <label for="status">Status do Pedido:</label><br>
        <input type="text" name="status" value="{{ $pedido->status }}">
        <br><br>
        <input class="btn btn-primary" type="submit" value="Atualizar">
    </form>

@endsection