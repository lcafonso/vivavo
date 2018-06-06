@extends('layouts.app')

@section('content')
<div class="container">
	<div class="col">
		<h1>Lista de noticias</h1>
		@foreach ($posts as $post) 
		<div class="card">
			<div class="card-header">
				{{ $post->name }}
			</div>
			<div class="card-body">
				@if($post->file)
				<img src="{{ $post->file }}" class="card-img-top" alt="">
				@endif
				<p class="card-text">{{ $post->excerpt }}</p>
				<a href="#" class="float-right">Ler mais</a>	
			</div>
		</div>	
		@endforeach 
		{{ $posts->render() }} 
	</div>
</div>
@endsection