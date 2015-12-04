<?php
	$titulo = $_POST['titulo'];
	$autor = $_POST['autor'];
	$tombo = $_POST['tombo'];
	$idEtiqueta = $_POST['idEtiqueta'];
	$idestante = $_POST['idestante'];

	$dbh = new PDO('pgsql:host=localhost;port=5432;dbname=trabalhofinal', 'postgres', '');
	//$dbh = new PDO('mysql:host=localhost;port=3306;dbname=trabalhofinal', 'root', '');
	
	$sql = "INSERT INTO livroetiquetado VALUES ('$idEtiqueta', '$tombo', '$idestante','$autor', '$titulo')";
	$resultado = $dbh->exec($sql);
	if($resultado){
		//echo 'Inserido com sucesso!';
		echo '<meta HTTP-EQUIV="Refresh" CONTENT="5; URL=cadastro.php">';
	}
	else{
		echo 'Erro!';
		print_r($dbh->errorInfo());
		print_r($dbh->code());
	}
?>