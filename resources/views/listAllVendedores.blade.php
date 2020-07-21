@extends('gerencia')

@section('content')

    <a href="{{ route('vendedores.create') }}">
        <button type="button" class="btn btn-primary">Inserir Vendedor</button>
    </a>
    <br><br>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NOME</th>
                <th scope="col">SALÁRIO BASE</th>
                <th scope="col">TAXA COMISSAO</th>
                <th scope="col"></th>
                <th scope="col">AÇÕES</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            
            @foreach($vendedores as $vendedor)
                <tr>
                    <td>{{ $vendedor->idVendedor }}</td>
                    <td>{{ $vendedor->nome }}</td>
                    <td>{{ $vendedor->sal_base }}</td>
                    <td>{{ $vendedor->taxa_com }}</td>
                    <td><a href="{{ route('vendedores.show', ['vendedor' => $vendedor->idVendedor]) }}" title="Detalhes"><i class="far fa-file"></i></a></td>
                    <td><a href="{{ route('vendedores.edit', ['vendedor' => $vendedor->idVendedor]) }}" title="Atualizar"><i class="fas fa-redo"></i></a></td>
                    <td>
                        <form action="{{ route('vendedores.destroy', ['vendedor' => $vendedor->idVendedor]) }}" method="post">
                            @csrf
                            
                            @method('delete')
                        <input type="hidden" name="vendedor" value="{{ $vendedor->idVendedor }}">
                            <button title="Remover" type="submit" class="btn btn-sm fas fa-trash-alt" onclick="return confirm('Confirma exclusão?')">    
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
@endsection
