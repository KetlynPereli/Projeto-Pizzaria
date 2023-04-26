<?php

require ('conexaopizzaria.php');

$id=$_GET['id_sanduiche'];

$query="DELETE FROM `sanduiche` WHERE id_sanduiche=$id";

$result = mysqli_query($conexao,$query);

header('location: listasanduiche.php');


echo $id;

?>