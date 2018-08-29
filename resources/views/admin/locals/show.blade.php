@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col">
			<div class="card">
				<div class="card-header">
					Ver Localidade
				</div>
				<div class="card-body">
					<p><strong>Nome</strong> {{ $local->name }} </p>
					<p><strong>URL Amigavel</strong> {{ $local->slug }} </p>
					<p><strong>Descriçao</strong> {{ $local->body }} </p>

				</div>
			</div>
		</div>
	</div>
</div>

@endsection
