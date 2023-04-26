<?php
include('conexaopizzaria.php');
@$id = intval($_GET['id_sanduiche']);

if (count($_POST) > 0) {
    $id_sanduiche = $_POST['sanduiche'];
    $sanduiche = $_POST['sanduiches'];
    $valor_sanduiche = $_POST['valor'];

    $erro = '';
    if (empty($id_sanduiche)) {
        $erro = 'Preencha o Nome do Sanduiche';
    }
    if ($erro) {
        echo "<p style='color:red;'>$erro</p>";
    } else {
        $sql = "UPDATE `sanduiche` SET `id_sanduiche`='$id_sanduiche',`sanduiche`='$sanduiche',`valor_sanduiche`='$valor_sanduiche' WHERE 1 ";

        $dados_atualizados = $conexao->query($sql) or die($conexao->error);
        if ($dados_atualizados) {
            echo "<h1 style='color:green;'>Atualizado com sucesso</h1>";
        } else {
            die("ERROR:não atualizado $sql");
        }
    }
}
$sql_sanduiche = "SELECT * FROM `sanduiche`  WHERE id_sanduiche='$id' ";
$query_sanduiche = $conexao->query($sql_sanduiche) or die($conexao->error);
$sanduiche = $query_calzone->fetch_assoc();

$consulta_sanduiche = "SELECT * FROM `sanduiche`;";
$sql_sanduiche = mysqli_query($conexao, $consulta_sanduiche);

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <link rel="shortcut icon" href="Favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans&family=Roboto+Slab:wght@600&display=swap" rel="stylesheet">
    <title>Cadastro de Sanduiches</title>
</head>

<body>
    <div id="logo"></div>
    <!--  <nav>
         <a href="home_pizzaria.html">Menu</a> |
        <a href="cadastrodepizzas.php">Cadastro de Pizzas</a> |
        <a href="cadastrocalzone.php">Cadastro de Calzones</a> |
        <a href="cadastrobebidas.php">Cadastro de Bebidas</a> |
        <a href="cadastrodeporcoes.php">Cadastro de Porções</a> |
        <a href="cadastrodesaladas.php">Cadastro de Saladas</a> |
        <a href="cadastrolasanha.php">Cadastro de Lasanhas</a> | 
        <a href="cadastronhoque.php">Cadastro de Nhoque</a> |
        <a href="cadastrosanduiche.php">Cadastro de Saduiches</a> |
        <a href="cadastrotalharim.php">Cadastro de Talharim</a> |
        <a href="cadastrosobremesa.php">Cadastro de Sobremesa</a> |
    </nav> -->

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
    <div class="fundo_sanduiche">
        <div class="form">
            <fieldset class="novo">
                <legend>Sanduiches</legend>
                <form method="GET" action="" class="formulario">
                    <label for="sanduiches">Nome do Sanduiche:</label><br>
                    <select class="alter" name="sanduiches" id="sanduiches" required>
                        <option value="">Selecione o Sanduiche</option><br>
                        <?php
                        while ($row = mysqli_fetch_assoc($sql_sanduiche)) {
                        ?>
                            <option value="<?php echo $row['$id_sanduiche']; ?>"><?php echo $row['sanduiche']; ?></option>
                            <!-- <option value=""></option> -->
                        <?php } ?>
                    </select>
                </form>
            </fieldset>
            <fieldset class="novo">
                <legend>Sanduiches</legend>
                <form method="POST" action="" class="formulario">
                    <label for="sanduiche">Código do Sanduiche:</label><br>
                    <input value="<?php echo @$id_sanduiche['sanduiches']; ?> " type="text" id="sanduiches" name="sanduiches" required><br>
                    <label for="sanduiches">Nome do Sanduiche:</label><br>
                    <select name="sanduiches">
                        <option value="">Selecione o Sanduiche</option>
                        <?php
                        while ($row = mysqli_fetch_assoc($sql_sanduiche)) {
                        ?>
                            <option value="<?php echo $row['$id_sanduiche']; ?>"><?php echo $row['sanduiche']; ?></option>
                            <!-- <option value=""></option> -->
                        <?php } ?>
                        <option value="">Selecione...</option>
                        <option value="X Bacon">X Bacon</option>
                        <option value="X Burguer">X Burguer</option>
                        <option value="X Calabresa">X Calabresa</option>
                        <option value="X Egg">X Egg</option>
                        <option value="X Frango">X Frango</option>
                        <option value="X Frango com Cheddar">X Frango com Cheddar</option>
                        <option value="X Frango com Requeijão Cremoso">X Frango com Requeijão Cremoso</option>
                        <option value="X Salada">X Salada</option>
                        <option value="Dina Salada Duplo">Dina Salada Duplo</option>
                        <option value="X Tudo">X Tudo</option>
                        <option value="Dina Frango no Prato">Dina Frango no Prato</option>
                        <option value="Dina Salada Duplo no Prato">Dina Salada Duplo no Prato</option>
                        <option value="Dina Tudo no Prato">Dina Tudo no Prato</option>
                    </select><br>
                    <label for="valor">Valor do Produto R$:</label><br>
                    <input value="<?php echo @$$id_sanduiche['valor']; ?>" type="text" id="valor" name="valor" required><br><br>
                    <input class="botom" type="reset" value="Limpar" name="limpar">
                    <input class="botom" type="submit" name="submit" value="Enviar">

                </form>

            </fieldset>
        </div>
    </div>

</body>

</html>