<!DOCTYPE html>

<html> 
<head>
<meta charset="utf-8" />

<title>Tabela</title>

</head> 
<body>
<h1>Tabela</h1>

<?php
//Database connection details to mySQL
$host = 'localhost';
$user = 'aluno';
$passw = 'aluno'; 
$dbname = 'atv_prt_041_bd';
//Make a connection to the database
$conn = mysqli_connect($host, $user, $passw, $dbname) or die ("Unable to connect!");
//Create the SQL query
$query = "SELECT Membros.nome, Membros.email, escola.nome_escola, Membros.funcao, escola.estado, equipes.nome_equipe FROM Membros, equipes, escola where Membros.numero_equipe = equipes.id_equipe and Membros.nome_escola = escola.nome_escola";
$result = mysqli_query( $conn, $query ) or die ("Error in query");
//Fetch the result into an associative array
while ( $row = mysqli_fetch_assoc( $result ) ) {
$table[] = $row; //add each row into the table array
}
?>