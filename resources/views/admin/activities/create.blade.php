@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col">
			<div class="card">
				<div class="card-header">
					Criar Actividade
				</div>
				<div class="card-body">
					{!! Form::open(['route' => 'activities.store']) !!}
						@include('admin.activities.partials.form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
