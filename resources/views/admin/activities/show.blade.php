@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col">
			<div class="card">
				<div class="card-header">
					Ver Actividade
				</div>
				<div class="card-body">
					<p><strong>Nome</strong> {{ $activit->name }} </p>
					<p><strong>URL Amigavel</strong> {{ $activit->slug }} </p>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
