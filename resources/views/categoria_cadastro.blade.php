@extends('layout.base')

@section('conteudo')


@if(empty($categoria))
<h1>Cadastro de Categorias</h1>
<form action="/categoria_salvar" method="post">
@else
<h1>Atualização de Categorias</h1>
<form action="/categoria_atualizar/{{$categoria->id}}" method="post">
@endif

@csrf

@if(empty($categoria))
	<p>Nome: <input type="text" name="nome"/></p>
	<input type="submit" value="Enviar" />
@else
	<p>Nome: <input type="text" name="nome" value="{{$categoria->nome}}"/></p>
	<input type="submit" value="Atualizar" />
@endif


</form>

@endsection