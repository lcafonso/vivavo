@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col">
			<div class="card">
				<div class="card-header">
					Criar Evento
				</div>
				<div class="card-body">
					{!! Form::open(['route' => 'event.store']) !!}
						@include('admin.events.partials.form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
