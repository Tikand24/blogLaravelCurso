@extends('admin.template.main')
@section('title','Listado de usuarios')
@section('content')

<div class="container">
	<a href="{{ route('users.create') }}" class="btn btn-success">Crear usuario</a>
	<table class="table table-striped">
		<thead>
			<th>Id</th>
			<th>Nombre</th>
			<th>Email</th>
			<th>Tipo</th>
			<th>Usuario</th>
		</thead>
		<tbody>
			@foreach($users as $user)
			<tr>
				<td>{{ $user->id }}</td>
				<td>{{ $user->name }}</td>
				<td>{{ $user->email }}</td>
				<td>
				@if($user->type=='admin')
				<span class="label label-danger">Administrador</span>
				@endif
				@if($user->type=='member')
				<span class="label label-primary">Miembro</span>
				@endif
				</td>
				<td>
				<a href="{{ route('users.edit',$user->id) }}" class="btn btn-primary">
				<span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
				</a>
				<a href="{{ route('admin.users.destroy',$user->id) }}" class="btn btn-danger">
				<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
				</a>
				</td>

			</tr>
			@endforeach
		</tbody>
	</table>
	{!! $users->render() !!}
</div>
@endsection