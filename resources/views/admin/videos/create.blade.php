@extends('admin/base')

@section('title', 'Criar novo POSTS')

@section('content')

    <h1>Novo Post</h1>

    <form method="POST" action="{{url('admin/videos')}}">
    
    {!! csrf_field()!!}
        <label>Título</label>
        <input type="text" name="titulo">

        <label>Link</label>
        <input type="text" name="link">

        <label>Descrição</label>
        <textarea name="descricao"></textarea>

        <input type="submit" value="Cadastrar">
    </form>

@endsection
