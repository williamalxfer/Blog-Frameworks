@extends('admin/base')

@section('title', 'Pag Videos')

@section('content')

	<h1>Lista de videos</h1>
	<a href="{{url('admin/videos/create')}}" class="btn btn-primary">Novo Video</a>
	<table class="table">
		<thead>
			<th>#</th>
			<th>Título</th>
			<th>Link</th>
			<th>Criado em</th>
			<th>Ações</th>
		</thead>
		<tbody>
			@foreach($videos as $video)
			<tr>
				<td>{{$video->id}}</td>
				<td>{{$video->titulo}}</td>
				<td>{{$video->link}}</td>
				<td>{{$video->created_at->format('d/m/Y H:i')}}</td>
				<td>
					<a href="{{url('admin/videos/'.$video->id.'/edit')}}">Editar</a>
					<form method="post" action="{{url('admin/videos/'.$video->id)}}">
						{{ csrf_field() }}
						<input type="hidden" name="_method" value="DELETE">
						<button type="submit">Excluir</button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
@endsection