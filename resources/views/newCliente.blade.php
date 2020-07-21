@extends('gerencia')

@section('content')
    
    <form action="{{ route('clientes.store') }}" method="post">
        
        @csrf

        <label for="">CPF:</label><br>
        <input type="text" data-mask="000.000.000-00" name="cpf" required>
        <br><br>
        <label for="">Nome:</label><br>
        <input type="text" name="nome" required>
        <br><br>
        <label for="">Endereço:</label><br>
        <input type="text" name="endereco" required>
        <br><br>
        <label for="">Cidade:</label><br>
        <input type="text" name="cidade" required>
        <br><br>
        <label for="">CEP:</label><br>
        <input type="text" name="cep" required>
        <br><br>
        <label for="">UF:</label><br>
        <select name="uf" required>
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AP">Amapá</option>
            <option value="AM">Amazonas</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="DF">Distrito Federal</option>
            <option value="ES">Espírito Santo</option>
            <option value="GO">Goiás</option>
            <option value="MA">Maranhão</option>
            <option value="MT">Mato Grosso</option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="MG">Minas Gerais</option>
            <option value="PA">Pará</option>
            <option value="PB">Paraíba</option>
            <option value="PR">Paraná</option>
            <option value="PE">Pernambuco</option>
            <option value="PI">Piauí</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="RO">Rondônia</option>
            <option value="RR">Roraima</option>
            <option value="SC">Santa Catarina</option>
            <option value="SP">São Paulo</option>
            <option value="SE">Sergipe</option>
            <option value="TO">Tocantins</option>
        </select>
        <br><br>
        <label for="">DDD:</label><br>
        <input type="number" name="tel_ddd" required>
        <br><br>
        <label for="">Telefone:</label><br>
        <input type="text" name="tel_num" required>
        <br><br>
        <label for="">Limite de Crédito:</label><br>
        <input type="number" name="lim_cred" required>
        <br><br>
        <label for="">Limite Disponível:</label><br>
        <input type="number" name="lim_disp" required>
        <br><br>
        <input class="btn btn-primary" type="submit" value="Cadastrar">
    </form>
    <br><br>
@endsection
