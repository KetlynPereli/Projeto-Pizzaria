<?php

require ('conexaopizzaria.php');

$id=$_GET['id_calzone'];

$query="DELETE FROM `calzone` WHERE id_calzone=$id";

$result = mysqli_query($conexao,$query);

header('location: listacalzone.php');


echo $id;





?>