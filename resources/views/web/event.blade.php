@extends('layouts.app')

@section('content')
<div class="container">
	<div class="col">
		<h1>{{ $event->name }}</h1>
		<div class="card">
			<div class="card-header">
				<p class="card-text">Local: <b>{{ $event->local }}</b> </p>
				<p class="card-text">Data/Hora: <b>{{ $event->data_time }}</b> </p>
				<p class="card-text">Responsável: <b>{{ $event->grandma->name }}</b> </p>
			</div>
			<div class="card-body">
				@if($event->file)
				<img src="{{ $event->file }}" class="card-img-top" alt="">
				@endif
				<hr>
				<p class="card-text ">Mínimo e Máximos Convidados: <b>{{ $event->min_guests }} - {{ $event->max_guests }}</b> </p>
				<p class="card-text ">Valor : <b>{{ $event->amount }}</b> </p>
				<hr>
				<p class="card-text">{{ $event->excerpt }}</p>
				<hr>
				{!! $event->body !!}
				<hr>
				Atividades:
				@foreach($event->activits as $activit)
					<?php 
					$temp = \DB::table('activit_event')->where('id', $activit->id)->first();
					?>
 					<p class="card-text"><b>{{ date_format(date_create($temp->scheduled), 'H:i') }}</b> - {{ $activit->name }}</p>
				   	<hr>
				@endforeach
				<a href="{{ route('events') }}" class="float-left">Voltar a lista</a>
				<a href="{{ route('booking', $event->slug) }}" class="float-right">Participar no evento</a>
			</div>
		</div>	
	</div>
</div>
@endsection