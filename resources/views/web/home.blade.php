@extends('layouts.master')


@section('customStyle')

	<style type="text/css">


	.bk-container {
	background-color : #f0f0f0;
	padding : 0;
	}
	.carousel-item img {
	height : 20rem;
	width : auto;
	}
	.parent {
	color : #0074d9;
	background : white;
	position : relative;
	}
	.space {
	height : auto;
	width : auto;
	padding : 3px 3px;
	}
	.containbox {
	display : table;
	width : auto;
	height : 300px;
	padding : 0;
	overflow : hidden;
	}
	.leftbox, .rightbox {
	width : 40%;
	display : table-cell;
	vertical-align : middle;
	text-align : center;
	overflow : hidden;
	}
	.rightbox {
	width : 60%;
	}
	.leftboxb, .rightboxb {
	width : 70%;
	display : table-cell;
	vertical-align : middle;
	text-align : center;
	overflow : hidden;
	}
	.rightboxb {
	width : 30%;
	}
	.fill {
	position : relative;
	justify-content : center;
	align-items : center;
	overflow : hidden;
	}
	.fill img {
	position : absolute;
	margin : auto;
	min-height : 50%;
	min-width : 50%;
	max-height : 180%;
	object-fit : contain;
	left : -100%;
	right : -100%;
	top : -100%;
	bottom : -100%;
	}
	.borderbox {
	box-sizing : border-box;
	}
	.browser_width > * {
	position : absolute;
	left : 0;
	right : 0;
	}
	.clearfix:after {
	content : "\0050";
	visibility : hidden;
	display : block;
	height : 0;
	clear : both;
	}
	.colelem {
	display : inline;
	float : left;
	clear : both;
	}
	.grpelem, .accordion_wrapper {
	display : inline;
	float : left;
	}
	.fluid_height_spacer {
	width : 0.01px;
	}
	.position_content, .excludeFromNormalFlow {
	float : left;
	}
	.page {
	min-height : 215px;
	background-image : none;
	border-width : 0;
	border-color : #000000;
	background-color : transparent;
	padding-top : 50px;
	padding-bottom : 530px;
	width : 100%;
	max-width : 1400px;
	margin-left : auto;
	margin-right : auto;
	}
	.u94 {
	min-height : 439px;
	box-shadow : 2px 5px 8px rgba(0, 0, 0, 0.15);
	border-width : 0;
	background-color : #F0F0F0;
	padding-bottom : 12px;
	}
	.u94_align_to_page {
	margin-left : auto;
	margin-right : auto;
	position : relative;
	max-width : 1400px;
	}
	#u95 {
	height : 420px;
	box-shadow : 0 10px 10px rgba(0, 0, 0, 0.3);
	opacity : 1;
	position : relative;
	margin-right : -10000px;
	margin-top : -38px;
	width : 49.65%;
	left : 1.5%;
	background : center center no-repeat #F0F0F0;
	background-size : cover;
	}
	.pu96-4 {
	padding-bottom : 0;
	margin-right : -10000px;
	margin-top : 51px;
	width : 41.36%;
	margin-left : 57.22%;
	}
	.u99 {
	height : 4px;
	background-color : #3A4953;
	margin-top : 123px;
	position : relative;
	width : 64.77%;
	margin-left : 35.24%;
	}
	#pu102 {
	width : 27.47%;
	margin-left : 72.54%;
	}
	.view {
	height : auto;
	border-width : 0;
	border-color : transparent;
	opacity : 1;
	max-width : 100000px;
	max-width : 100000px;
	overflow : hidden;
	position : relative;
	text-align : center;
	box-shadow : 1px 1px 2px #a6a6a6;
	cursor : default;
	}
	.view .mask, .view .content {
	width : 100%;
	height : 100%;
	position : absolute;
	overflow : hidden;
	top : 0;
	left : 0;
	}
	.view img {
	display : block;
	position : relative;
	}
	.view h2 {
	text-transform : uppercase;
	color : #fff;
	text-align : center;
	position : relative;
	font-size : 17px;
	padding : 10px;
	background : rgba(0, 0, 0, 0.8);
	margin : 20px 0 0 0;
	}
	.view p {
	font-family : Georgia, serif;
	font-style : italic;
	font-size : 12px;
	position : relative;
	color : #fff;
	padding : 10px 20px 20px;
	text-align : center;
	}
	.view a.info {
	display : inline-block;
	text-decoration : none;
	padding : 7px 14px;
	background : #000;
	color : #fff;
	text-transform : uppercase;
	box-shadow : 0 0 1px #000;
	}
	.view a.info:hover {
	box-shadow : 0 0 5px #000;
	}
	.view-first img {
	transition : all 0.2s linear;
	}
	.view-first .mask {
	opacity : 0;
	background-color : rgba(219, 127, 8, 0.7);
	transition : all 0.4s ease-in-out;
	}
	.view-first h2 {
	transform : translateY(-100px);
	opacity : 0;
	transition : all 0.2s ease-in-out;
	}
	.view-first p {
	transform : translateY(100px);
	opacity : 0;
	transition : all 0.2s linear;
	}
	.view-first a.info {
	opacity : 0;
	transition : all 0.2s ease-in-out;
	}
	.view-first:hover img {
	transform : scale(1.1);
	}
	.view-first:hover .mask {
	opacity : 1;
	}
	.view-first:hover h2, .view-first:hover p, .view-first:hover a.info {
	opacity : 1;
	transform : translateY(0);
	}
	.view-first:hover p {
	transition-delay : 0.1s;
	}
	.view-first:hover a.info {
	transition-delay : 0.2s;
	}
	.youtube {
	opacity : 1;
	position : relative;
	margin-right : -10000px;
	width : 33.34%;
	background-size : cover;
	}
	.facebook {
	opacity : 1;
	position : relative;
	margin-right : -10000px;
	width : 33.34%;
	left : 33.34%;
	background-size : cover;
	}
	.instagram {
	opacity : 1;
	position : relative;
	margin-right : -10000px;
	width : 33.34%;
	left : 66.67%;
	background-size : cover;
	}
	.hoverbtn {


	}
	.hoverbtn img {
	opacity : 1;
	transition : 0.3s ease-in-out;
	}
	.hoverbtn img:hover {
	opacity : 0.5;
	}



	</style>

