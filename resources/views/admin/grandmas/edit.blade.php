@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col">
			<div class="card">
				<div class="card-header">
					Editar Dados
				</div>
				<div class="card-body">
					{!! Form::model($grandma, ['route' => ['grandmas.update', $grandma->id], 'method' => 'PUT']) !!}
						@include('admin.grandmas.partials.form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
