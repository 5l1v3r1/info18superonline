<!DOCTYPE html>
<html>
<head>
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


<!--
		<div class="jumbotron">
  			<div class="container text-center">
    			<h1>My Portfolio</h1>      
    			<p>Some text that represents "Me"...</p>
  			</div>
		</div>
-->

		
		<div id="carousel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carousel" data-slide-to="0" class="active"></li>
				<li data-target="#carousel" data-slide-to="1"></li>
				<li data-target="#carousel" data-slide-to="2"></li>
			</ol>	

			<div class="carousel-inner" role="listbox">
				
				<div class="item active">
					<div class="text-center">
						<img src="images/compras-supermercado-banner_1.jpg" alt="...">
					</div>
				</div>
                <div class="item act">
					<div class="text-center">
						<img src="images/cropped-compras-supermercado-banner (2).jpg" alt="...">
					</div>
				</div>
				

				<div class="item">
					<div class="text-center">
						<img src="images/header-ofertas.png" alt="...">
					</div>
				</div>

			</div>

			<a href="#carousel" class="left carousel-control" data-slide="prev">
				<i class="glyphicon glyphicon-chevron-left"></i>
			</a>
			<a href="#carousel" class="right carousel-control" data-slide="next">
				<i class="glyphicon glyphicon-chevron-right"></i>
			</a>

		</div>


		<div class="navbar navbar-default">

			<nav class="navbar navbar-inverse">
  				<div class="container-fluid">
	    			<div class="navbar-header">
	      				<a class="navbar-brand" href="#">Super.Online</a>
	    			</div>
	    			<ul class="nav navbar-nav">
	      				<li> <a href="/ "> Home</a><li>
							<li><a href="/buscar">Buscar</a></li>
	      				<li><a href="/contato">Atendimento</a></li>
	      				<li><a href="/usuario">Usuário</a></li>
	    			</ul>
	    			<ul class="nav navbar-nav navbar-right">
					
	      				

	      				@guest
	      				
	      				<li><a href="/cadastro"><span class="glyphicon glyphicon-user"></span> Cadastro</a><li>
	      				<li><a href="/autenticacao"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>

	      				@endguest

	      				@auth
	      				<li><a href="/desconectar"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
	      				@endauth



						<li><a href="/carrinho"><span class="glyphicon glyphicon-log-in"></span>Compra</a></li>
	    			</ul>
  				</div>
			</nav>




		
@yield('conteudo')
		

			


	</div>

	
</div>


	<footer class="container text-center">
  			<p>Copyright © 2018 | Alunos de INFO4</p>

	</footer>
</body>

</html>