<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../css/page.css" media="all" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>RFDIBiblioteca - Início</title>
</head>
<body>
	<nav>
		<h1>Página de busca</h1>
		<a href="index.php">Início</a>				
		<a href="cadastro.php">Cadastro de Livros</a>
	</nav>
	<section>
		<form action="bancopesquisa.php" method="post">
			<label for="nome">Nome do Livro</label>
			<input type="text" id="titulo" name="titulo" maxlength="30">
			<label for="autor">Autor do Livro</label>
			<input type="text" id="autor" name="autor" maxlength="30">
			<br />
			<label for="idLivro">Tombo do Livro</label>
			<input type="number" id="tombo" name="tombo" min="0" value="0">
			<br />
			<input type="submit" value="Pesquisar">
			<input type="reset" value="Limpar">		
		</form>
	</section>
</body>
</html>