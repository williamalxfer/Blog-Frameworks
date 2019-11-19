@extends('admin/base')

@section('title', 'Criar novo POSTS')

@section('content')

	<h1>Novo Post</h1>

	<form method="POST" action="{{url('admin/posts/'.$post->id)}}">
	
	{!! csrf_field()!!}

		<input type="hidden" name="_method" value="PUT">

		<label>Título</label>
		<input type="text" value="{{$post->titulo}}" name="titulo">

		<label>Descrição</label>
		<textarea name="descricao">{{$post->descricao}}</textarea>

		<input type="submit" value="Cadastrar">
	</form>

@endsection