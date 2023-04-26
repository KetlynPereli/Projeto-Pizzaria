<?php
include('conexaopizzaria.php');
@$id=intval($_GET['id_talharim']);

if(count($_POST)>0){
    $id_talharim=$_POST['talharim'];
    $talharim_rondeli=$_POST['rondeli'];
    $valor_talharim=$_POST['valor'];

$erro= '';
if(empty($id_talharim)){
    $erro='Preencha o Nome do Talarim';
}
if($erro){
    echo "<p style='color:red;'>$erro</p>";
}else{
   $sql="UPDATE `talharim_e_rondeli` SET `id_talharim`='$id_talharim',`talharim_rondeli`='$talharim_rondeli',`valor_talharim`='$valor_talharim' WHERE 1 ";

$dados_atualizados=$conexao->query($sql)or die($conexao->error);
if($dados_atualizados){
    echo "<h1 style='color:green;'>Atualizado com sucesso</h1>";
}else{
    die("ERROR:não atualizado $sql");
}
}
}
$sql_id_talharim="SELECT * FROM `talharim_e_rondeli`  WHERE id_sanduiche='$id' ";
$query_id_talharim=$conexao->query($sql_id_talharim) or die($conexao->error);
$livro=$query_id_talharim->fetch_assoc();

$consulta_id_talharim="SELECT * FROM `talharim_e_rondeli`;";
$sql_id_talharim=mysqli_query($conexao,$consulta_id_talharim);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Favicon.ico">
    <link rel="stylesheet" href="estilo.css">
    <title>Cadastro de Talharim e Rondlei</title>
</head>
<body>
<div class="logo"></div>
    <nav>
        <!-- <a href="home_pizzaria.html">Menu</a> | -->
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
    </nav>

    <fieldset class="novo"><legend>Cadastro de Talharim e Rondeli</legend>
    <form method="GET" action="" class="formulario">   
                <label for="sobremesa">Nome do Talharim ou Rondlei:</label><br>
            <select class="alter" name="rondeli" id="rondeli" required>
                <option value="">Selecione o Talharim ou Rondlei</option><br>
                    <?php
                         while($row=mysqli_fetch_assoc($sql_talharim)){
                    ?>
                        <option value="<?php echo $row['$id_talharim'];?>"><?php echo $row['talharim'];?></option>
                    <!-- <option value=""></option> -->
                        <?php } ?>   
            </select>         
    </form>
    </fieldset>
    <fieldset class="novo"><legend>Cadastro de Talharim e Rondeli</legend>
        <form method="POST" action="" class="formulario">
            <label for="talharim">Código do Talharim ou Rondeli:</label><br>
                <input value="<?php echo @$id_talharim['rondeli'];?> "type="text" id="rondeli" name="rondeli" required><br>
                <label for="rondeli">Nome do Talharim ou Rondlei:</label><br>
                <select name="rondeli">
                <option value="">Selecione o Talharim ou Rondlei</option>
                    <?php
                         while($row=mysqli_fetch_assoc($sql_talharim)){
                    ?>
                        <option value="<?php echo $row['$id_talharim'];?>"><?php echo $row['talharim'];?></option>
                    <!-- <option value=""></option> -->
                        <?php } ?>
                        <option value="">Selecione...</option>
                        <option value="Rondeli">Rondeli</option> 
                        <option value="Talharim Quatro Queijos">Talharim Quatro Queijos</option>
                        <option value="Talharim a Bolonhesa">Talharim a Bolonhesa</option>      
                    </select><br>
                <label for="valor">Valor do Produto R$:</label><br>
                <input value="<?php echo @$id_talharim['valor'];?>"type="text" id="valor" name="valor" required><br><br>
                <input class="botom" type="reset" value="Limpar" name="limpar">
            <input class="botom" type="submit" name="submit" value="Enviar"> 

        </form>

    </fieldset>


</body>
</html>