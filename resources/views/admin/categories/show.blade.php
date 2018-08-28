@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col">
			<div class="card">
				<div class="card-header">
					Ver Categoria
				</div>
				<div class="card-body">
					<p><strong>Nome</strong> {{ $category->name }} </p>
					<p><strong>URL Amigavel</strong> {{ $category->slug }} </p>
					<p><strong>Conteudo</strong> {{ $category->body }} </p>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
