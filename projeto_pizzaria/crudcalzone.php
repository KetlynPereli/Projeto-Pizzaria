<?php

$id_calzone=$_POST['calzone'];
$calzone=$_POST['calzones'];
$valor_calzone=$_POST['valor'];

include('conexaopizzaria.php');

$query="INSERT INTO `calzone`(`id_calzone`, `calzone`, `valor_calzone`) VALUES ('$id_calzone','$calzone','$valor_calzone')";

$result=mysqli_query($conexao,$query);

var_dump($query);

if(!$conexao){
    print "Falha ao inserir dados!";
}else{
    header("location: cadastrocalzone.php");
}

?>