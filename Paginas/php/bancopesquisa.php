<?php
	$titulo = $_POST['titulo'];
	$autor = $_POST['autor'];
	$tombo = $_POST['tombo'];

	$dbh = new PDO('pgsql:host=localhost;port=5432;dbname=trabalhofinal', 'postgres', '');
	
	$sql = "SELECT * FROM livroEtiquetado WHERE titulo = '$titulo' OR autor = '$autor' OR tombo = $tombo";
	$resultado = $dbh->exec($sql);
	//echo $sql;

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Resultado</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../css/default.css" type="text/css" media="all" />
  </head>
  <body>
  <h1>Resultado da Pesquisa</h1>
  <table id="livros">
  <tr>
  	<th>Título</th>
  	<th>Autor</th>
  	<th>Tombo</th>
  	<th>Estante</th>
  </tr>
    <?php
      foreach($dbh->query($sql) as $linha){
      	echo "<tr>";
        echo "<td> {$linha['titulo']}";
        echo "<td> {$linha['autor']}";
        echo "<td> {$linha['tombo']}";
        echo "<td> {$linha['idestante']}";
        echo "<tr/>";
      }
    ?>  	
  </table>

  </body>
</html>
