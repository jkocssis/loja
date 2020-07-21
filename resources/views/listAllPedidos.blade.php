@extends('gerencia')

@section('content')

    <a href="{{ route('pedidos.create') }}">
        <button type="button" class="btn btn-primary">Emitir Pedido</button>
    </a>
    <a href="{{ route('itens_pedidos.index') }}">
        <button type="button" class="btn btn-primary">Visualizar Itens</button>
    </a>
    <br><br>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">NÚMERO DO PEDIDO</th>
                <th scope="col">NOME DO CLIENTE</th>
                <th scope="col">NOME DO VENDEDOR</th>
                <th scope="col">STATUS</th>
                <th scope="col">CRIADO EM</th>
                <th scope="col"></th>
                <th scope="col">AÇÕES</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>            
            @foreach($pedidos as $pedido)
                @php
                    $cliente = $pedido->find($pedido->idCliente)->relCliente;
                    $vendedor = $pedido->find($pedido->idVendedor)->relVendedor;
                @endphp
                <tr>
                    <th scope="row">{{ $pedido->idPedido }}</th>
                    <td>{{ $cliente->nome }}</td>
                    <td>{{ $vendedor->nome }}</td>
                    <td>{{ $pedido->status }}</td>
                    <td>{{ $pedido->created_at }}</td>
                    <td><a href="{{ route('pedidos.show', ['pedido' => $pedido->idPedido]) }}" title="Detalhes"><i class="far fa-file"></i></a></td> 
                    <td><a href="{{ route('pedidos.edit', ['pedido' => $pedido->idPedido]) }}" title="Atualizar"><i class="fas fa-redo"></i></a></td>  
                    <td>
                        <form action="{{ route('pedidos.destroy', ['pedido' => $pedido->idPedido]) }}" method="post">
                            @csrf
                            
                            @method('delete')
                        <input type="hidden" name="pedido" value="{{ $pedido->idPedido }}">
                            <button title="Remover" type="submit" class="btn btn-sm fas fa-trash-alt" onclick="return confirm('Confirma exclusão?')">                        
                        </form>
                    </td>            
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection