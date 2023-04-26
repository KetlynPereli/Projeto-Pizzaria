<?php

$id_pizza=$_POST['pizzas'];
$pizza=$_POST['pizza'];
$tamanho=$_POST['tamanho'];
$valor_pizza=$_POST['valor'];

include('conexaopizzaria.php');

$query="INSERT INTO `pizzas`(`id_pizza`, `pizza`, `tamanho`, `valor_pizza`) VALUES ('$id_pizza','$pizza', '$tamanho', '$valor_pizza')";

$result=mysqli_query($conexao,$query);

var_dump($query);

if(!$conexao){
    print "Falha ao inserir dados!";
}else{
    header("location: cadastrodepizzas.php");
}

?>