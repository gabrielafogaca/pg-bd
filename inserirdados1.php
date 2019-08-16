<?php
//Conectar–se ao BD
$dbhost = 'localhost';
$dbuser = 'aluno';
$dbpassword = 'aluno';
$dbname = 'atv_prt_042_bd';
//Efetua a conexão com o BD
$link = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname) or die('Error connecting to MySQL Server.');
//Obtém os valores do formulário
$nome = $_POST['nome'];
$idade= $_POST['idade'];

//Cria a Query SQL
$query = "INSERT INTO teste1 (nome, idade) VALUES ('$nome', '$idade')";
$result = mysqli_query( $link, $query ) or die('Error querying database.');
//Fechar a conexão com o BD
mysqli_close($link);

?>