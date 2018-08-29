@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col">
			<div class="card">
				<div class="card-header">
					Editar Localidade
				</div>
				<div class="card-body">
					{!! Form::model($local, ['route' => ['locals.update', $local->id], 'method' => 'PUT']) !!}
						@include('admin.locals.partials.form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
