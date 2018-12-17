<html>
<head>
	<title>Buscar</title>

<!-- Última versão compilada e otimizada do CSS -->
<link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- Biblioteca do jQuery -->
<script
src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- Última versão complicada do JavaScript -->
<script
src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="main.css">

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
    			<div class="col-md-4">
      				<form class="navbar-form navbar-left" action="/action_page.php">
      					<div class="form-group">
        					<input type="text" class="form-control" placeholder="Search">
      					</div>
      				<button type="submit" class="btn btn-default glyphicon glyphicon-search"></button>
      				<hr/>
      				
      				Faixas de preços:<br/>
      				<input type="checkbox" name="opcao" value="op1">Entre 10R$ e 25R$<br/>
      				<input type="checkbox" name="opcao" value="op2">Entre 25R$ e 50R$<br/>
      				<input type="checkbox" name="opcao" value="op3">Entre 50R$ e 100R$<br/>
    				
    				<hr/>
    				Categorias:<br/>
      				<input type="checkbox" name="opcao" value="op1">Café(26)<br/>
      				<input type="checkbox" name="opcao" value="op2">Açúcar (28)<br/>
      				<input type="checkbox" name="opcao" value="op3">Arroz Comum (44)<br/>
    				</form>

    			</div>

    			<div class="col-md-4">
					<a href="dados_prato.html"><img src="https://www.deliveryextra.com.br/img/uploads/1/800/527800.jpg?type=product" class="img-responsive" style="width:70%" alt="Image"></a>
				</div>
				<div class="col-md-4">
					<a href="dados_prato.html"><img src="http://coopsp.vteximg.com.br/arquivos/ids/157238-804-804/7894900011593_Refrigerante-Coca-Cola---25L.jpg?v=636136227943470000" class="img-responsive" style="width:70%" alt="Image"></a><br>
				</div>



				<div class="col-md-4">
					<a href="dados_prato.html"><img src="http://www.saobraz.com.br/static/img/produtos/cafe/cafe_extra_forte250g.png" class="img-responsive" style="width:50%" alt="Image"></a>
				</div>
				<div class="col-md-4">
					<a href="dados_prato.html"><img src="https://www.deliveryextra.com.br/img/uploads/1/757/539757.jpg?type=product" class="img-responsive" style="width:70%" alt="Image"></a><br>
				</div>

  			</div>




		<footer class="container text-center">
  			<p>Copyright © 2018 | Alunos de INFO3</p>
		</footer>

	</div>
</body>
</html>