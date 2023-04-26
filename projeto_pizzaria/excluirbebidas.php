<?php
/* include("conexaopizzaria.php");

$recid=intval($_GET['id_bebidas']);

mysqli_query($conexao, "DELETE FROM bebidas WHERE id_bebidas=$recid");

header("location: excluirbebidas.php") */


require ('conexaopizzaria.php');

$id=$_GET['id_bebidas'];

$query="DELETE FROM `bebidas` WHERE id_bebidas=$id";

$result = mysqli_query($conexao,$query);

header('location: listabebidas.php');


echo $id;








?>