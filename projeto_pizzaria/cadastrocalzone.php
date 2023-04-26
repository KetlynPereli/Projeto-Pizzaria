<?php

include('conexaopizzaria.php');


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilo.css">
    <link rel="shortcut icon" href="Favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans&family=Roboto+Slab:wght@600&display=swap" rel="stylesheet">
    <title>Cadastro do Calzone</title>
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
<div class="fundo_calzone">
    <div class="form">
        <fieldset class="novo">
            <legend>Calzones</legend>
            <form action="crudcalzone.php" method="POST" class="formulario">
                <label for="calzone">Código o Calzone:</label><br>
                <input type="text" id="calzone" name="calzone" required><br>
                <label for="calzones">Nome do Calzone:</label><br>
                <select name="calzones">
                    <option value="">Selecione...</option>
                    <option value="Especial do Chef">Especial do Chef</option>
                    <option value="Frango com Requeijão Cremoso">Frango com Requeijão Cremoso</option>
                    <option value="Calzone Pernil">Calzone Pernil</option>
                    <option value="Calzoburguer Tradicional">Calzoburguer Tradicional</option>
                    <option value="Calzoburguer bacon">Calzoburguer bacon</option>
                    <option value="Calzoburguer Duplo">Calzoburguer Duplo</option>
                    <option value="Calzoburguer Tudo">Calzoburguer Tudo</option>
                </select><br>
                <label for="valor">Valor do Produto R$:</label><br>
                <input type="text" id="valor" name="valor" required><br><br>
                <input class="botom" type="reset" value="Limpar" name="limpar">
                <input class="botom" type="submit" name="submit" value="Enviar">
            </form>
        </fieldset>
    </div>
</div>
</body>

</html>