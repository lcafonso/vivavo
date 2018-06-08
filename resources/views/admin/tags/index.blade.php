@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col">
			<div class="card">
				<div class="card-header">
					Lista de Etiquetas
					<a href="{{ route('tags.create') }}" class="btn btn-sm btn-primary float-right">
						Criar
					</a>
				</div>
				<div class="card-body">
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th width="10px">ID</th>
								<th>Nome</th>
								<th colspan="3">&nbsp;</th>	
							</tr>
						</thead>
						<tbody>
							@foreach($tags as $tag)
							<tr>
								<td>{{ $tag->id }}</td>
								<td>{{ $tag->name }}</td>
								<td width="10px">
									<a href="{{ route('tags.show', $tag->id) }}" class="btn btn-sm btn-secondary">
										ver
									</a>
								</td>
								<td width="10px">
									<a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-sm btn-secondary">
										editar
									</a>
								</td>
								<td width="10px">
									{!! Form::open(['route' => ['tags.destroy', $tag->id], 'method' => 'DELETE']) !!}
										<button class="btn btn-sm btn-danger">
											apagar
										</button>
									{!! Form::close() !!}
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					{{ $tags->render() }}
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
