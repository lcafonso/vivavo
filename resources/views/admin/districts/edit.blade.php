@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col">
			<div class="card">
				<div class="card-header">
					Editar Distrito
				</div>
				<div class="card-body">
					{!! Form::model($district, ['route' => ['districts.update', $district->id], 'method' => 'PUT']) !!}
						@include('admin.districts.partials.form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
