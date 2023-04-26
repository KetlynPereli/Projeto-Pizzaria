<?php
include('conexaopizzaria.php');
@$id = intval($_GET['id_bebidas']);

if (count($_POST) > 0) {
    $id_bebidas = $_POST['bebidas'];
    $bebida = $_POST['bebida'];
    $valor_bebida = $_POST['valor'];

    $erro = '';
    if (empty($id_bebidas)) {
        $erro = 'Preencha o Nome da Bebida';
    }
    if ($erro) {
        echo "<p style='color:red;'>$erro</p>";
    } else {
        $sql = "UPDATE `bebidas` SET `id_bebidas`='$id_bebidas',`bebida`='$bebida',`valor_bebida`='$valor_bebida' WHERE 1 ";

        $dados_atualizados = $conexao->query($sql) or die($conexao->error);
        if ($dados_atualizados) {
            echo "<h1 style='color:green;'>Atualizado com sucesso</h1>";
        } else {
            die("ERROR:não atualizado $sql");
        }
    }
}
$sql_bebida = "SELECT * FROM `bebidas`  WHERE id_bebidas='$id' ";
$query_bebida = $conexao->query($sql_bebida) or die($conexao->error);
$bebida = $query_bebida->fetch_assoc();

$consulta_bebida = "SELECT * FROM `bebidas`;";
$sql_bebida = mysqli_query($conexao, $consulta_bebida);

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Favicon.ico">
    <link rel="stylesheet" href="estilo.css">
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans&family=Roboto+Slab:wght@600&display=swap" rel="stylesheet">
    <title>Cadastro de Bebidas</title>
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
    <div class="fundo_bebida">
        <div class="form">
            <fieldset class="novo">
                <legend>Bebidas</legend>
                <form method="GET" action="" class="formulario">
                    <label for="nome">Nome da Bebida:</label><br>
                    <select class="alter" name="bebida" id="bebida" required>
                        <option value="">Selecione a Bebida</option><br>
                        <?php
                        while ($row = mysqli_fetch_assoc($sql_bebida)) {
                        ?>
                            <option value="<?php echo $row['id_bebidas']; ?>"><?php echo $row['bebida']; ?></option>
                            <!-- <option value=""></option> -->
                        <?php } ?>
                    </select>
                </form>
            </fieldset>
            <fieldset class="novo">
                <legend>Bebidas</legend>
                <form method="POST" action="" class="formulario">
                    <label for="bebida">Código da Bebida:</label><br>
                    <input value="<?php echo @$id_bebidas['bebidas']; ?> " type="text" id="bebida" name="bebidas" required><br>
                    <label for="nome">Nome da Bebida:</label><br>
                    <select name="bebida">
                        <option value="">Selecione a Bebida</option>
                        <?php
                        while ($row = mysqli_fetch_assoc($sql_bebida)) {
                        ?>
                            <option value="<?php echo $row['id_bebidas']; ?>"><?php echo $row['bebida']; ?></option>
                            <!-- <option value=""></option> -->
                        <?php } ?>
                        <option value="Abacaxi Copo">Abacaxi Copo</option>
                        <option value="Laranja Copo">Laranja Copo</option>
                        <option value="Abacaxi com Hortelã Copo">Abacaxi com Hortelã Copo</option>
                        <option value="Açai Copo">Açai Copo</option>
                        <option value="Acerola Copo">Acerola Copo</option>
                        <option value="Acerola com Laranja Copo">Acerola com Laranja Copo</option>
                        <option value="Cajú Copo">Cajú Copo</option>
                        <option value="Coco Verde Copo">Coco Verde Copo</option>
                        <option value="Frutas Vermelhas Copo">Frutas Vermelhas Copo</option>
                        <option value="Goiaba Copo">Goiaba Copo</option>
                        <option value="Laranja 500ml para Viagem">Laranja 500ml para Viagem</option>
                        <option value="Limonada Suiça Copo">Limonada Suiça Copo</option>
                        <option value="Manga Copo">Manga Copo</option>
                        <option value="Manga com Abacaxi Copo">Manga com Abacaxi Copo</option>
                        <option value="Maracujá Copo">Maracujá Copo</option>
                        <option value="Morango Copo">Morango Copo</option>
                        <option value="Uva Copo">Uva Copo</option>
                        <option value="Abacaxi Jarra">Abacaxi Jarra</option>
                        <option value="Abacaxi com Hortelã Jarra">Abacaxi com Hortelã Jarra</option>
                        <option value="Açai Jarra">Açai Jarra</option>
                        <option value="Acerola Jarra">Acerola Jarra</option>
                        <option value="Acerola com Laranja Jarra">Acerola com Laranja Jarra</option>
                        <option value="Cajú Jarra">Cajú Jarra</option>
                        <option value="Coco Verde Jarra">Coco Verde Jarra</option>
                        <option value="Frutas Vermelhas Jarra">Frutas Vermelhas Jarra</option>
                        <option value="Goiaba Jarra">Goiaba Jarra</option>
                        <option value="Laranja Jarra">Laranja Jarra</option>
                        <option value="Limonada Suiça Jarra">Limonada Suiça Jarra</option>
                        <option value="Manga Jarra">Manga Jarra</option>
                        <option value="Manga com Abacaxi Jarra">Manga com Abacaxi Jarra</option>
                        <option value="Maracujá Jarra">Maracujá Jarra</option>
                        <option value="Morango Jarra">Morango Jarra</option>
                        <option value="Uva Jarra">Uva Jarra</option>
                        <option value="Vitamina de Açai Copo">Vitamina de Açai Copo</option>
                        <option value="Vitamina de Acerola Copo">Vitamina de Acerola Copo</option>
                        <option value="Vitamina de Cajú Copo">Vitamina de Cajú Copo</option>
                        <option value="Vitamina de Coco Verde Copo">Vitamina de Coco Verde Copo</option>
                        <option value="Vitamina de Frutas Vermelhas Copo">Vitamina de Frutas Vermelhas Copo</option>
                        <option value="Vitamina de Goiaba Copo">Vitamina de Goiaba Copo</option>
                        <option value="Vitamina de Manga Copo">Vitamina de Manga Copo</option>
                        <option value="Vitamina de Maracujá Copo">Vitamina de Maracujá Copo</option>
                        <option value="Vitamina de Morango Copo">Vitamina de Morango Copo</option>
                        <option value="Vitamina de Uva Copo">Vitamina de Uva Copo</option>
                        <option value="Vitamina de Abacaxi Jarra">Vitamina de Abacaxi Jarra</option>
                        <option value="Vitamina de Açai Jarra">Vitamina de Açai Jarra</option>
                        <option value="Vitamina de Acerola Jarra">Vitamina de Acerola Jarra</option>
                        <option value="Vitamina de Cajú Jarra">Vitamina de Cajú Jarra</option>
                        <option value="Vitamina de Coco Verde Jarra">Vitamina de Coco Verde Jarra</option>
                        <option value="Vitamina de Frutas Vermelhas Jarra">Vitamina de Frutas Vermelhas Jarra</option>
                        <option value="Vitamina de Goiaba Jarra">Vitamina de Goiaba Jarra</option>
                        <option value="Vitamina de Manga Jarra">Vitamina de Manga Jarra</option>
                        <option value="Vitamina de Maracujá Jarra">Vitamina de Maracujá Jarra</option>
                        <option value="Vitamina de Morango Jarra">Vitamina de Morango Jarra</option>
                        <option value="Vitamina de Uva Jarra">Vitamina de Uva Jarra</option>
                        <option value="Coca-cola 290ml">Coca-cola 290ml</option>
                        <option value="Coca-Cola Zero 290ml">Coca-Cola Zero 290ml</option>
                        <option value="Fanta Laranja 290ml">Fanta Laranja 290ml</option>
                        <option value="Guaraná 290ml">Guaraná 290ml</option>
                        <option value="Sprit 290ml">Sprit 290ml</option>
                        <option value="Água Tônica Lata">Água Tônica Lata</option>
                        <option value="Cítrus Lata">Cítrus Lata</option>
                        <option value="Fanta Uva Lata">Fanta Uva Lata</option>
                        <option value="Água de Coco 330ml">Água de Coco 330ml</option>
                        <option value="Água Mineral com Gás">Água Mineral com Gás</option>
                        <option value="Água Mineral sem Gás">Água Mineral sem Gás</option>
                        <option value="Aquarius Sabores">Aquarius Sabores</option>
                        <option value="Chá Leão Sabores">Chá Leão Sabores</option>
                        <option value="Guaraná Power Sabores">Guaraná Power Sabores</option>
                        <option value="Kapo Sabores">Kapo Sabores</option>
                        <option value="Soda Sabores">Soda Sabores</option>
                        <option value="Suco Sabores Lata">Suco Sabores Lata</option>
                        <option value="Suco Uva Integral">Suco Uva Integral</option>
                        <option value="Vinho de Pêssego 750ml">Vinho de Pêssego 750ml</option>
                        <option value="Vinho de Pêssego Jarra">Vinho de Pêssego Jarra</option>
                        <option value="Vinho de Pêssego Taça">Vinho de Pêssego Taça</option>
                        <option value="Vinho Tinto Seco 750ml">Vinho Tinto Seco 750ml</option>
                        <option value="Vinho Tinto Seco Jarra">Vinho Tinto Seco Jarra</option>
                        <option value="Vinho Tinto Seco Taça">Vinho Tinto Seco Taça</option>
                        <option value="Vinho Tinto Suave 750ml">Vinho Tinto Suave 750ml</option>
                        <option value="Vinho Tinto Suave Jarra">Vinho Tinto Suave Jarra</option>
                        <option value="Vinho Tinto Suave Taça">Vinho Tinto Suave Taça</option>
                        <option value="Amstel 600ml">Amstel 600ml</option>
                        <option value="Brahma 600ml">Brahma 600ml</option>
                        <option value="Heineken 600ml">Heineken 600ml</option>
                        <option value="Original 600ml">Original 600ml</option>
                        <option value="Cerveja Zero Alcool">Cerveja Zero Alcool</option>
                        <option value="Heineken LN 355ml">Heineken LN 355ml</option>
                        <option value="Malzebier LN 355ml">Malzebier LN 355ml</option>
                        <option value="Sol LN 355ml">Sol LN 355ml</option>
                        <option value="Amstel LN 350ml">Amstel LN 350ml</option>
                        <option value="Brahma LN 350ml">Brahma LN 350ml</option>
                        <option value="Kaiser LN 350ml">Kaiser LN 350ml</option>
                        <option value="Chopp Claro 300ml">Chopp Claro 300ml</option>
                        <option value="Chopp Claro 500ml">Chopp Claro 500ml</option>
                        <option value="Chopp Vinho 300ml">Chopp Vinho 300ml</option>
                        <option value="Chopp Vinho 500ml">Chopp Vinho 500ml</option>
                        <option value="Chopp Vinho Draft 600ml">Chopp Vinho Draft 600ml</option>
                        <option value="Torre Chopp Claro 2,5lts">Torre Chopp Claro 2,5lts</option>
                        <option value="Torre Chopp Claro 3,5lts">Torre Chopp Claro 3,5lts</option>
                        <option value="Torre Chopp Vinho 2,5lts">Torre Chopp Vinho 2,5lts</option>
                        <option value="Torre Chopp Vinho 3,5lts">Torre Chopp Vinho 3,5lts</option>
                        <option value="Torre Coca-Cola 2,5lts">Torre Coca-Cola 2,5lts</option>
                        <option value="Torre Fanta 2,5lts">Torre Fanta 2,5lts</option>
                        <option value="Bacardi">Bacardi</option>
                        <option value="Bacardi Limón">Bacardi Limón</option>
                        <option value="Bacardi Maçã Verde">Bacardi Maçã Verde</option>
                        <option value="Campari">Campari</option>
                        <option value="Curacau Blue">Curacau Blue</option>
                        <option value="Domecq">Domecq</option>
                        <option value="Martini">Martini</option>
                        <option value="Menta">Menta</option>
                        <option value="San Remi">San Remi</option>
                        <option value="Steinhaeger Dose">Steinhaeger Dose</option>
                        <option value="Ypioca Dose">Ypioca Dose</option>
                        <option value="Smirnoff Dose">Smirnoff Dose</option>
                        <option value="Absinto Dose">Absinto Dose</option>
                        <option value="Amarula Dose">Amarula Dose</option>
                        <option value="Tequila Dose">Tequila Dose</option>
                        <option value="Whisky Jack Daniels Dose">Whisky Jack Daniels Dose</option>
                        <option value="Whisky Jonnhy Red Dose">Whisky Jonnhy Red Dose</option>
                        <option value="Red Bull 250ml">Red Bull 250ml</option>
                        <option value="Caipira de Bacardi">Caipira de Bacardi</option>
                        <option value="Caipira de Malibu">Caipira de Malibu</option>
                        <option value="Caipira de Morango">Caipira de Morango</option>
                        <option value="Caipira de Saque">Caipira de Saque</option>
                        <option value="Caipira de Smirnoff">Caipira de Smirnoff</option>
                        <option value="Caipira de Steinhaeger">Caipira de Steinhaeger</option>
                        <option value="Caipira de Vinho">Caipira de Vinho</option>
                        <option value="Caipira de Ypioca">Caipira de Ypioca</option>
                        <option value="Coquetél Alexander">Coquetél Alexander</option>
                        <option value="Coquetél Dry Martini">Coquetél Dry Martini</option>
                        <option value="Coquetél HI-FI com Suco">Coquetél HI-FI com Suco</option>
                        <option value="Coquetél Margerita">Coquetél Margerita</option>
                        <option value="Gin Tônica">Gin Tônica</option>
                        <option value="HI-FI com Fanta">HI-FI com Fanta</option>
                        <option value="Smirnoff Ice">Smirnoff Ice</option>
                        <option value="Combo Jack Daniels + 6 Red Bull">Combo Jack Daniels + 6 Red Bull</option>
                        <option value="Combo Tequila">Combo Tequila</option>
                        <option value="Combo Bacardi + 4 Citrus">Combo Bacardi + 4 Citrus</option>
                        <option value="Espumante Chandon 750ml">Espumante Chandon 750ml</option>
                        <option value="Espumante Salton 750ml">Espumante Salton 750ml</option>
                        <option value="Garrafa Amarula">Garrafa Amarula</option>
                    </select><br>
                    <label for="valor">Valor do Produto R$:</label><br>
                    <input value="<?php echo @$id_bebidas['valor']; ?>" type="text" id="valor" name="valor" required><br><br>
                    <input class="botom" type="reset" value="Limpar" name="limpar">
                    <input class="botom" type="submit" name="submit" value="Enviar">

                </form>

            </fieldset>
        </div>
    </div>

</body>

</html>