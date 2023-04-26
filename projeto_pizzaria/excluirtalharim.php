<?php

require ('conexaopizzaria.php');

$id=$_GET['id_talharim'];

$query="DELETE FROM `talharim_e_rondeli` WHERE id_talharim=$id";

$result = mysqli_query($conexao,$query);

header('location: listatalharim.php');


echo $id;

?>