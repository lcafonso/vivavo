@extends('layouts.app')

@section('content')
<!--Main layout-->
<main class="mt-5 pt-5">
    <div class="container">
    	<!--Section: Post-->
        <section class="mt-4">

			
 			<!--Featured Image-->
			<div class="card mb-4 wow fadeIn">
				@if($post->file)
			    <img src="{{ $post->file }}" class="img-fluid" alt="">
				@else
				<img src="http://www.ipb.pt/~vivavo/public/uploads/no_image_available.png" class="img-fluid" alt="no image available in post">
				@endif
			</div>
			<!--/.Featured Image--> 

			<!--Card-->
			<div class="card mb-4 wow fadeIn">
				<!--Card header-->
				<div class="card-header text-center">
					<p class="h5 my-4">{{ $post->name }}</p>
					<p class="card-text">{{ $post->excerpt }}</p>
					<hr>
					<p>Categoria:
					<a href="{{ route('category', $post->category->slug) }}"> {{ $post->category->name }} </a></p>
				</div>
				<!--Card content-->
				<div class="card-body text-center">

					{!! $post->body !!}
					<hr>

					@foreach($post->tags as $tag)
					<a href="{{ route('tag', $tag->slug) }}">
						{{ $tag->name }}
					</a>
					@endforeach


				</div>
			</div>
			<!--/.Card-->
 
        </section>
        <!--Section: Post-->
	</div>
</main>
<!--Main layout-->
@endsection

@section('scripts')

@endsection