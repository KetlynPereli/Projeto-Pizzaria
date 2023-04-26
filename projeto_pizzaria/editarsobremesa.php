<?php
include('conexaopizzaria.php');
@$id = intval($_GET['id_sobremesa']);

if (count($_POST) > 0) {
    $id_sobremesa = $_POST['sobremesas'];
    $sobremesa = $_POST['sobremesa'];
    $valor_sobremesa = $_POST['valor'];

    $erro = '';
    if (empty($id_sobremesa)) {
        $erro = 'Preencha o Nome do Sobremesa';
    }
    if ($erro) {
        echo "<p style='color:red;'>$erro</p>";
    } else {
        $sql = "UPDATE `sobremesa` SET `id_sobremesa`='$id_sobremesa',`sobremesa`='$sobremesa',`valor_sobremesa`='$valor_sobremesa' WHERE 1 ";

        $dados_atualizados = $conexao->query($sql) or die($conexao->error);
        if ($dados_atualizados) {
            echo "<h1 style='color:green;'>Atualizado com sucesso</h1>";
        } else {
            die("ERROR:não atualizado $sql");
        }
    }
}
$sql_sobremesa = "SELECT * FROM `sobremesa`  WHERE id_sobremesa='$id' ";
$query_sobremesa = $conexao->query($sql_sobremesa) or die($conexao->error);
$sobremesa = $query_sobremesa->fetch_assoc();

$consulta_sobremesa = "SELECT * FROM `sobremesa`;";
$sql_sobremesa = mysqli_query($conexao, $consulta_sobremesa);

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
    <title>Cadastro de Sobremesas</title>
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
    <div class="fundo_sobrema">
        <div class="form">
            <fieldset class="novo">
                <legend>Sobremesas</legend>
                <form method="GET" action="" class="formulario">
                    <label for="sobremesa">Nome da Sobremesa:</label><br>
                    <select class="alter" name="sobremesa" id="sobremesa" required>
                        <option value="">Selecione a Sobremesa</option><br>
                        <?php
                        while ($row = mysqli_fetch_assoc($sql_sobremesa)) {
                        ?>
                            <option value="<?php echo $row['$id_sobremesa']; ?>"><?php echo $row['sobremesas']; ?></option>
                            <!-- <option value=""></option> -->
                        <?php } ?>
                    </select>
                </form>
            </fieldset>
            <fieldset class="novo">
                <legend>Sobremesas</legend>
                <form method="POST" action="" class="formulario">
                    <label for="sobremesas">Código da Sobremesa:</label><br>
                    <input value="<?php echo @$id_sobremesa['sobremesa']; ?> " type="text" id="sobremesa" name="sobremesa" required><br>
                    <label for="sobremesa">Nome da Sobremesa:</label><br>
                    <select name="sobremesa">
                        <option value="">Selecione a Sobremesa</option>
                        <?php
                        while ($row = mysqli_fetch_assoc($sql_sobremesa)) {
                        ?>
                            <option value="<?php echo $row['$id_sobremesa']; ?>"><?php echo $row['sobremesas']; ?></option>
                            <!-- <option value=""></option> -->
                        <?php } ?>
                        <option value="">Selecione...</option>
                        <option value="Mini Churros (16 unidades)">Mini Churros (16 unidades)</option>
                        <option value="Bombom Aberto">Bombom Aberto</option>
                        <option value="Pudim de Leite">Pudim de Leite</option>
                        <option value="Mexileta Cremosa">Mexileta Cremosa</option>
                        <option value="Mexileta Frutados">Mexileta Frutados</option>
                        <option value="Mexileta Premium">Mexileta Premium</option>
                        <option value="Mexileta Recheada">Mexileta Recheada</option>
                        <option value="Halls Sabores">Halls Sabores</option>
                        <option value="Trident Sabores">Trident Sabores</option>
                    </select><br>
                    <label for="valor">Valor do Produto R$:</label><br>
                    <input value="<?php echo @$id_sobremesa['valor']; ?>" type="text" id="valor" name="valor" required><br><br>
                    <input class="botom" type="reset" value="Limpar" name="limpar">
                    <input class="botom" type="submit" name="submit" value="Enviar">

                </form>

            </fieldset>
        </div>
    </div>

</body>

</html>