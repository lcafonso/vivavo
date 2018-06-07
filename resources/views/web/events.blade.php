@extends('layouts.app')

@section('content')
<div class="container">
	<div class="col">

		<h1>Lista de Eventos</h1>
		@foreach ($events as $event) 

		<div class="card">
			<div class="card-header">
				<h3>{{ $event->name }}</h3>
				<p class="card-text">Local: <b>{{ $event->local }}</b> </p>
				<p class="card-text">Data/Hora: <b>{{ $event->data_time }}</b> </p>
				<p class="card-text">Responsavel: <b>{{ $event->grandma->name }}</b> </p>
			</div>
			<div class="card-body">
				@if($event->file)
				<img src="{{ $event->file }}" class="card-img-top" alt="">
				@endif
				<p class="card-text">{{ $event->excerpt }}</p>
				<a href="{{ route('event', $event->slug) }}" class="float-right">Ler mais</a>	
			</div>
		</div>	
		@endforeach 
		{{ $events->render() }} 
	</div>
</div>
@endsection

