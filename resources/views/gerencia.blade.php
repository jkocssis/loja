<!doctype html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Sistema de Gerenciamento</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">      
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" 
      integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous"> 

  </head>
  <body>
      <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('clientes.index') }}">Clientes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('vendedores.index') }}">Vendedores</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('produtos.index') }}">Produtos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('pedidos.index') }}">Pedidos</a>
            </li>
          </ul>
      </nav>
      <div class="container">
          <br><br>
          <div class="row">
              <div class=".col-sm-4"></div>   
              <div class=".col-sm-4">   

                @yield('content')

              </div>
              <div class=".col-sm-4"></div>
          </div>    
      </div>
  </body>
</html>