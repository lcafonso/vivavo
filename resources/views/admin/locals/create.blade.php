@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col">
			<div class="card">
				<div class="card-header">
					Criar Localidade
				</div>
				<div class="card-body">
					{!! Form::open(['route' => 'locals.store']) !!}
						@include('admin.locals.partials.form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
