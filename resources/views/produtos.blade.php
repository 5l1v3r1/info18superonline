
@extends('layout.base')

@section('conteudo')
<h1>Produtos</h1>


<p><a href="/produto_cadastrar">Cadastrar Novo Produto</a></p>

@foreach($produtos as $p)
<p>Nome: {{$p->nome}} | <a href="/produto_editar/{{$p->id}}">EDITAR</a> | <a href="/produto_remover/{{$p->id}}">REMOVER</a></p>

@endforeach

@endsection