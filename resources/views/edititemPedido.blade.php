@extends('gerencia')

@section('content')

    <!-- NAO FUNCIONA O ACTION: route('itens_pedidos.update', ['itens_pedido' => $itemPedido->id]) -->
    <form action="" method="post"> 
        @csrf
        
        @method('PUT')

        <label for="idPedido">Número do Pedido:</label><br>
        <input type="text" name="idPedido" value="{{ $itemPedido->idPedido }}">
        <br><br>
        <label for="idProduto">Nome do Produto:</label><br>
        <input type="number" name="idProduto" value="{{ $itemPedido->idProduto }}">
        <br><br>
        <label for="quant_vend">Quantidade a ser vendida:</label><br>
        <input type="text" name="quant_vend" value="{{ $itemPedido->quant_vend }}">
        <br><br> 
        <input class="btn btn-primary" type="submit" value="Editar">
    </form>
    <br><br>
@endsection