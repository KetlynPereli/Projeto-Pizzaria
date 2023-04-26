<?php

require ('conexaopizzaria.php');

$id=$_GET['id_porcao'];

$query="DELETE FROM `porcoes` WHERE id_porcao=$id";

$result = mysqli_query($conexao,$query);

header('location: listaporcao.php');


echo $id;





?>