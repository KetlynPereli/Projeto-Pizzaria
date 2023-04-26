<?php
class Authenticator
{

  public static $username = "ketlyn";
  public static $password = "1311";

  public static function check()
  {
    if (
      isset($_SERVER['PHP_AUTH_USER']) &&
      isset($_SERVER['PHP_AUTH_PW']) &&
      $_SERVER['PHP_AUTH_USER'] == self::$username &&
      $_SERVER['PHP_AUTH_PW'] == self::$password
    ) {
      return true;
    } else {
      header('WWW-Authenticate: Basic realm="Please login."');
      header('HTTP/1.0 401 Unauthorized');
      die("Usuário ou senha incorretos!");
    }
  }
}

if (Authenticator::check()) {
  /* echo "Você tem acesso ao conteúdo!"; */
  $pagina = "content.html";
  if (isset($_POST)) {
    if (isset($_POST["conteudo"])) {
      $fopen = fopen($pagina, "w+");
      fwrite($fopen, $_POST["conteudo"]);
      fclose($fopen);
    }
  }
} else return null;

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="Favicon.ico">
  <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans&family=Roboto+Slab:wght@600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="estilo.css">
  <title>Document</title>
</head>

<body>
  <div id="logo"></div>
  <nav>
    <a href="home_pizzaria.html">Menu</a> |
    <div class="dropdown">
      <button class="mainmenubtn">Cadastro de Produtos<i class="fa-solid fa-angle-down"></i></button>|
      <div class="dropdown-child">
        <nav>
          <a href="cadastrodepizzas.php">Pizzas</a>
          <a href="cadastrocalzone.php">Calzones</a>
          <a href="cadastrobebidas.php">Bebidas</a>
          <a href="cadastrodeporcoes.php">Porções</a>
          <a href="cadastrodesaladas.php">Saladas</a>
          <a href="cadastrolasanha.php">Lasanhas</a>
          <a href="cadastronhoque.php">Nhoque</a>
          <a href="cadastrosanduiche.php">Saduiches</a>
          <a href="cadastrotalharim.php">Talharim</a>
          <a href="cadastrosobremesa.php">Sobremesa</a>
        </nav>
      </div>
    </div>
    <div class="dropdown">
      <button class="mainmenubtn">Editar Produtos<i class="fa-solid fa-angle-down"></i></button>|
      <div class="dropdown-child">
        <nav>
          <a href="editarpizza.php">Pizzas</a>
          <a href="editarcalzone.php">Calzones</a>
          <a href="editarbebidas.php">Bebidas</a>
          <a href="editarporcoes.php">Porções</a>
          <a href="editarsaladas.php">Saladas</a>
          <a href="editarlasanha.php">Lasanhas</a>
          <a href="editarnhoque.php">Nhoque</a>
          <a href="editarsanduiche.php">Saduiches</a>
          <a href="editartalharim.php">Talharim</a>
          <a href="editarsobremesa.php">Sobremesa</a>
        </nav>
      </div>
    </div>
    <div class="dropdown">
      <button class="mainmenubtn">Excluir Produtos<i class="fa-solid fa-angle-down"></i></button>|
      <div class="dropdown-child">
        <nav>
          <a href="listapizza.php">Pizzas</a>
          <a href="listacalzone.php">Calzones</a>
          <a href="listabebidas.php">Bebidas</a>
          <a href="listaporcao.php">Porções</a>
          <a href="listasalada.php">Saladas</a>
          <a href="listalasanha.php">Lasanhas</a>
          <a href="listanhoque.php">Nhoque</a>
          <a href="listasanduiche.php">Saduiches</a>
          <a href="listatalharim.php">Talharim</a>
          <a href="listasobremesa.php">Sobremesa</a>
        </nav>
      </div>
    </div>
    <a href="cadastrofuncionarios.php">Cadastro de Funcionários</a> |
    <a href="sair.php">Logout</a> |
  </nav>
  <div class="form">
    <fieldset class="novo">
      <!-- <input type="radio" id="radio"> <label for="radio">Click me</label> -->
    </fieldset>
  </div>
</body>

</html>