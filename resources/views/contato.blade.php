<html>
<head>
	<title>Contato</title>

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
<body>

	<div class="container">
		<div class="navbar navbar-default">

				<nav class="navbar navbar-inverse">
	  				<div class="container-fluid">
		    			<div class="navbar-header">
		      				<a class="navbar-brand" href="#">Super.Online</a>
		    			</div>
		    			<ul class="nav navbar-nav">
		      				<li><a href="/ ">Home</a></li>
		      				<li  class="active"><a href="/buscar">Buscar</a></li>
		      				<li><a href="/contato">Contato</a></li>
		      				<li><a href="/usuario">Usuário</a></li>
		    			</ul>
		    			<ul class="nav navbar-nav navbar-right">
		      				<li><a href="/cadastro"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
		      				<li><a href="/autenticacao"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
		    			</ul>
	  				</div>
				</nav>

			</div>

		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<form name="formcontato" method="post" action="#">
					<div class="form-group">
						Nome: <input type="text" class="form-control" name="nome" placeholder="Nome Completo"><br>
						Email: <input type="email" class="form-control" name="email" placeholder="Seu e-mail"><br>
						Assunto: <input type="text" class="form-control" name="assunto" placeholder="Assunto da mensagem"><br>
						Mensagem: <textarea name="mensagem" class="form-control"></textarea><br>
						<input type="submit" class="btn btn-success" value="Enviar">
					</div>
				</form>
			</div>
			<div class="col-md-2"></div>
		</div>


	</div>

</body>
</html>