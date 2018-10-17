<html>
<head>
	<title>Cadastro</title>

<!-- Última versão compilada e otimizada do CSS -->
<link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- Biblioteca do jQuery -->
<script
src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- Última versão complicada do JavaScript -->
<script
src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>
<body style="background-color:#0CF">

	<div class="container">
		<div class="col-md-4">
		</div>
		<div class="col-md-4">
			<div class="jumbotron" style="margin-top:150px">
				
				<h3> Cadastre-se </h3>
				
				<hr>

				<form method="post" action="cadastro.php">
					<div class="form-group">

						<input type="text" class="form-control" name="nome" placeholder="Digite o nome e o sobrenome"><br>

						<input type="email" class="form-control" name="email" placeholder="Digite o seu e-mail"><br>
											
						<input type="text" class="form-control" name="usuario" placeholder="Digite o usuário"><br>

						<input type="password" class="form-control" name="senha" placeholder="Digite a senha"><br>

						<input type="password" class="form-control" name="senha2" placeholder="Digite novamente a senha"><br>
											
					</div>

					<button type="submit" class="btn btn-success">Cadastrar</button>
					

				</form>
			</div>
		</div>
		<div class="col-md-4">
		</div>		
</body>
</html>