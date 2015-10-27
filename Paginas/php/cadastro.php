<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>RFDIBiblioteca - Cadastro de Livros</title>
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
		<h1>Cadastro de livros</h1>
		<a href="index.php">Início</a>				
		<a href="cadastro.php">Cadastro de Livros</a>
	</nav>
	<section>
		<form action="bancocadastro.php">
		<label for="titulo">Título do Livro</label>
		<input type="text" id="titulo" maxlength="">
		<label for="autor">Autor do Livro</label>
		<input type="text" id="autor">
		<br />
		<label for="tombo">Tombo do Livro</label>
		<input type="text" id="tombo" required="required">
		<label for="idEtiqueta">Etiqueta RFID</label>
		<input type="text" id="idEtiqueta" required="required">
		<br />
		<input type="submit" value="Cadastrar">
		<input type="submit" value="Limpar">			
		</form>
	</section>
</body>
</html>