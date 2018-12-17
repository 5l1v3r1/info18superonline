@extends('layout.base')

@section('conteudo')


@if(empty($produto))
<h1>Cadastro de Produtos</h1>
<form action="/produto_salvar" method="post">
@else
<h1>Atualização de Produtos</h1>
<form action="/produto_atualizar/{{$produto->id}}" method="post">
@endif

@csrf

@if(empty($produto))
	<p>Nome: <input type="text" name="nome"/></p>
	<p>Preço: <input type="text" name="preco"/></p>

	@foreach($categoria as $c)
	<p>Categoria: <input type="radio" name="categoria" value="{{$c->id}}">{{$c->nome}}</p>
	@endforeach

	<input type="submit" value="Enviar" />
@else
	<p>Nome: <input type="text" name="nome" value="{{$produto->nome}}"/></p>
	<p>Preço: <input type="text" name="preco" value="{{$produto->preco}}"/></p>

	@foreach($categoria as $c)
	<p>Categoria: <input type="radio" name="categoria" value="{{$c->id}}" 
		@if($c->id == $produto->categoria_id)
			checked
		@endif

		>{{$c->nome}}</p>
	@endforeach


	<input type="submit" value="Atualizar" />
@endif


</form>

@endsection