@extends('gerencia')

@section('content')
    
    <form action="{{ route('produtos.store') }}" method="post" enctype="multipart/form-data">
        
        @csrf
        
        <label for="">Descrição:</label><br>
        <input type="text" name="descricao" required>
        <br><br>
        <label for="">Quantidade disponível:</label><br>
        <input type="number" name="quant_disp" required>
        <br><br>
        <label for="">Preço unitário:</label><br>
        <input type="number" name="preco_unit" step=".01" required>
        <br><br>
        <label for="">Estoque mínimo:</label><br>
        <input type="number" name="estoque_min" required>
        <br><br>
        <label for="">Imagem:</label><br>
        <input type="file" name="image" required>
        <br><br>
        <input class="btn btn-primary" type="submit" value="Cadastrar">
    </form>

@endsection