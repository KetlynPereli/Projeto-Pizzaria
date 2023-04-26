<?php

$id_complementos=$_POST['complementos'];
$complemento=$_POST['complemento'];
$valor_complemento=$_POST['valor'];

include('conexaopizzaria.php');

$query="INSERT INTO `complementos`(`id_complementos`, `complemento`, `valor_complemento`) VALUES ('$id_complementos','$complemento','$valor_complemento')";

$result=mysqli_query($conexao,$query);

var_dump($query);

if(!$conexao){
    print "Falha ao inserir dados!";
}else{
    header("location: cadastrodecomplementos.php");
}

?>