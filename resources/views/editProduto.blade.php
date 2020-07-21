@extends('gerencia')

@section('content')
   
    <form action="{{ route('produtos.update', ['produto' => $produto->idProduto]) }}" method="post"> 
        @csrf
        
        @method('PUT')

        <img src="{{ asset('/storage/' . $produto->image) }}" width="150">
        <br><br>
        <label for="">Descrição:</label><br>
        <input type="text" name="descricao" value="{{ $produto->descricao }}">
        <br><br>
        <label for="">Quantidade disponível:</label><br>
        <input type="number" name="quant_disp" value="{{ $produto->quant_disp }}">
        <br><br>
        <label for="">Preço unitário:</label><br>
        <input type="number" name="preco_unit" step=".01" value="{{ $produto->preco_unit }}">
        <br><br>
        <label for="">Estoque mínimo:</label><br>
        <input type="number" name="estoque_min" value="{{ $produto->estoque_min }}">
        <br><br>
        <input class="btn btn-primary" type="submit" value="Editar">
    </form>

@endsection
