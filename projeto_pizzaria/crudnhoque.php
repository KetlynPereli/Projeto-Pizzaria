<?php

$id_nhoque=$_POST['nhoque'];
$nhoque=$_POST['nhoques'];
$valor_nhoque=$_POST['valor'];

include('conexaopizzaria.php');

$query="INSERT INTO `nhoque`(`id_nhoque`, `nhoque`, `valor_nhoque`) VALUES ('$id_nhoque','$nhoque','$valor_nhoque')";

$result=mysqli_query($conexao,$query);

var_dump($query);

if(!$conexao){
    print "Falha ao inserir dados!";
}else{
    header("location: cadastronhoque.php");
}

?>