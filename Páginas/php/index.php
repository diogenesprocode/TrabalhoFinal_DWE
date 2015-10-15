<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>RFDIBiblioteca - Início</title>
</head>
<body>
<style>
	h1{
		background: url("../img/img1.jpg");
		text-shadow: 1px 1px 2px white;            
	}
	label{
			width: 110px;
			display: inline-block;	
	}
</style>
	<nav>
		<h1>Página de busca</h1>
		<a href="index.php">Início</a>				
		<a href="cadastro.php">Cadastro de Livros</a>
	</nav>
	<section>
		<form action="bancobusca.php" method="post">
			<label for="nome">Nome do Livro</label>
			<input type="text" id="nome">
			<label for="autor">Autor do Livro</label>
			<input type="text" id="autor">
			<br />
			<label for="idLivro">Tombo do Livro</label>
			<input type="text" id="idLivro">
			<br />
			<input type="submit" value="Pesquisar">
			<input type="submit" value="Limpar">			
		</form>
	</section>
</body>
</html>