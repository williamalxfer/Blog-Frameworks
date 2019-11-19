@extends('admin/base')

@section('title', 'Criar novo VIDEO')

@section('content')

	<h1>Novo Post</h1>

	<form method="POST" action="{{url('admin/videos/'.$video->id)}}">
	
	{!! csrf_field()!!}

		<input type="hidden" name="_method" value="PUT">

		<label>Título</label>
		<input type="text" value="{{$video->titulo}}" name="titulo">

		<label>Link</label>
		<input type="text" value="{{$video->link}}" name="link">

		<label>Descrição</label>
		<textarea name="descricao">{{$video->descricao}}</textarea>

		<input type="submit" value="Cadastrar">
	</form>

@endsection