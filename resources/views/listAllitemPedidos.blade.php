@extends('gerencia')

@section('content')

    <a href="{{ route('itens_pedidos.create') }}">
        <button type="button" class="btn btn-primary">Adicionar Item</button>
    </a>
    <br><br>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">NÚMERO DO PEDIDO</th>
                <th scope="col">NOME DO PRODUTO</th>
                <th scope="col">QUANTIDADE VENDIDA</th>
                <th scope="col">PREÇO UNITÁRIO</th>
                <th scope="col">PREÇO TOTAL</th>                
                <th scope="col">AÇÕES</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>            
            @foreach($item_pedidos as $item_pedido)
                @php
                    $produto = $item_pedido->find($item_pedido->idProduto)->relProduto;   
                @endphp
                <tr>
                    <th scope="row">{{ $item_pedido->idPedido }}</th>
                    <td>{{ $produto->descricao }}</td>
                    <td>{{ $item_pedido->quant_vend }}</td>
                    <td>{{ $produto->preco_unit }}</td>
                    <td>{{ $item_pedido->quant_vend * $produto->preco_unit }}</td>
                    <td><a href="{{ route('itens_pedidos.edit', ['itens_pedido' => $item_pedido->id]) }}" title="NAO FUNCIONA: ATUALIZAR"><i class="fas fa-redo"></i></a></td>
                    <td>
                        <form action="{{ route('itens_pedidos.destroy', ['itens_pedido' => $item_pedido->id]) }}" method="post">
                            @csrf
                            
                            @method('delete')
                            <input type="hidden" name="item_pedido" value="{{ $item_pedido->id }}">
                            <button title="NAO FUNCIONA: REMOVER" type="submit" class="btn btn-sm fas fa-trash-alt" onclick="return confirm('Confirma exclusão?')">                        
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection