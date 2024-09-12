<?php 

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "produtos_db";

//Criando conexão com a db

$conn = new mysqli($servername, $username, $password, $dbname);


//Checando conexão com db

if ($conn->connect_error){
    die("Falha na conexão " . $conn->connect_error);
}

?>