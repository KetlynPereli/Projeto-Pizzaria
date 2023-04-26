<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilo.css">
    <link rel="shortcut icon" href="Favicon.ico">
    <script src="https://kit.fontawesome.com/47e9777af5.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans&family=Roboto+Slab:wght@600&display=swap" rel="stylesheet">
    <title>Lista de Nhoque</title>
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
    <div class="fundo_nhoque">
        <div class="form">
            <form action="excluirnhoque.php" method="post">
                <center>
                    <h1>Nhoques Cadastrados</h1>
                    <table id="tabela" border="1">
                        <thead>
                            <th>Código do Nhoque</th>
                            <th>Nome do Nhoque</th>
                            <th>Valor</th>
                            <th colspan="2">Ação</th>

                        </thead>

                        <?php
                        include("conexaopizzaria.php");

                        $dados = mysqli_query($conexao, "SELECT * FROM `nhoque`");

                        while ($item = mysqli_fetch_assoc($dados)) {
                        ?>
                            <tr>
                                <td><?= @$item['id_nhoque'] ?></td>
                                <td><?= @$item['nhoque'] ?></td>
                                <td><?= @$item['valor_nhoque'] ?></td>
                                <td><a href="editarnhoque'.php?id_nhoque<?php echo @$item['id_nhoque']; ?>"><i class="fa fa-pencil"></a></td>
                                <td onClick="verifica('<?= @$item["id_nhoque"]; ?>')"><a href="#"><i class="fa fa-trash"></a></td>
                            </tr>

                        <?php } ?>
                    </table>

                    <script>
                        function verifica(recid) {
                            if (confirm("Tem certeza que deseja Excluir permanentemente este Nhoque'")) {
                                window.location = "excluirnhoque.php?id_nhoque'" + recid
                            }
                        }
                    </script>

                </center>
            </form>
        </div>
    </div>
</body>

</html>