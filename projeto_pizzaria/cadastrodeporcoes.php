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
    <title>Cadastro de Porções</title>
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
    <div class="fundo_porcao">
        <div class="form">
            <fieldset class="novo">
                <legend>Porções</legend>
                <form action="crudporcoes.php" method="POST" class="formulario">
                    <label for="porcoes">Código da Porção:</label><br>
                    <input type="text" id="porcoes" name="porcoes" required><br>
                    <label for="porcao">Porção Inteira:</label><br>
                    <select name="porcao">
                        <option value="">Selecione a Porção Inteira</option>
                        <option value="Aipim">Aipim</option>
                        <option value="Aipim com Bacon">Aipim com Bacon</option>
                        <option value="Alcatra">Alcatra</option>
                        <option value="Calabresa">Calabresa</option>
                        <option value="Camarão a Milanesa">Camarão a Milanesa</option>
                        <option value="Coração">Coração</option>
                        <option value="Filé de Frabgo Empanado">Filé de Frabgo Empanado</option>
                        <option value="Frango">Frango</option>
                        <option value="Fritas">Fritas</option>
                        <option value="Fritas com Bacon">Fritas com Bacon</option>
                        <option value="Mignon">Mignon</option>
                        <option value="Tilápia">Tilápia</option>
                        <option value="Polenta">Polenta</option>
                        <option value="Salame">Salame</option>
                        <option value="Seleta de Frios">Seleta de Frios</option>
                        <option value="Mini Coxinha (28 unidades)">Mini Coxinha (28 unidades)</option>
                        <option value="Mini Risoles (28 unidades)">Mini Risoles (28 unidades)</option>
                        <option value="Mini Kibe (28 unidades)">Mini Kibe (28 unidades)</option>
                        <option value="Mini Bolinho de Tilapia (28 unidades)">Mini Bolinho de Tilapia (28 unidades)</option>
                    </select><br>
                    <label for="porcao">Meia Porção:</label><br>
                    <select name="porcao">
                        <option value="">Selecione a Meia Porção</option>
                        <option value="Aipim">Aipim</option>
                        <option value="Aipim com Bacon">Aipim com Bacon</option>
                        <option value="Alcatra">Alcatra</option>
                        <option value="Calabresa">Calabresa</option>
                        <option value="Coração">Coração</option>
                        <option value="Frango">Frango</option>
                        <option value="Fritas">Fritas</option>
                        <option value="Fritas com Bacon">Fritas com Bacon</option>
                        <option value="Mignon">Mignon</option>
                        <option value="Polenta">Polenta</option>
                        <option value="Salame">Salame</option>
                        <option value="Seleta de Frios">Seleta de Frios</option>
                        <option value="Mini Coxinha (14 unidades)">Mini Coxinha (14 unidades)</option>
                        <option value="Mini Risoles (14 unidades)">Mini Risoles (14 unidades)</option>
                        <option value="Mini Kibe (14 unidades)">Mini Kibe (14 unidades)</option>
                        <option value="Mini Bolinho de Tilapia (14 unidades)">Mini Bolinho de Tilapia (14 unidades)</option>
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