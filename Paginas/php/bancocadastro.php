<?php
	$titulo = $_POST['titulo'];
	$autor = $_POST['autor'];
	$tombo = $_POST['tombo'];
	$idEtiqueta = $_POST['idEtiqueta'];
	$idestante = $_POST['idestante'];

	$dbh = new PDO('pgsql:host=localhost;port=5432;dbname=trabalhofinal', 'postgres', '');
	$sql = "INSERT INTO livroetiquetado VALUES ('$idEtiqueta', '$tombo', '$idestante','$autor', '$titulo')";
	$resultado = $dbh->exec($sql);
	if($resultado){
		echo 'Inserido com sucesso!';
	}
	else{
		echo 'Erro!';
		print_r($dbh->errorInfo());
	}
?>