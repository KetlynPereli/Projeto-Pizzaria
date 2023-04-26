<?php
include('conexaopizzaria.php');
@$id = intval($_GET['id_pizza']);

if (count($_POST) > 0) {
    $id_pizza = $_POST['pizzas'];
    $pizza = $_POST['pizza'];
    $tamanho = $_POST['tamanho'];
    $valor_pizza = $_POST['valor'];

    $erro = '';
    if (empty($id_pizza)) {
        $erro = 'Preencha o Nome da Pizza';
    }
    if ($erro) {
        echo "<p style='color:red;'>$erro</p>";
    } else {
        $sql = "UPDATE `pizzas` SET `id_pizza`='$id_pizza',`pizza`='$pizza',`valor_pizza`='$valor_pizza' WHERE 1 ";

        $dados_atualizados = $conexao->query($sql) or die($conexao->error);
        if ($dados_atualizados) {
            echo "<h1 style='color:green;'>Atualizado com sucesso</h1>";
        } else {
            die("ERROR:não atualizado $sql");
        }
    }
}
$sql_pizza = "SELECT * FROM `pizzas`  WHERE id_pizza='$id' ";
$query_pizza = $conexao->query($sql_pizza) or die($conexao->error);
$pizza= $query_pizza->fetch_assoc();

