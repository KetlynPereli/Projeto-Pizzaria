<?php

$id_porcao=$_POST['porcoes'];
$porcao=$_POST['porcao'];
$valor_porcao=$_POST['valor'];

include('conexaopizzaria.php');

$query="INSERT INTO `porcoes`(`id_porcao`, `porcao`, `valor_porcao`) VALUES ('$id_porcao','$porcao','$valor_porcao')";

$result=mysqli_query($conexao,$query);

var_dump($query);

if(!$conexao){
    print "Falha ao inserir dados!";
}else{
    header("location: cadastrodeporcoes.php");
}

?>