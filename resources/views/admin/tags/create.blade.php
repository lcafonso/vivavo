@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col">
			<div class="card">
				<div class="card-header">
					Criar Etiqueta
				</div>
				<div class="card-body">
					{!! Form::open(['route' => 'tags.store']) !!}
						@include('admin.tags.partials.form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
