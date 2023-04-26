<?php

require ('conexaopizzaria.php');

$id=$_GET['id_salada'];

$query="DELETE FROM `salada` WHERE id_salada=$id";

$result = mysqli_query($conexao,$query);

header('location: listasalada.php');


echo $id;

?>