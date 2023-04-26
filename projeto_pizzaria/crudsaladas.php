<?php

$id_salada=$_POST['saladas'];
$salada=$_POST['salada'];
$valor_salada=$_POST['valor'];

include('conexaopizzaria.php');

$query="INSERT INTO `salada`(`id_salada`, `salada`, `valor_salada`) VALUES ('$id_salada','$salada','$valor_salada')";

$result=mysqli_query($conexao,$query);

var_dump($query);

if(!$conexao){
    print "Falha ao inserir dados!";
}else{
    header("location: cadastrodesaladas.php");
}

?>