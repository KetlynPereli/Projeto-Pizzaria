<?php

require ('conexaopizzaria.php');

$id=$_GET['id_nhoque'];

$query="DELETE FROM `nhoque` WHERE id_nhoque=$id";

$result = mysqli_query($conexao,$query);

header('location: listanhoque.php');


echo $id;

?>