
@extends('layout.base')

@section('conteudo')
<h1>Departamentos</h1>


<p><a href="/departamento_cadastrar">Cadastrar Novo Departamento</a></p>

@foreach($departamentos as $d)
<p>Nome: {{$d->nome}} | <a href="/departamento_editar/{{$d->id}}">EDITAR</a> | <a href="/departamento_remover/{{$d->id}}">REMOVER</a></p>

@endforeach

@endsection