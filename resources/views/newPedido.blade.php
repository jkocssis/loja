@extends('gerencia')

@section('content')

    <form action="{{ route('pedidos.store') }}" method="post">        
        @csrf

        <label for="idCliente">Nome do Cliente:</label><br>
            <select id="idCliente" name="idCliente" required>
                <option selected>Selecione</option>
                @foreach ($clientes as $cliente)
                    <option value="{{$cliente->idCliente}}">{{$cliente->nome}}</option>
                @endforeach  
            </select> 
            <br><br>
        <label for="idVendedor">Nome do Vendedor:</label><br>
            <select id="idVendedor" name="idVendedor" required>
                <option selected>Selecione</option>
                @foreach ($vendedores as $vendedor)
                    <option value="{{$vendedor->idVendedor}}">{{$vendedor->nome}}</option>
                @endforeach  
            </select> 
            <br><br>
        <label for="status">Status do Pedido:</label><br>
            <select id="status" name="status" required>
                <option selected>Selecione</option>
                <option value="A">Em aberto</option>
                <option value="F">Finalizado</option>
            </select>   
            <br><br>
        <input class="btn btn-primary" type="submit" value="Criar">
    </form>

@endsection