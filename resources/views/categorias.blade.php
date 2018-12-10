
@extends('layout.base')

@section('conteudo')
<h1>Departamentos</h1>


<p><a href="/categoria_cadastrar">Cadastrar Novo Categorias</a></p>

@foreach($categorias as $c)
<p>Nome: {{$c->nome}}</p>

@endforeach

@endsection