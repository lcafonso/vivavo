@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col">
			<div class="card">
				<div class="card-header">
					Lista de Distritos
					<a href="{{ route('districts.create') }}" class="btn btn-sm btn-primary float-right">
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
							@foreach($districts as $district)
							<tr>
								<td>{{ $district->id }}</td>
								<td>{{ $district->name }}</td>
								<td width="10px">
									<a href="{{ route('districts.show', $district->id) }}" class="btn btn-sm btn-secondary">
										ver
									</a>
								</td>
								<td width="10px">
									<a href="{{ route('districts.edit', $district->id) }}" class="btn btn-sm btn-secondary">
										editar
									</a>
								</td>
								<td width="10px">
									{!! Form::open(['route' => ['districts.destroy', $district->id], 'method' => 'DELETE']) !!}
										<button class="btn btn-sm btn-danger">
											apagar
										</button>
									{!! Form::close() !!}
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					{{ $districts->render() }}
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
