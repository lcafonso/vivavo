@extends('layouts.app')

@section('content')
<!--Main layout-->
<main class="mt-5 pt-5">
	<div class="container">
		<!--Section: Jumbotron-->
        <section class="card wow fadeIn" style="background-image: url(http://www.ipb.pt/~vivavo/public/uploads/background3.jpg);">

            <!-- Content -->
            <div class="card-body text-white text-center py-5 px-5 my-5">

                <h1 class="mb-4">
                    <strong>Viv@vó</strong>
                </h1>
                <p>
                    <strong>Viver na casa da Avó</strong>
                </p>
                <p class="mb-4">
                    <strong>O principal foco deste projecto é combater a disertificação e isolamento das comunidades rurais oferecendo experiencias autenticas transmitidas ao longo de gerações.</strong>
                </p>
                
            </div>
            <!-- Content -->
        </section>
        <!--Section: Jumbotron-->

        <hr class="my-5">

		<!--Section: Magazine v.1-->
        <section class="wow fadeIn">
			<!--Section heading-->
	        <h2 class="h1 text-center my-5 font-weight-bold">Notícias sobre o projecto</h2>
	       
			<!--constrir codigo apartir daqui -->
				
			

            <!--Grid row-->
            <div class="row text-left">

                <!--Grid column-->
                <div class="col-lg-6 col-md-12">
					 
					<!--Image-->
                    <div class="view overlay rounded z-depth-1-half mb-3">
                    	@if($posts[0]->file)
                        <img src="{{ $posts[0]->file }}" class="img-fluid" alt="Sample post image">
                        @else
                        <img src="http://www.ipb.pt/~vivavo/public/uploads/no_image_available.png" class="img-fluid" alt="no image available in post">
                        @endif
                        <a href="{{ route('post', $posts[0]->slug) }}">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--Excerpt-->
                    <div class="news-data">
                        <a href="{{ route('post', $posts[0]->slug) }}" class="light-blue-text">
                            <h6>
                                <i class="fa fa-plane"></i>
                                <strong> {{ $posts[0]->category->name }} </strong>
                            </h6>
                        </a>
                        <p>
                            <strong>
                                <i class="fa fa-clock-o"></i>{{ $posts[0]->created_at }}</strong>
                        </p>
                    </div>
                    <h3>
                        <a>
                            <strong>{{ $posts[0]->name }}</strong>
                        </a>
                    </h3>
					<p>
						{{ $posts[0]->excerpt }}
					</p>
         					
		            <!--/Featured news-->
		            <hr> 

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-6 col-md-12">
             		
					@foreach($posts as $post)
                    <!--Small news-->
                    <div class="row">
                        <div class="col-md-3">

                            <!--Image-->
                            <div class="view overlay rounded z-depth-1">
                            	@if($post->file)
                                <img src="{{ $post->file }}" class="img-fluid" alt="Minor sample post image">
                                @else
		                        <img src="http://www.ipb.pt/~vivavo/public/uploads/no_image_available.png" class="img-fluid" alt="no image available in post">
		                        @endif
                                <a href="{{ route('post', $post->slug) }}">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                        </div>

                        <!--Excerpt-->
                        <div class="col-md-9">
                            <p class="dark-grey-text">
                                <strong>{{ $posts[0]->created_at }}</strong>
                            </p>
                            <a href="{{ route('post', $post->slug) }}"><strong>{{ $post->name }}</strong> {{ $post->excerpt }}
                                <i class="fa fa-angle-right float-right"></i>
                            </a>
                        </div>

                    </div>
                    <!--/Small news-->
	
    		        <hr>
					@endforeach	

                </div>
                <!--Grid column-->
				{{ $posts->render() }}
            </div>
            <!--Grid row-->

		</section>
        <!--/Section: Magazine v.1-->
    </div>
</main>
<!--Main layout-->

@endsection

@section('scripts')

@endsection