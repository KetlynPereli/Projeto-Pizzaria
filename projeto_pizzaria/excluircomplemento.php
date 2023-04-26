<?php

require ('conexaopizzaria.php');

$id=$_GET['id_complementos'];

$query="DELETE FROM `complementos` WHERE id_complementos=$id";

$result = mysqli_query($conexao,$query);

header('location: listacomplemento.php');


echo $id;





?>