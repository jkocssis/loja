@extends('gerencia')

@section('content')

    <a href="{{ route('produtos.create') }}">
        <button type="button" class="btn btn-primary">Inserir Produto</button>
    </a>
    <br><br>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">IMAGEM</th>
                <th scope="col">DESCRIÇÃO</th>
                <th scope="col">QUANTIDADE DISPONÍVEL</th>
                <th scope="col">PREÇO UNITÁRIO</th>
                <th scope="col">ESTOQUE MÍNIMO</th>
                <th scope="col"></th>
                <th scope="col">AÇÕES</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            
            @foreach($produtos as $produto)
                <tr>
                    <th scope="row">{{ $produto->idProduto }}</th>
                    <td><a href="javascript:abrir('{{ asset('/storage/' . $produto->image) }}');">
                        <img src="{{ asset('/storage/' . $produto->image) }}" width="30">
                    </a></td>
                    <td>{{ $produto->descricao }}</td>
                    <td>{{ $produto->quant_disp }}</td>
                    <td>{{ $produto->preco_unit }}</td>
                    <td>{{ $produto->estoque_min }}</td>
                    <td><a href="{{ route('produtos.edit', ['produto' => $produto->idProduto]) }}" title="Atualizar"><i class="fas fa-redo"></i></a></td>
                    <td>
                        <form action="{{ route('produtos.destroy', ['produto' => $produto->idProduto]) }}" method="post">
                            @csrf
                            
                            @method('delete')
                            <input type="hidden" name="produto" value="{{ $produto->idProduto }}">
                            <button title="Remover" type="submit" class="btn btn-sm fas fa-trash-alt" onclick="return confirm('Confirma exclusão?')">                        
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Abre janelas popup das imagens dos produtos -->
    <script>
    function abrir(URL) {
        window.open(URL, 'janela', 'width=400, height=400, top=100, left=699, scrollbars=no, status=no, toolbar=no, location=no, menubar=no, resizable=no, fullscreen=no')
    }
    </script>

@endsection