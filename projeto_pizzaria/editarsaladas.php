<?php
include('conexaopizzaria.php');
@$id = intval($_GET['id_salada']);

if (count($_POST) > 0) {
    $id_salada = $_POST['saladas'];
    $salada = $_POST['salada'];
    $valor_salada = $_POST['valor'];

    $erro = '';
    if (empty($id_salada)) {
        $erro = 'Preencha o Nome da Salada';
    }
    if ($erro) {
        echo "<p style='color:red;'>$erro</p>";
    } else {
        $sql = "UPDATE `salada` SET `id_salada`='$id_salada',`salada`='$salada',`valor_salada`='$valor_salada' WHERE 1 ";

        $dados_atualizados = $conexao->query($sql) or die($conexao->error);
        if ($dados_atualizados) {
            echo "<h1 style='color:green;'>Atualizado com sucesso</h1>";
        } else {
            die("ERROR:não atualizado $sql");
        }
    }
}
$sql_salada = "SELECT * FROM `salada`  WHERE id_salada='$id' ";
$query_salada = $conexao->query($sql_salada) or die($conexao->error);
$salada = $query_salada->fetch_assoc();

$consulta_salada = "SELECT * FROM `salada`;";
$sql_salada = mysqli_query($conexao, $consulta_salada);

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
    <title>Cadastro de Saladas</title>
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
    <div class="fundo_salada">
        <div class="form">
            <fieldset class="novo">
                <legend>Salada</legend>
                <form method="GET" action="" class="formulario">
                    <label for="saladas">Nome da Salada:</label><br>
                    <select class="alter" name="saladas" id="saladas" required>
                        <option value="">Selecione a Salada</option><br>
                        <?php
                        while ($row = mysqli_fetch_assoc($sql_salada)) {
                        ?>
                            <option value="<?php echo $row['id_salada']; ?>"><?php echo $row['saladas']; ?></option>
                            <!-- <option value=""></option> -->
                        <?php } ?>
                    </select>
                </form>
            </fieldset>
            <fieldset class="novo">
                <legend>Salada</legend>
                <form method="POST" action="" class="formulario">
                    <label for="saladas">Código da Salada:</label><br>
                    <input value="<?php echo @$id_salada['salada']; ?> " type="text" id="salada" name="salada" required><br>
                    <label for="salada">Nome do Salada:</label><br>
                    <select name="salada">
                        <option value="">Selecione a Salada</option>
                        <?php
                        while ($row = mysqli_fetch_assoc($sql_salada)) {
                        ?>
                            <option value="<?php echo $row['id_salada']; ?>"><?php echo $row['saladas']; ?></option>
                            <!-- <option value=""></option> -->
                        <?php } ?>
                        <option value="">Selecione...</option>
                        <option value="Caprese da Casa">Caprese da Casa</option>
                        <option value="Caprese com Tiras de Frango">Caprese com Tiras de Frango</option>
                        <option value="Caprese com Tiras de Mignon">Caprese com Tiras de Mignon</option>
                        <option value="A moda da Casa">A moda da Casa</option>
                        <option value="Com Tiras de Frango">Com Tiras de Frango</option>
                        <option value="Com Tiras de Mignon">Com Tiras de Mignon</option>
                    </select><br>
                    <label for="valor">Valor do Produto R$:</label><br>
                    <input value="<?php echo @$id_salada['valor']; ?>" type="text" id="valor" name="valor" required><br><br>
                    <input class="botom" type="reset" value="Limpar" name="limpar">
                    <input class="botom" type="submit" name="submit" value="Enviar">

                </form>

            </fieldset>
        </div>
    </div>

</body>

</html>