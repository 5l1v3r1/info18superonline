@extends('layout.base')

@section('conteudo')
<h1>Perfil do Usuário</h1>
<h3>Olá {{Auth::user()->name}}</h3>



<p>Minhas Compras</p>

@if(Auth::user()->departamento->id != 1)
<p><a href="/departamentos">Departamentos</a></p>
<p>Categorias</p>
@endif


@endsection
