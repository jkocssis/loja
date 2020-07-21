@extends('gerencia')

@section('content')

    <a href="{{ route('clientes.create') }}">
        <button type="button" class="btn btn-primary">Inserir Cliente</button>
    </a>
    <br><br>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NOME</th>
                <th scope="col">LIMITE CREDITO</th>
                <th scope="col">LIMITE DISPONIVEL</th>
                <th scope="col"></th>
                <th scope="col">AÇÕES</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>            
            @foreach($clientes as $cliente)
                <tr>
                    <th scope="row">{{ $cliente->idCliente }}</th>
                    <td>{{ $cliente->nome }}</td>
                    <td>{{ $cliente->lim_cred }}</td>
                    <td>{{ $cliente->lim_disp }}</td>
                    <td><a href="{{ route('clientes.show', ['cliente' => $cliente->idCliente]) }}" title="Detalhes"><i class="far fa-file"></i></a></td>
                    <td><a href="{{ route('clientes.edit', ['cliente' => $cliente->idCliente]) }}" title="Atualizar"><i class="fas fa-redo"></i></a></td>                    
                    <td>
                        <form action="{{ route('clientes.destroy', ['cliente' => $cliente->idCliente]) }}" method="post">
                            @csrf
                            
                            @method('delete')
                        <input type="hidden" name="cliente" value="{{ $cliente->idCliente }}">
                            <button title="Remover" type="submit" class="btn btn-sm fas fa-trash-alt" onclick="return confirm('Confirma exclusão?')">                        
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection