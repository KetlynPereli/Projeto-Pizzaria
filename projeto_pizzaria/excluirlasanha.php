<?php

require ('conexaopizzaria.php');

$id=$_GET['id_lasanha'];

$query="DELETE FROM `lasanha` WHERE id_lasanha=$id";

$result = mysqli_query($conexao,$query);

header('location: listalasanha.php');


echo $id;





?>