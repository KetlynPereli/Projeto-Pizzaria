<?php

require ('conexaopizzaria.php');

$id=$_GET['id_sobremesa'];

$query="DELETE FROM `sobremesa` WHERE id_sobremesa=$id";

$result = mysqli_query($conexao,$query);

header('location: listasobremesa.php');


echo $id;

?>