@endsection



@section('content')

<!-- Sessao Avos  -->

<div class="row bk-container" >
	<div class="container bk-container" >
	  <div class="row">
	    <div class="col-sm">


			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			  </ol>
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img class="d-block" src="{{ url('img/IMG_8039.jpg')}}" alt="First slide">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block" src="{{ url('img/img_8625.jpg')}}" alt="Second slide">
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>

	    </div>
	    <div class="col-sm" style="text-align: center;">
	    	<img class="d-block" src="{{ url('img/AvoPreto.png')}}" alt="" style="display: block; margin:1rem auto; height: 10rem;width: auto;">
	      	<i>Venha disfrutar de experiências únicas na companhia das nossas Avós...</i>
	    </div>
	  </div>
	</div>
</div>

<div class="separador"></div>

<!-- Sessao Galeria -->


<div class="container-fluid">
    <div class="container" style=" padding: 0;">
        <div class="parent" >

            <!-- Primeira linha -->
            <div class="containbox" >
                <div class="leftbox fill">
                    <figure> <img src="img/media/IMG_0001.jpg" alt=""/> </figure>
                </div>
                <div class="space"></div>
                <div class="rightbox fill" >
                    <figure> <img src="img/media/IMG_5356.jpg" alt=""/> </figure>
                </div>
            </div>

            <div class="space"></div>

            <!-- Segunda linha -->
            <div class="containbox" >
                <div class="leftboxb fill">
                    <figure> <img src="img/media/IMG_8784.jpg" alt=""/> </figure>
                </div>
                <div class="space"></div>
                <div class="rightboxb fill" >
                    <figure> <img src="img/media/IMG_8773_2.jpg" alt=""/> </figure>
                </div>
            </div>

        </div>
    </div>
</div>



<div class="separador"></div>
<!-- Sessao Reportagem -->

<div class="container-fluid">
	<div class="clearfix borderbox page"><!-- column -->


		<div class="container" style="padding: 0;">

		    <!-- First News -->
			<div class="browser_width colelem">
			    <div class="shadow u94"><!-- group -->
			        <div class="clearfix u94_align_to_page">

			            <div class="shadow grpelem view view-first" id="u95" style="background-image: url('img/VideoRTP.png') ">
			                <div class="mask">
			                    <h2>Reportagem RTP &quot;Agora Nós&quot;</h2>
			                    <p>Programa da RTP Agora Nós</p>
			                        <a href="#" class="info">Assistir</a>
			                </div>
			            </div>

			            <div class="clearfix grpelem pu96-4"><!-- column -->
			                <h5 class="colelem" >
			                   01/11/2018
			                </h5><!-- rasterized frame -->
			                <h3 class="colelem" >
			                   Reportagem RTP &quot;Agora Nós&quot;
			                </h3><!-- rasterized frame -->
			                <p class="colelem" >
			                   Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio
			                </p><!-- rasterized frame -->

			                <div class="colelem u99"><!-- simple frame --></div>
			                <div class="clearfix colelem" id="pu102"><!-- group -->

			                    <div class="grpelem facebook hoverbtn" style="height: 50px;">
			                        <a href="#">
			                            <img src="img/facebookcor-u101-fr.png" />
			                        </a>
			                    </div> <!--facebook-->
			                    <div class="grpelem instagram hoverbtn" style="height: 50px;">
			                        <a href="#">
			                            <img src="img/instagramcor-u100-fr.png" />
			                        </a>
			                    </div> <!--Instagr-->
			                    <div class="grpelem youtube hoverbtn" style="height: 50px">
			                         <a href="#">
			                            <img src="img/youtubecor-u102-fr.png" />
			                        </a>
			                    </div> <!--youtube-->
			                </div>
			            </div>
			        </div>
			    </div>
			</div>


		</div>
	</div>

</div>


<div class="separador"></div>


@endsection


@section('javascript')

	<script>

		$('#photos').append(allImages);

		$('.grid').masonry({
		  itemSelector: '.grid-item',
		  columnWidth: 100

		});

	</script>

@endsection
