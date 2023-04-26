<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Favicon.ico">
    <link rel="stylesheet" href="estilo.css">
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans&family=Roboto+Slab:wght@600&display=swap" rel="stylesheet">
    <title>Editar Produtos Cadastrados</title>
</head>
<body>
<div id="logo"></div>
    <!-- <nav>
        <a href="home_pizzaria.html">Menu</a> |
        <a href="cadastrodeprodutos.php">Voltar |</a>
        <a href="editarpizzas.php">Cadastro de Pizzas</a> |
        <a href="editarcalzone.php">Cadastro de Calzones</a> |
        <a href="editarbebidas.php">Cadastro de Bebidas</a> |
        <a href="editarporcoes.php">Cadastro de Porções</a> |
        <a href="editarsaladas.php">Cadastro de Saladas</a> |
        <a href="editarlasanha.php">Cadastro de Lasanhas</a> | 
        <a href="editarnhoque.php">Cadastro de Nhoque</a> |
        <a href="editarsanduiche.php">Cadastro de Saduiches</a> |
        <a href="editartalharim.php">Cadastro de Talharim</a> |
        <a href="editarsobremesa.php">Cadastro de Sobremesa</a> |
        <a href="excluirprodutos.php">Para Excluir Produtos Clique Aqui |</a>
</nav> -->

<nav>
        <a href="home_pizzaria.html">Menu</a> |
        <div class="dropdown">
            <button class="mainmenubtn">Cadastro de Produtos<i class="fa-solid fa-angle-down"></i></button>|
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
                    <a href="listadeporcao.php">Porções</a> 
                    <a href="listadesalada.php">Saladas</a> 
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
        </fieldset>
    </div>
</body>
</html>