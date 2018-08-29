@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col">
			<div class="card">
				<div class="card-header">
					Ver Ponto de Interesse
				</div>
				<div class="card-body">
					<p><strong>Nome</strong> {{ $poi->name }} </p>
					<p><strong>URL Amigavel</strong> {{ $poi->slug }} </p>
					<p><strong>Resumo</strong> {{ $poi->excerpt }} </p>
					<p><strong>Latitude</strong> {{ $poi->latitude }} </p>
					<p><strong>Longitude</strong> {{ $poi->longitude }} </p>
					<p><strong>URL icon</strong> {{ $poi->icon }} </p>
					<p><strong>URL image</strong> {{ $poi->image }} </p>
					<p><strong>Descrição</strong> {{ $poi->body }} </p>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
