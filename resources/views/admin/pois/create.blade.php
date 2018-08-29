@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col">
			<div class="card">
				<div class="card-header">
					Criar Ponto de Interesse
				</div>
				<div class="card-body">
					{!! Form::open(['route' => 'pois.store']) !!}
						@include('admin.pois.partials.form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
