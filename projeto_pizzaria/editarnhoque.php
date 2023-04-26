<?php
include('conexaopizzaria.php');
@$id = intval($_GET['$id_nhoque']);

if (count($_POST) > 0) {
    $id_nhoque = $_POST['nhoque'];
    $nhoque = $_POST['nhoques'];
    $valor_nhoque = $_POST['valor'];

    $erro = '';
    if (empty($id_nhoque)) {
        $erro = 'Preencha o Nome do Nhoque';
    }
    if ($erro) {
        echo "<p style='color:red;'>$erro</p>";
    } else {
        $sql = "UPDATE `nhoque` SET `id_nhoque`='$id_nhoque',`nhoque`='$nhoque',`valor_nhoque`='$valor_nhoque' WHERE 1 ";

        $dados_atualizados = $conexao->query($sql) or die($conexao->error);
        if ($dados_atualizados) {
            echo "<h1 style='color:green;'>Atualizado com sucesso</h1>";
        } else {
            die("ERROR:não atualizado $sql");
        }
    }
}
$sql_nhoque = "SELECT * FROM `nhoque`  WHERE id_nhoque='$id' ";
$query_nhoque = $conexao->query($sql_nhoque) or die($conexao->error);
$nhoque = $query_nhoque->fetch_assoc();

$consulta_nhoque = "SELECT * FROM `nhoque`;";
$sql_nhoque = mysqli_query($conexao, $consulta_nhoque);

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
    <title>Cadastro de Nhoque</title>
</head>

<body>
    <div id="logo"></div>
    <!-- <nav>
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
    <div class="fundo_nhoque">
        <div class="form">
            <fieldset class="novo">
                <legend>Noque</legend>
                <form method="GET" action="" class="formulario">
                    <label for="nhoques">Nome do Noque:</label><br>
                    <select class="alter" name="nhoques" id="nhoques" required>
                        <option value="">Selecione o Noque</option><br>
                        <?php
                        while ($row = mysqli_fetch_assoc($sql_nhoque)) {
                        ?>
                            <option value="<?php echo $row['id_nhoque']; ?>"><?php echo $row['nhoque']; ?></option>
                            <!-- <option value=""></option> -->
                        <?php } ?>
                    </select>
                </form>
            </fieldset>
            <fieldset class="novo">
                <legend>Nhoque</legend>
                <form method="POST" action="" class="formulario">
                    <label for="nhoque">Código do Noque:</label><br>
                    <input value="<?php echo @$id_nhoque['nhoques']; ?> " type="text" id="nhoques" name="nhoques" required><br>
                    <label for="nhoques">Nome do Noque:</label><br>
                    <select name="nhoques">
                        <option value="">Selecione o Noque</option>
                        <?php
                        while ($row = mysqli_fetch_assoc($sql_nhoque)) {
                        ?>
                            <option value="<?php echo $row['id_nhoque']; ?>"><?php echo $row['nhoque']; ?></option>
                            <!-- <option value=""></option> -->
                        <?php } ?>
                        <option value="">Selecione...</option>
                        <option value="Quatro Queijos">Quatro Queijos</option>
                        <option value="À Bolonhesa">À Bolonhesa</option>
                        <option value="Frango">Frango</option>
                    </select><br>
                    <label for="valor">Valor do Produto R$:</label><br>
                    <input value="<?php echo @$id_nhoque['valor']; ?>" type="text" id="valor" name="valor" required><br><br>
                    <input class="botom" type="reset" value="Limpar" name="limpar">
                    <input class="botom" type="submit" name="submit" value="Enviar">

                </form>

            </fieldset>
        </div>
    </div>

</body>

</html>