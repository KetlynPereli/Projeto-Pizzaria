<?php

require ('conexaopizzaria.php');

$id=$_GET['id_pizza'];

$query="DELETE FROM `pizzas` WHERE id_pizza=$id";

$result = mysqli_query($conexao,$query);

header('location: listapizza.php');


echo $id;





?>