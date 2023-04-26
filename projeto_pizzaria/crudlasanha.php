<?php

$id_lasanha=$_POST['lasanha'];
$lasanha=$_POST['lasanhas'];
$valor_lasanha=$_POST['valor'];

include('conexaopizzaria.php');

$query="INSERT INTO `lasanha`(`id_lasanha`, `lasanha`, `valor_lasanha`) VALUES ('$id_lasanha','$lasanha','$valor_lasanha')";

$result=mysqli_query($conexao,$query);

var_dump($query);

if(!$conexao){
    print "Falha ao inserir dados!";
}else{
    header("location: cadastrolasanha.php");
}

?>