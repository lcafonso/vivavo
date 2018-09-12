<table class="table table-striped table-hover">
	<thead>
		<tr>
			<th width="10px">ID</th>
			<th>Nome</th>
			<th colspan="3">&nbsp;</th>
		</tr>
	</thead>
	<tbody>
		@foreach($activits as $activit)
		<tr>
			<td>{{ $activit->id }}</td>
			<td>{{ $activit->name }}</td>
			<td width="10px">
				<a href="{{ route('activities.show', $activit->id) }}" class="btn btn-sm btn-secondary">
					ver
				</a>
			</td>
			<td width="10px">
				<a href="{{ route('activities.edit', $activit->id) }}" class="btn btn-sm btn-secondary">
					editar
				</a>
			</td>
			<td width="10px">
				{!! Form::open(['route' => ['activities.destroy', $activit->id], 'method' => 'DELETE']) !!}
					<button class="btn btn-sm btn-danger">
						apagar
					</button>
				{!! Form::close() !!}
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
