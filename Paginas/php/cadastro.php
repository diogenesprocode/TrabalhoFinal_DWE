<!DOCTYPE html>
<html lang="pt-br">
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
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" 
		integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>

	<title>RFDIBiblioteca - Cadastro de Livros</title>
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

		<div class="container">
			<div class="page-header">
				<h1>Cadastro de livros</h1>
			</div>	
			<section>
				<!-- Formulario -->
				<form class="form-horizontal" action="bancocadastro.php" method="post">
					<div class="form-group">
						<label for="titulo">Título do Livro</label>
						<input type="text" class="form-control" id="titulo" name="titulo" maxlength="30">
						<label for="autor">Autor do Livro</label>
						<input type="text" class="form-control" id="autor" name="autor" maxlength="30">
					</div>
					<div class="form-group">
						<label for="tombo">Tombo do Livro</label>
						<input type="number" class="form-control" id="tombo" name="tombo" min="0" required="required">
						<label for="idEtiqueta">Etiqueta RFID</label>
						<input type="text" class="form-control" id="idEtiqueta" name="idEtiqueta" maxlength="11" required="required">
					</div>
					<div class="form-group">
						<label for="idestante">Estante do Livro</label>
						<input type="number" class="form-control" id="idestante" name="idestante" min="0" required="required">
					</div>		
					<input type="submit" value="Cadastrar" class="btn btn-default">
					<input type="reset" value="Limpar" class="btn btn-default">			
				</form>
				<!-- FIM -->			
			</section>
	</div>
</body>
</html>