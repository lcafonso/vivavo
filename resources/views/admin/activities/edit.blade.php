@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col">
			<div class="card">
				<div class="card-header">
					Editar Actividade
				</div>
				<div class="card-body">
					{!! Form::model($activit, ['route' => ['activities.update', $activit->id], 'method' => 'PUT']) !!}
						@include('admin.activities.partials.form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
