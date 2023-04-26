<?php
include('conexaopizzaria.php');
@$id = intval($_GET['id_calzone']);

if (count($_POST) > 0) {
    $id_calzone = $_POST['calzones'];
    $calzone = $_POST['calzone'];
    $valor_calzone = $_POST['valor'];

    $erro = '';
    if (empty($id_calzone)) {
        $erro = 'Preencha o Nome do Calzone';
    }
    if ($erro) {
        echo "<p style='color:red;'>$erro</p>";
    } else {
        $sql = "UPDATE `calzone` SET `id_calzone`='$id_calzone',`calzone`='$calzone',`valor_calzone`='$valor_calzone'WHERE 1 ";

        $dados_atualizados = $conexao->query($sql) or die($conexao->error);
        if ($dados_atualizados) {
            echo "<h1 style='color:green;'>Atualizado com sucesso</h1>";
        } else {
            die("ERROR:não atualizado $sql");
        }
    }
}
$sql_calzone = "SELECT * FROM `calzone`  WHERE id_calzone='$id' ";
$query_calzone = $conexao->query($sql_calzone) or die($conexao->error);
$calzone = $query_calzone->fetch_assoc();

$consulta_calzone = "SELECT * FROM `calzone`;";
$sql_calzone = mysqli_query($conexao, $consulta_calzone);

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
    <title>Cadastro de Calzone</title>
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
    <div class="fundo_calzone">
        <div class="form">
            <fieldset class="novo">
                <legend>Calzone</legend>
                <form method="GET" action="" class="formulario">
                    <label for="calzones">Nome do Calzone:</label><br>
                    <select class="alter" name="calzones" id="calzones" required>
                        <option value="">Selecione o Calzone</option><br>
                        <?php
                        while ($row = mysqli_fetch_assoc($sql_calzone)) {
                        ?>
                            <option value="<?php echo @$row['id_calzone']; ?>"><?php echo @$row['calzone']; ?></option>
                            <!-- <option value=""></option> -->
                        <?php } ?>
                    </select>
                </form>
            </fieldset>
            <fieldset class="novo">
                <legend>Calzones</legend>
                <form method="POST" action="" class="formulario">
                    <label for="calzone">Código do Calzone:</label><br>
                    <input value="<?php echo @$id_calzone['calzones']; ?> " type="text" id="calzones" name="calzones" required><br>
                    <label for="calzones">Nome do Calzone:</label><br>
                    <select name="calzones">
                        <option value="">Selecione o Calzone</option>
                        <?php
                        while ($row = mysqli_fetch_assoc($sql_calzone)) {
                        ?>
                            <option value="<?php echo $row['id_calzone']; ?>"><?php echo $row['calzone']; ?></option>
                            <!-- <option value=""></option> -->
                        <?php } ?>
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
                    <input value="<?php echo @$id_calzone['valor']; ?>" type="text" id="valor" name="valor" required><br><br>
                    <input class="botom" type="reset" value="Limpar" name="limpar">
                    <input class="botom" type="submit" name="submit" value="Enviar">

                </form>

            </fieldset>
        </div>
    </div>

</body>

</html>