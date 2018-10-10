@extends('layouts.app')

@section('customStyle')

<style type="text/css">
</style>

@endsection


@section('content')

<div class="container">
@foreach ($events as $k => $event)
      <div class="card bg-dark text-white">
        @if($event->file1)
         <img src="{{ $event->file1 }}" class="card-img" alt="">
        @else
         <img src="img/no_image_available.png"  class="card-img" alt="no image available in post">
        @endif
        <div class="card-img-overlay">
           <h5 class="card-title">{{ $event->name }}</h5>
           <p class="card-text">
             <span class="text-muted">
               <p>Local:<strong>{{ $event->local }}</strong> com a Avó <strong>{{ $event->grandma->name }}</strong></p>
               <p>Data/Hora:<strong>{{ $event->data_time }}</strong></p>
             </span>
           </p>
           <p class="card-text">{{ $event->excerpt }} </p>
         </div>
      </div>

@endforeach
{{ $events->render() }}

@endsection


@section('javascript')

@endsection
