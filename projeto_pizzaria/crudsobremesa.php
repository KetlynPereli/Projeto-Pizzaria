<?php

$id_sobremesa=$_POST['sobremesas'];
$sobremesa=$_POST['sobremesa'];
$valor_sobremesa=$_POST['valor'];

include('conexaopizzaria.php');

$query="INSERT INTO `sobremesa`(`id_sobremesa`, `sobremesa`, `valor_sobremesa`) VALUES ('$id_sobremesa','$sobremesa','$valor_sobremesa')";

$result=mysqli_query($conexao,$query);

var_dump($query);

if(!$conexao){
    print "Falha ao inserir dados!";
}else{
    header("location: cadastrosobremesa.php");
}

?>