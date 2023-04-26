<?php
include('conexaopizzaria.php');
@$id = intval($_GET['id_porcao']);

if (count($_POST) > 0) {
    $id_porcao = $_POST['porcoes'];
    $porcao = $_POST['porcao'];
    $valor_porcao = $_POST['valor'];

    $erro = '';
    if (empty($id_porcao)) {
        $erro = 'Preencha o Nome do Calzone';
    }
    if ($erro) {
        echo "<p style='color:red;'>$erro</p>";
    } else {
        $sql = "UPDATE `porcoes` SET `id_porcao`='$id_porcao',`porcao`='$porcao',`valor_porcao`='$valor_porcao' WHERE 1 ";

        $dados_atualizados = $conexao->query($sql) or die($conexao->error);
        if ($dados_atualizados) {
            echo "<h1 style='color:green;'>Atualizado com sucesso</h1>";
        } else {
            die("ERROR:não atualizado $sql");
        }
    }
}
$sql_porcao = "SELECT * FROM `porcoes`  WHERE id_porcao='$id' ";
$query_calzone = $conexao->query($sql_porcao) or die($conexao->error);
$porcao = $query_calzone->fetch_assoc();

$consulta_calzone = "SELECT * FROM `porcoes`;";
$sql_porcao = mysqli_query($conexao, $consulta_calzone);

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
    <title>Cadastro de Porções</title>
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
    <div class="fundo_porcao">
        <div class="form">
            <fieldset class="novo">
                <legend>Porção</legend>
                <form method="GET" action="" class="formulario">
                    <label for="porcao">Nome da Porção:</label><br>
                    <select class="alter" name="porcao" id="porcao" required>
                        <option value="">Selecione a Porção</option><br>
                        <?php
                        while ($row = mysqli_fetch_assoc($sql_porcao)) {
                        ?>
                            <option value="<?php echo $row['id_porcao']; ?>"><?php echo $row['porcoes']; ?></option>
                            <!-- <option value=""></option> -->
                        <?php } ?>
                    </select>
                </form>
            </fieldset>
            <fieldset class="novo">
                <legend>Porção</legend>
                <form method="POST" action="" class="formulario">
                    <label for="porcoes">Código da Porção:</label><br>
                    <input value="<?php echo @$id_porcao['porcao']; ?> " type="text" id="porcao" name="porcao" required><br>
                    <label for="porcao">Porção Inteira:</label><br>
                    <select name="porcao">
                        <option value="">Selecione a Porção Inteira</option>
                        <?php
                        while ($row = mysqli_fetch_assoc($sql_porcao)) {
                        ?>
                            <option value="<?php echo $row['id_porcao']; ?>"><?php echo $row['porcoes']; ?></option>
                            <!-- <option value=""></option> -->
                        <?php } ?>
                        <option value="">Porção Inteira</option>
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
                        <option value="">Selecione a Porção Meia</option>
                        <?php
                        while ($row = mysqli_fetch_assoc($sql_porcao)) {
                        ?>
                            <option value="<?php echo $row['id_porcao']; ?>"><?php echo $row['porcoes']; ?></option>
                            <!-- <option value=""></option> -->
                        <?php } ?>
                        <option value="">Meia Porção</option>
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
                    <input value="<?php echo @$id_porcao['valor']; ?>" type="text" id="valor" name="valor" required><br><br>
                    <input class="botom" type="reset" value="Limpar" name="limpar">
                    <input class="botom" type="submit" name="submit" value="Enviar">

                </form>

            </fieldset>
        </div>
    </div>

</body>

</html>