<?php
	$titulo = $_POST['titulo'];
	$autor = $_POST['autor'];
	$tombo = $_POST['tombo'];

	$dbh = new PDO('pgsql:host=localhost;port=5432;dbname=trabalhofinal', 'postgres', '');
	
  if ($titulo == "" && $autor == "" && $tombo == 0) {
    $sql = "SELECT * FROM livroEtiquetado";
  }
  else{
    $sql = "SELECT * FROM livroEtiquetado WHERE titulo = '$titulo' OR autor = '$autor' OR tombo = $tombo";
  }
	$resultado = $dbh->exec($sql);
	//echo $sql;

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="icon" href="../img/favicon.ico" type="image/ico">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" 
      integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" 
      integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/page.css" media="all" type="text/css" />
    <link rel="stylesheet" href="../css/page.css" media="all" type="text/css" />
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" 
      integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>

    <title>RFDIBiblioteca - Resultados da Pesquisa</title>
  </head>
  <body>
    <!-- Menu de navegação -->
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand">IFSP Biblioteca</a>
        </div>
        <div>
          <ul class="nav navbar-nav">
            <li><a href="index.php">Início <span class="sr-only">(current)</span></a></li>
            <li><a href="cadastro.php">Cadastro de Livros</a></li> 
          </ul>
        </div>
      </div>
    </nav>
    <!-- FIM -->
    
    <!-- Titulo da pagina -->
    <div class="container-fluid">
      <div class="page-header">
        <h1>Cadastro de livros</h1>
      </div>
    </div>
    <!-- FIM -->

    <div class="container">
    <table class="table table-hover" id="livros">
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
    <a href="index.php"><button class="btn btn-default" type="submit">Voltar</button></a>
    </div>
    
  </body>
</html>
