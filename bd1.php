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
                                            
<table>
<tr>
<td><strong>Membro</strong></td>
<td width="10">&nbsp;</td>
<td><strong> Email</strong></td>
<td width="10">&nbsp;</td>
<td><strong>Escola</strong></td>
<td width="10">&nbsp;</td>
<td><strong>Função</strong></td>
<td width="10">&nbsp;</td>
<td><strong>Estado</strong></td>
<td width="10">&nbsp;</td>
<td><strong>Nome da Equipe</strong></td>
</tr>

<?php

if ($table) { //Check if there are any rows to be displayed
//Retrieve each element of the array
foreach($table as $d_row) {

?>

<tr>
<td><?php echo($d_row["membro"]); ?></td>
<td width="10">&nbsp;</td>
<td><?php echo($d_row["email"]); ?></td>
<td width="10">&nbsp;</td>
<td><?php echo($d_row["escola"]); ?></td>
<td width="10">&nbsp;</td>
<td><?php echo($d_row["funcao"]); ?></td>
<td width="10">&nbsp;</td>
<td><?php echo($d_row["estado"]); ?></td>
<td width="10">&nbsp;</td>
<td><?php echo($d_row["nome_equipe"]); ?></td>
</tr>

<?php

}
}

?>
</table>

<p>Número de Registros : <?php echo(mysqli_num_rows($result)); ?></p>

<?php

mysqli_close($conn);

?>
</body>
</html>