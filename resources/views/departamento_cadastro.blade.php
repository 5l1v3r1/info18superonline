@extends('layout.base')

@section('conteudo')


@if(empty($departamento))
<h1>Cadastro de Departamentos</h1>
<form action="/departamento_salvar" method="post">
@else
<h1>Atualização de Departamentos</h1>
<form action="/departamento_atualizar/{{$departamento->id}}" method="post">
@endif

@csrf

@if(empty($departamento))
	<p>Nome: <input type="text" name="nome"/></p>
	<input type="submit" value="Enviar" />
@else
	<p>Nome: <input type="text" name="nome" value="{{$departamento->nome}}"/></p>
	<input type="submit" value="Atualizar" />
@endif


</form>

@endsection