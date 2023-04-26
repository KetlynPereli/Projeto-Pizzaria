<?php

$id_talharim=$_POST['talharim'];
$talharim_rondeli=$_POST['rondeli'];
$valor_talharim=$_POST['valor'];

include('conexaopizzaria.php');

$query="INSERT INTO `talharim_e_rondeli`(`id_talharim`, `talharim_rondeli`, `valor_talharim`) VALUES ('$id_talharim','$talharim_rondeli','$valor_talharim')";

$result=mysqli_query($conexao,$query);

var_dump($query);

if(!$conexao){
    print "Falha ao inserir dados!";
}else{
    header("location: cadastrotalharim.php");
}

?>