<?php
include('conexaopizzaria.php');
@$id = intval($_GET['id_lasanha']);

if (count($_POST) > 0) {
    $id_lasanha = $_POST['lasanha'];
    $lasanha = $_POST['lasanhas'];
    $valor_lasanha = $_POST['valor'];

    $erro = '';
    if (empty($id_lasanha)) {
        $erro = 'Preencha o Nome do Calzone';
    }
    if ($erro) {
        echo "<p style='color:red;'>$erro</p>";
    } else {
        $sql = "UPDATE `lasanha` SET `id_lasanha`='$id_lasanha',`lasanha`='$lasanha',`valor_lasanha`='$valor_lasanha' WHERE 1 ";

        $dados_atualizados = $conexao->query($sql) or die($conexao->error);
        if ($dados_atualizados) {
            echo "<h1 style='color:green;'>Atualizado com sucesso</h1>";
        } else {
            die("ERROR:não atualizado $sql");
        }
    }
}
$sql_lasanha = "SELECT * FROM `lasanha`  WHERE id_lasanha='$id' ";
$query_lasanha = $conexao->query($sql_lasanha) or die($conexao->error);
$lasanha = $query_lasanha->fetch_assoc();

$consulta_lasanha = "SELECT * FROM `lasanha`;";
$sql_lasanha = mysqli_query($conexao, $consulta_lasanha);

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
    <title>Cadastro da Lasanha</title>
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
    <div class="fundo_lasanha">
        <div class="form">
            <fieldset class="novo">
                <legend>Lasanhas</legend>
                <form method="GET" action="" class="formulario">
                    <label for="lasanhas">Nome da Lasanha:</label><br>
                    <select class="alter" name="lasanhas" id="lasanhas" required>
                        <option value="">Selecione a Lasanha</option><br>
                        <?php
                        while ($row = mysqli_fetch_assoc($sql_lasanha)) {
                        ?>
                            <option value="<?php echo $row['id_lasanha']; ?>"><?php echo $row['lasanha']; ?></option>
                            <!-- <option value=""></option> -->
                        <?php } ?>
                    </select>
                </form>
            </fieldset>
            <fieldset class="novo">
                <legend>Lasanhas</legend>
                <form method="POST" action="" class="formulario">
                    <label for="lasanha">Código da Lasanha:</label><br>
                    <input value="<?php echo @$id_lasanha['lasanhas']; ?> " type="text" id="lasanhas" name="lasanhas" required><br>
                    <label for="lasanhas">Nome da Lasanha:</label><br>
                    <select name="lasanhas">
                        <option value="">Selecione a Lasanha</option>
                        <?php
                        while ($row = mysqli_fetch_assoc($sql_lasanha)) {
                        ?>
                            <option value="<?php echo $row['id_lasanha']; ?>"><?php echo $row['lasanha']; ?></option>
                            <!-- <option value=""></option> -->
                        <?php } ?>
                        <option value="">Selecione...</option>
                        <option value="Quatro Queijos">Quatro Queijos</option>
                        <option value="À Bolonhesa">À Bolonhesa</option>
                        <option value="Frango">Frango</option>
                    </select><br>
                    <label for="valor">Valor do Produto R$:</label><br>
                    <input value="<?php echo @$id_lasanha['valor']; ?>" type="text" id="valor" name="valor" required><br><br>
                    <input class="botom" type="reset" value="Limpar" name="limpar">
                    <input class="botom" type="submit" name="submit" value="Enviar">

                </form>

            </fieldset>
        </div>
    </div>

</body>

</html>