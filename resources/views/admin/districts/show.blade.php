@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col">
			<div class="card">
				<div class="card-header">
					Ver Distrito
				</div>
				<div class="card-body">
					<p><strong>Nome</strong> {{ $district->name }} </p>
					<p><strong>URL Amigavel</strong> {{ $district->slug }} </p>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
