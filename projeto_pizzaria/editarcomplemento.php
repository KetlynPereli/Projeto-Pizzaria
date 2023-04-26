<?php
include('conexaopizzaria.php');
@$id=intval($_GET['id_complementos']);

if(count($_POST)>0){
    $id_complementos=$_POST['complementos'];
    $complemento=$_POST['complemento'];
    $valor_complemento=$_POST['valor'];

$erro= '';
if(empty($id_complementos)){
    $erro='Preencha o Nome do Complemento';
}
if($erro){
    echo "<p style='color:red;'>$erro</p>";
}else{
   $sql="UPDATE `complementos` SET `id_complementos`='$id_complementos',`complemento`='$complemento',`valor_complemento`='$valor_complemento' WHERE 1 ";

$dados_atualizados=$conexao->query($sql)or die($conexao->error);
if($dados_atualizados){
    echo "<h1 style='color:green;'>Atualizado com sucesso</h1>";
}else{
    die("ERROR:não atualizado $sql");
}
}
}
$sql_complemento="SELECT * FROM `complementos` WHERE id_complementos='$id' ";
$query_complemento=$conexao->query($sql_complemento) or die($conexao->error);
$complemento=$query_complemento->fetch_assoc();

$consulta_complemento="SELECT * FROM `complementos`;";
$sql_complemento=mysqli_query($conexao,$consulta_complemento);

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
    <title>Cadastro de Complementos</title>
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
    <fieldset class="novo"><legend>Complementos</legend>
    <form method="GET" action="" class="formulario">   
                <label for="complementos">Nome do Complemento:</label><br>
            <select class="alter" name="complemento" id="complemento" required>
                <option value="">Selecione o Complemento</option><br>
                    <?php
                         while($row=mysqli_fetch_assoc($sql_complemento)){
                    ?>
                        <option value="<?php echo $row['id_complementos'];?>"><?php echo $row['complemento'];?></option>
                    <!-- <option value=""></option> -->
                        <?php } ?>   
            </select>         
    </form>
    </fieldset>
    <fieldset class="novo"><legend>Complementos</legend>
        <form method="POST" action="" class="formulario">
            <label for="complementos">Código do Complemento:</label><br>
                <input value="<?php echo @$id_complementos['complementos'];?> "type="text" id="complementos" name="complementos" required><br>
                <label for="complemento">Nome do Complemento:</label><br>
                <select name="complemento">
                <option value="">Selecione o Complemento das Pizzas Doces e Salgadas</option>
                    <?php
                         while($row=mysqli_fetch_assoc($sql_complemento)){
                    ?>
                        <option value="<?php echo $row['id_complementos'];?>"><?php echo $row['complemento'];?></option>
                    <!-- <option value=""></option> -->
                        <?php } ?>
                        <option value="">Selecione...</option>
                        <option value="Pepperoni">Pepperoni</option> 
                        <option value="Coração">Coração</option>
                        <option value="Camarão">Camarão</option>
                        <option value="Salame">Salame</option>
                        <option value="Mignon">Mignon</option>
                        <option value="Picanha">Picanha</option>
                        <option value="Carne Seca">Carne Seca</option>
                        <option value="Bolonhesa">Bolonhesa</option>
                        <option value="Presunto Ralado">Presunto Ralado</option>
                        <option value="Frango Desfiado">Frango Desfiado</option>
                        <option value="Calabresa">Calabresa</option>
                        <option value="Bacon">Bacon</option>
                        <option value="Atum">Atum</option>
                        <option value="Lombinho">Lombinho</option>
                        <option value="Muçarela">Muçarela</option>
                        <option value="Provole">Provole</option>
                        <option value="Parmesão">Parmesão</option>
                        <option value="Requeijão Cremoso">Requeijão Cremoso</option>
                        <option value="Cheddar">Cheddar</option>
                        <option value="Philadelfia">Philadelfia</option>
                        <option value="Champignon">Champignon</option>
                        <option value="Palmito">Palmito</option>
                        <option value="Milho">Milho</option>
                        <option value="1033">Ervilha</option>
                        <option value="Ervilha">Azeitonas</option>
                        <option value="Ovo de Codorna (a unidade)">Ovo de Codorna (a unidade)</option>
                        <option value="Tomate Seco">Tomate Seco</option>
                        <option value="Abacaxi">Abacaxi</option>
                        <option value="Figo">Figo</option> 
                        <option value="Pêssego">Pêssego</option>
                        <option value="Floco de Arroz">Floco de Arroz</option>
                        <option value="Coco">Coco</option>
                        <option value="Granulado">Granulado</option>
                        <option value="Confete">Confete</option>
                        <option value="Amendoim">Amendoim</option>
                        <option value="Chocolate Preto">Chocolate Preto</option>
                        <option value="Chocolate Branco">Chocolate Branco</option>
                        <option value="Leite Condensado">Leite Condensado</option>
                        <option value="Doce de Leite">Doce de Leite</option>
                        <option value="Paçoca">Paçoca</option>
                        <option value="Batata Palha">Batata Palha</option>
                        <option value="Creme de Leite">Creme de Leite</option>
                        <option value="Pimenta Calabresa">Pimenta Calabresa</option>
                        <option value="Manjericão">Manjericão</option>
                        <option value="Morangos">Morangos</option>
                        <option value="Banana">Banana</option>
                        <option value="Rúcula">Rúcula</option>
                        <option value="Escarola">Escarola</option>
                        <option value="Tomates">Tomates</option>
                        <option value="Cebola">Cebola</option>
                        <option value="Alho e óleo<">Alho e óleo</option>                   
                    </select><br>
                    <select name="complemento">
                    <option value="">Selecione o Complemento dos Sanduiches</option>
                    <?php
                         while($row=mysqli_fetch_assoc($sql_complemento)){
                    ?>
                        <option value="<?php echo $row['id_complementos'];?>"><?php echo $row['complemento'];?></option>
                    <!-- <option value=""></option> -->
                        <?php } ?>
                        <option value="">Selecione...</option>
                        <option value="Hamburguer">Hamburguer</option> 
                        <option value="Presunto">Presunto</option>
                        <option value="Bacon">Bacon</option>
                        <option value="Calabresa">Calabresa</option>
                        <option value="Frango Desfiado">Frango Desfiado</option>
                        <option value="Ovo">Ovo</option>
                        <option value="Molho Caseiro">Molho Caseiro</option>
                        <option value="Tomate">Tomate</option>
                        <option value="Alface">Alface</option>
                        <option value="Cebola">Cebola</option>         
                    </select><br>
                    <select name="complemento">
                    <option value="">Selecione o Complemento das Porções</option>
                    <?php
                         while($row=mysqli_fetch_assoc($sql_complemento)){
                    ?>
                        <option value="<?php echo $row['id_complementos'];?>"><?php echo $row['complemento'];?></option>
                    <!-- <option value=""></option> -->
                        <?php } ?>
                        <option value="">Selecione...</option>
                        <option value="Muçarela">Muçarela</option> 
                        <option value="Cheddar">Cheddar</option>
                        <option value="Requeijão Cremoso">Requeijão Cremoso</option>
                        <option value="Bacon">Bacon</option>
                        <option value="Molho Caseiro">Molho Caseiro</option>                
                    </select><br>
                <label for="valor">Valor do Produto R$:</label><br>
                <input value="<?php echo @$id_complementos['valor'];?>"type="text" id="valor" name="valor" required><br><br>
                <input class="botom" type="reset" value="Limpar" name="limpar">
            <input class="botom" type="submit" name="submit" value="Enviar"> 

        </form>

    </fieldset>


</body>
</html>