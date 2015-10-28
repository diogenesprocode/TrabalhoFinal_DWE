<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>RFDIBiblioteca - Cadastro de Livros</title>
	<link rel="stylesheet" href="../css/page.css" media="all" type="text/css" />
</head>
<body>
	<nav>
		<h1>Cadastro de livros</h1>
		<a href="index.php">Início</a>				
		<a href="cadastro.php">Cadastro de Livros</a>
	</nav>
	<section>
		<form action="bancocadastro.php" method="post">
		<label for="titulo">Título do Livro</label>
		<input type="text" id="titulo" name="titulo" maxlength="30">
		<label for="autor">Autor do Livro</label>
		<input type="text" id="autor" name="autor" maxlength="30">
		<br />
		<label for="tombo">Tombo do Livro</label>
		<input type="number" id="tombo" name="tombo" min="0" required="required">
		<label for="idEtiqueta">Etiqueta RFID</label>
		<input type="text" id="idEtiqueta" name="idEtiqueta" maxlength="11" required="required">
		<br />

		<label for="idestante">Estante do Livro</label>
		<input type="number" id="idestante" name="idestante" min="0" required="required">
		<br />
		<input type="submit" value="Cadastrar">
		<input type="reset" value="Limpar">			
		</form>
	</section>
</body>
</html>