<?php

$id_sanduiche=$_POST['sanduiche'];
$sanduiche=$_POST['sanduiches'];
$valor_sanduiche=$_POST['valor'];

include('conexaopizzaria.php');

$query="INSERT INTO `sanduiche`(`id_sanduiche`, `sanduiche`, `valor_sanduiche`) VALUES ('$id_sanduiche','$sanduiche','$valor_sanduiche')";

$result=mysqli_query($conexao,$query);

var_dump($query);

if(!$conexao){
    print "Falha ao inserir dados!";
}else{
    header("location: cadastrosanduiche.php");
}

?>