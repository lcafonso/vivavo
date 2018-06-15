@extends('layouts.app')

@section('content')
 <!--Main layout-->
<main class="mt-5 pt-5">
    <div class="container">

		<!--Section: Cards-->
	    <section class="pt-4">

			<!-- Heading & Description -->
            <div class="wow fadeIn">
                <!--Section heading-->
                <h2 class="h1 text-center mb-5">Escolha uma de nossas experiencias</h2>
                <!--Section description-->
                <p class="text-center">O projecto Viv@vó oferece as mais autenticas experiencias no conceito do turismo rural. </p>
                <p class="text-center mb-5 pb-5">Venha ver
                    <strong>O interior de Portugal</strong> com o entusiasmo de novas descobertas, saborendo uma refeição tipica ou ouvindo as historias de nossa terra.</p>
            </div>
            <!-- Heading & Description -->
			
			@foreach ($events as $event)
            <!--Grid row-->
            <div class="row mt-3 wow fadeIn">
            	<!--Grid column-->
                <div class="col-lg-5 col-xl-4 mb-4">
                    <!--Featured image-->
                    <div class="view overlay rounded z-depth-1">
                    	@if($event->file)
                        <img src="{{ $event->file }}" class="img-fluid" alt="">
                        @else
                        <img src="http://www.ipb.pt/~vivavo/public/uploads/no_image_available.png" class="img-fluid" alt="no image available in post">
                        @endif
                        <a href="{{ route('event', $event->slug) }}">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                </div>
                <!--Grid column-->

				<!--Grid column-->
                <div class="col-lg-7 col-xl-7 ml-xl-4 mb-4">
                    <h3 class="mb-3 font-weight-bold dark-grey-text">
                        <strong>{{ $event->name }}</strong>
                    </h3>
                    <p>Local:<strong>{{ $event->local }}</strong> com a Avó <strong>{{ $event->grandma->name }}</strong></p>
                    <p>Data/Hora:<strong>{{ $event->data_time }}</strong></p>
                    <p class="grey-text">{{ $event->excerpt }}</p>
                    <a href="{{ route('event', $event->slug) }}" class="btn btn-primary btn-md">Saber mais
                        <i class="fa fa-play ml-2"></i>
                    </a>
                </div>
                <!--Grid column-->
				 			

			</div>
            <!--Grid row-->

            <hr class="mb-5"> 
			@endforeach 
			{{ $events->render() }}


		</section>
        <!--Section: Cards-->
	</div>
</main>
<!--Main layout-->
@endsection

