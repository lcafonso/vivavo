@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col">
			<div class="card">
				<div class="card-header">
					Ver Artigo
				</div>
				<div class="card-body">
					<p><strong>Nome</strong> {{ $post->name }} </p>
					<p><strong>URL Amigavel</strong> {{ $post->slug }} </p>
					<p><strong>Conteudo</strong> {{ $post->body }} </p>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
