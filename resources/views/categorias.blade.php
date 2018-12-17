
@extends('layout.base')

@section('conteudo')
<h1>Categorias</h1>


<p><a href="/categoria_cadastrar">Cadastrar Nova Categoria</a></p>

@foreach($categorias as $c)
<p>Nome: {{$c->nome}} | <a href="/categoria_editar/{{$c->id}}">EDITAR</a> | <a href="/categoria_remover/{{$c->id}}">REMOVER</a></p>

@endforeach

@endsection