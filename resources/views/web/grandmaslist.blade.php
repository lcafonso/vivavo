@extends('layouts.app')

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
	padding-bottom : 130px;
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
	background : rgba(0, 0, 0, 0);
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

<div class="clearfix borderbox page"><!-- column -->

  @foreach($grandmas as $grandma)

       <!-- First Grandma -->
      <div >
          <div class="shadow u94"><!-- group -->
              <div class="clearfix u94_align_to_page">

                  <div class="shadow grpelem view view-first" id="u95" style="background-image: url( '{{ $grandma->file }}' ) ">
                      <div class="mask">
                          <h2>{{ $grandma->name }}</h2>
                          <p>{{ $grandma->local->name }}, {{ $grandma->local->district->name }}</p>
                              <a href="#" class="info">Mais Informações</a>
                      </div>
                  </div>

                  <div class="clearfix grpelem pu96-4"><!-- column -->
                      <h5 class="colelem" >
                         {{ $grandma->local->name }}, {{ $grandma->local->district->name }}
                      </h5><!-- rasterized frame -->
                      <h3 class="colelem" >
                         {{ $grandma->name }}
                      </h3><!-- rasterized frame -->
                      <p class="colelem" >
                         {{ $grandma->excerpt }}
                       </p><!-- rasterized frame -->

                      <div class="colelem u99"><!-- simple frame --></div>
                      <div class="clearfix colelem" id="pu102"><!-- group -->

                          <div class="grpelem  hoverbtn" style="padding-top: 10px;" >
                              Ver Eventos
                              <a href="#">
                                  <img src="img/SetaDireitaPretoPNG.png" />
                              </a>
                          </div>

                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div style="height: 100px;" ></div>

    @endforeach

</div>

@endsection


@section('javascript')

@endsection
