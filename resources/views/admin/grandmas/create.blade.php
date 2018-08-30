@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col">
			<div class="card">
				<div class="card-header">
					Criar Avó
				</div>
				<div class="card-body">
					{!! Form::open(['route' => 'grandmas.store']) !!}
						@include('admin.grandmas.partials.form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
