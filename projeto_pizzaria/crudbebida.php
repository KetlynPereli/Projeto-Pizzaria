<?php

$id_bebidas=$_POST['bebidas'];
$bebida=$_POST['bebida'];
$valor_bebida=$_POST['valor'];

include('conexaopizzaria.php');

$query="INSERT INTO `bebidas`(`id_bebidas`, `bebida`, `valor_bebida`) VALUES ('$id_bebidas','$bebida','$valor_bebida')";

$result=mysqli_query($conexao,$query);

var_dump($query);

if(!$conexao){
    print "Falha ao inserir dados!";
}else{
    header("location: cadastrobebidas.php");
}

?>