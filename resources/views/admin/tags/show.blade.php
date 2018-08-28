@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col">
			<div class="card">
				<div class="card-header">
					Ver Etiqueta
				</div>
				<div class="card-body">
					<p><strong>Nome</strong> {{ $tag->name }} </p>
					<p><strong>URL Amigavel</strong> {{ $tag->slug }} </p>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
