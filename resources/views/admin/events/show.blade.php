@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col">
			<div class="card">
				<div class="card-header">
					Ver Evento
				</div>
				<div class="card-body">
					<p><strong>Nome</strong> {{ $event->name }} </p>
					<p><strong>URL Amigavel</strong> {{ $event->slug }} </p>
					<p><strong>Conteudo</strong> {{ $event->body }} </p>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
