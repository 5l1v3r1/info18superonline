@extends('layout.base')

@section('conteudo')
<h1>Cadastro de Departamentos</h1>

<form action="/departamento_salvar" method="post">
	@csrf
	<p>Nome: <input type="text" name="nome"/></p>
	<input type="submit" value="Enviar" />
</form>

@endsection