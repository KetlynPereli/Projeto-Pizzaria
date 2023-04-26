<?php

$host="localhost";
$usuario="root";
$senha= "";
$bd="pizzaria";

$conexao= mysqli_connect($host,$usuario,$senha,$bd);

if ($conexao) {
    
    /* print("conexão ok!!"); */
    
} else {
    print("falha na conexão!!");
}


?>