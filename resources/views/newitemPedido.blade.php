@extends('gerencia')

@section('content')

    <form action="{{ route('itens_pedidos.store') }}" method="post">        
        @csrf

        <label for="idPedido">Número do Pedido:</label><br>
            <select id="idPedido" name="idPedido" required>
                <option selected>Selecione</option>
                @foreach ($pedidos as $pedido)
                    <option value="{{$pedido->idPedido}}">{{$pedido->idPedido}}</option>
                @endforeach  
            </select> 
            <br><br>
        <label for="idProduto">Nome do Produto:</label><br>
            <select id="idProduto" name="idProduto" required>
                <option selected>Selecione</option>
                @foreach ($produtos as $produto)
                    <option value="{{$produto->idProduto}}">{{$produto->descricao}}</option>
                @endforeach  
            </select> 
            <br><br>
        <label for="quant_vend">Quantidade a ser vendida:</label><br>
            <input type="number" name="quant_vend" required>
            <br><br>
        <input class="btn btn-primary" type="submit" value="Criar">
    </form>

@endsection