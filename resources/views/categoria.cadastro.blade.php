@extends('layout.base')

@section('conteudo')
<h1>Cadastro de Categoria</h1>

<form action="/categoria_salvar" method="post">
	@csrf
	<p>Nome: <input type="text" name="nome"/></p>
	<input type="submit" value="Enviar" />
</form>

@endsection