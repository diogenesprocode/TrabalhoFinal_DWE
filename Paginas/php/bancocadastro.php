<?php
	$titulo = $_POST['titulo'];
	$autor = $_POST['autor'];
	$tombo = $_POST['tombo'];
	$idEtiqueta = $_POST['idEtiqueta'];

	$dbh = new PDO('pgsql:host=localhost;port=5432;dbname=trabalhofinal', 'postgres', '');
	$resultado = $dbh->exec($sql);
	
	$sql = "INSERT INTO emp VALUES ($idEtiqueta, $tombo, $idestante, $autor, $titulo"
	if($resultado){
		echo 'Inserido com sucesso!';
	}
	else{
		echo 'Erro!';
	}
?>