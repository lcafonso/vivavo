@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col">
			<div class="card">
				<div class="card-header">
					Ver Avós
				</div>
				<div class="card-body">
					<p><strong>Nome</strong> {{ $grandma->name }} </p>
					<p><strong>URL Amigavel</strong> {{ $grandma->slug }} </p>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
