@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col">
			<div class="card">
				<div class="card-header">
					Editar Ponto de Interesse
				</div>
				<div class="card-body">
					{!! Form::model($poi, ['route' => ['pois.update', $poi->id], 'method' => 'PUT']) !!}
						@include('admin.pois.partials.form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