$consulta_pizza = "SELECT * FROM `pizzas`;";
$sql_pizza = mysqli_query($conexao, $consulta_pizza);

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
    <title>Cadastro de Pizzas</title>
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
    <div class="fundo_pizza">
        <div class="form">
            <fieldset class="novo">
                <legend>Pizzas</legend>
                <form method="GET" action="" class="formulario">
                    <label for="pizzas">Nome da Pizza:</label><br>
                    <select class="alter" name="pizzas" id="pizzas" required>
                        <option value="">Selecione a Pizza</option><br>
                        <?php
                        while ($row = mysqli_fetch_assoc($sql_pizza)) {
                        ?>
                            <option value="<?php echo $row['id_pizza']; ?>"><?php echo $row['pizza']; ?></option>
                            <!-- <option value=""></option> -->
                        <?php } ?>
                    </select>
                </form>
            </fieldset>
            <fieldset class="novo">
                <legend>Pizzas</legend>
                <form method="POST" action="" class="formulario">
                    <label for="pizzas">Código da Pizza:</label><br>
                    <input value="<?php echo @$id_pizza['pizzas']; ?> " type="text" id="pizzas" name="pizzas" required><br>
                    <label for="pizza">Nome da Pizza:</label><br>
                    <select name="pizza">
                        <option value="">Selecione a Pizza</option>
                        <?php
                        while ($row = mysqli_fetch_assoc($sql_pizza)) {
                        ?>
                            <option value="<?php echo $row['id_pizza']; ?>"><?php echo $row['pizza']; ?></option>
                            <!-- <option value=""></option> -->
                        <?php } ?>
                        <option value="">Selecione...</option>
                        <option value="Alho e óleo">Alho e óleo</option>
                        <option value="Atum">Atum</option>
                        <option value="Bolonhesa">Bolonhesa</option>
                        <option value="Calabresa">Calabresa</option>
                        <option value="Crocante">Crocante</option>
                        <option value="Espanhola">Espanhola</option>
                        <option value="Milho">Milho</option>
                        <option value="Napolitana">Napolitana</option>
                        <option value="Paulista">Paulista</option>
                        <option value="Vegetariana">Vegetariana</option>
                        <option value="Presunto e Queijo">Presunto e Queijo</option>
                        <option value="Frango">Frango</option>
                        <option value="Lombinho">Lombinho</option>
                        <option value="Portuguesa">Portuguesa</option>
                        <option value="Carijó">Carijó</option>
                        <option value="Especial da Dina">Especial da Dina</option>
                        <option value="Quatro Qeuijos">Quatro Qeuijos</option>
                        <option value="Catubresa">Catubresa</option>
                        <option value="Caipira">Caipira</option>
                        <option value="Calabresa com Requeijão Cremoso">Calabresa com Requeijão Cremoso</option>
                        <option value="Bacon com Requeijão Cremoso">Bacon com Requeijão Cremoso</option>
                        <option value="Bacon">Bacon</option>
                        <option value="Champignon">Champignon</option>
                        <option value="Coração">Coração</option>
                        <option value="Fscarola">Fscarola</option>
                        <option value="Especial do Bolinha">Especial do Bolinha</option>
                        <option value="Muçarela">Muçarela</option>
                        <option value="Frango com Cheddar">Frango com Cheddar</option>
                        <option value="Frango Crocante">Frango Crocante</option>
                        <option value="Frango com Bacon">Frango com Bacon</option>
                        <option value="Frango com Requeijão Cremoso">Frango com Requeijão Cremoso</option>
                        <option value="Lombacon">Lombacon</option>
                        <option value="Lombo com Champignon">Lombo com Champignon</option>
                        <option value="Lombo com Cheddar">Lombo com Cheddar</option>
                        <option value="Lombinho com Requeijão Cremoso">Lombinho com Requeijão Cremoso</option>
                        <option value="Marguerita">Marguerita</option>
                        <option value="Mexicana">Mexicana</option>
                        <option value="Milho com Bacon">Milho com Bacon</option>
                        <option value="Toscana">Toscana</option>
                        <option value="Universo">Universo</option>
                        <option value="Palmito com Champignon">Palmito com Champignon</option>
                        <option value="Peruana">Peruana</option>
                        <option value="Pizza do Rei">Pizza do Rei</option>
                        <option value="Tomate Seco com Rúcula">Tomate Seco com Rúcula</option>
                        <option value="Siciliana">Siciliana</option>
                        <option value="A Moda do Pizzaiolo">A Moda do Pizzaiolo</option>
                        <option value="Curitibana">Curitibana</option>
                        <option value="Apiaiense">Apiaiense</option>
                        <option value="Salame">Salame</option>
                        <option value="Pepperoni">Pepperoni</option>
                        <option value="Strogonoff de Frango">Strogonoff de Frango</option>
                        <option value="Strogonoff de Carne">Strogonoff de Carne</option>
                        <option value="Picante">Picante</option>
                        <option value="Pernil">Pernil</option>
                        <option value="Nordestina">Nordestina</option>
                        <option value="Costela">Costela</option>
                        <option value="Mignon Especial">Mignon Especial</option>
                        <option value="Catumarão">Catumarão</option>
                        <option value="Camarão">Camarão</option>
                        <option value="Picanha">Picanha</option>
                        <option value="Brigadeiro">Brigadeiro</option>
                        <option value="California">California</option>
                        <option value="Dois Amores">Dois Amores</option>
                        <option value="Chocolate">Chocolate</option>
                        <option value="Chokito">Chokito</option>
                        <option value="Prestígio">Prestígio</option>
                        <option value="Banana">Banana</option>
                        <option value="Confete">Confete</option>
                        <option value="Banana com Dois Amores">Banana com Dois Amores</option>
                        <option value="Banana com Chocolate">Banana com Chocolate</option>
                        <option value="Banana Nevada">Banana Nevada</option>
                        <option value="Banofe">Banofe</option>
                        <option value="Chocolate com Morango">Chocolate com Morango</option>
                        <option value="Dois Amores com Morango">Dois Amores com Morango</option>
                        <option value="Doce de Leite com Paçoca">Doce de Leite com Paçoca</option>
                    </select><br>
                    <label for="tamanho">Tamanho da Pizza:</label><br>
                    <select name="tamanho">
                        <option value="">Selecione o Tamanho da Pizza</option>
                        <?php
                        while ($row = mysqli_fetch_assoc($sql_pizza)) {
                        ?>
                            <option value="<?php echo $row['id_pizza']; ?>"><?php echo $row['pizza']; ?></option>
                            <!-- <option value=""></option> -->
                        <?php } ?>
                        <option value="">Selecione...</option>
                        <option value="Pequena">Pequena</option>
                        <option value="Média">Média</option>
                        <option value="Grande">Grande</option>
                        <option value="Big">Big</option>
                        <option value="Giga">Giga</option>
                    </select><br>

                    <label for="valor">Valor do Produto R$:</label><br>
                    <input value="<?php echo @$id_pizza['valor']; ?>" type="text" id="valor" name="valor" required><br><br>
                    <input class="botom" type="reset" value="Limpar" name="limpar">
                    <input class="botom" type="submit" name="submit" value="Enviar">

                </form>

            </fieldset>
        </div>
    </div>

</body>

</html>