<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>BombaBurg</title>
    <style type="text/css">
      body{
        background-color: #F2F2F2;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">é o BombaBurg</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Início</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Produtos
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="?page=insumos-listar">Lista</a></li>
                <li><a class="dropdown-item" href="?page=insumos-cadastrar">Cadastrar</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container mt-5">
      <div class="row">
        <div class="col-lg-12">
          <?php
            //arquivo de conexão com o banco de dados
            include('config.php');
            //chamar cada página
            switch(@$_REQUEST["page"]){
              //insumos
              case "insumos-listar":
                include("pages/insumos-listar.php");
              break;
              case "insumos-cadastrar":
                include("pages/insumos-cadastrar.php");
              break;
              case "insumos-editar":
                include("pages/insumos-editar.php");
              break;
              case "insumos-salvar":
                include("pages/insumos-salvar.php");
              break;
              default:
                include("pages/main.php");
            }
          ?>
        </div>
      </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>    
  </body>
</html>
