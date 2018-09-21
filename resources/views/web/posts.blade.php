@extends('layouts.app')

<!-- Style Section -->
@section('customStyle')

<style>
	:root {
		--bg-color-gallery: #f0f0f0;
		--bg-color-harvest-gold: #e2c37c;
		--bg-color-tussock: #bb9246;
		--bg-color-cloudy: #aba6a3;
		--bg-color-gunsmoke: #7e8a84;
		--bg-color-stack: #949982;
		--bg-color-chestnut: #be5649;
		--bg-color-lime-spruce: #3a4953;
		--bg-color-mineshaft: #353535;
	}


	.colelem {
		display:inline;
		float:left;
		clear:both;
	}

	.grpelem {
		display:inline;
		float:left;
	}

	.cover {
		object-fit: cover;
		width: 540px;
		height: 420px;
	}

	.cover50 {
		object-fit: cover;
		width: 320px;
		height: 210px;
	}

	.barra {
		height:4px;
		background-color:#3A4953;
		bottom: 0px;
		right: 0px;
		position:relative;
		width:65%;
		margin-left:40%;
	}

	.barra50 {
		height:2px;
		background-color:#3A4953;
		bottom: 0px;
		right: 0px;
		position:relative;
		width:65%;
		margin-left:30%;
	}

	.uBox {
		margin-top:16px;
		position:relative;
		width:88%;
		margin-left:7%;
	}

	/* Social Buttons */
	/* Opacity #2 */
    .hoverbtn {
        background: rgba(0, 0, 0, 0);
    }
    .hoverbtn img {
        opacity: .8;
        -webkit-transition: .3s ease-in-out;
        transition: .3s ease-in-out;
    }
    .hoverbtn img:hover {
        opacity: 1;
        transform: scale(1.2);
    }

    /* ---- grid ---- */
	.grid {
		background: #EEE;
		max-width: 1400px;
	}

	/* clearfix */
	.grid:after {
		content: '';
		display: block;
		clear: both;
	}

	/* ---- grid-item ---- */

	.grid-item {
		min-height: 100px;
		float: left;
		border-radius: 5px;
		box-shadow:2px 5px 8px rgba(0,0,0,0.15);
		border-width:0px;
		background-color:#ABA6A3;
		padding-bottom:1px;
		width:32%;
		margin-bottom: 50px;
	}




	/* View */
	.view {
		height:200px;
		border-width:0px;
		border-color:transparent;
		opacity:1;
		-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
		filter:alpha(opacity=100);
		max-width:100000px;
		overflow: hidden;
		position:relative;
		width:87%;
		margin-left:6%;
		text-align: center;
		box-shadow: 1px 1px 2px #a6a6a6;
		cursor: default;
	}

	.view .mask, .view .content {
		width: 100%;
		height: 200px;
		position: absolute;
		overflow: hidden;
		top: 0;
		left: 0
	}

	.view img {
		display: block;
		position: relative
	}

	.view h2 {
		text-transform: uppercase;
		color: #fff;
		text-align: center;
		position: relative;
		font-size: 17px;
		padding: 10px;
		background: rgba(0, 0, 0, 0.8);
		margin: 20px 0 0 0
	}
	.view p {
		font-family: Georgia, serif;
		font-style: italic;
		font-size: 12px;
		position: relative;
		color: #fff;
		padding: 10px 20px 20px;
		text-align: center
	}
	.view a.info {
		display: inline-block;
		text-decoration: none;
		padding: 7px 14px;
		background: #000;
		color: #fff;
		text-transform: uppercase;
		box-shadow: 0 0 1px #000
	}
	.view a.info:hover {
		box-shadow: 0 0 5px #000
	}


	.view-first img {
		transition: all 0.2s linear;
	}
	.view-first .mask {
		opacity: 0;
		background-color: rgba(219,127,8, 0.7);
		transition: all 0.4s ease-in-out;
	}
	.view-first h2 {
		transform: translateY(-100px);
		opacity: 0;
		transition: all 0.2s ease-in-out;
	}
	.view-first p {
		transform: translateY(100px);
		opacity: 0;
		transition: all 0.2s linear;
	}
	.view-first a.info{
		opacity: 0;
		transition: all 0.2s ease-in-out;
	}

	.view-first:hover img {
		transform: scale(1.1);
	}
	.view-first:hover .mask {
		opacity: 1;
	}
	.view-first:hover h2,
	.view-first:hover p,
	.view-first:hover a.info {
		opacity: 1;
		transform: translateY(0px);
	}
	.view-first:hover p {
		transition-delay: 0.1s;
	}
	.view-first:hover a.info {
		transition-delay: 0.2s;
	}

	#grupo01 {
		min-height:439px;
		box-shadow:2px 5px 8px rgba(0,0,0,0.15);
		border-width:0px;
		background-color:#F0F0F0;
		padding-bottom:12px;
	}

	#subgrupo01 {
	 	margin-left:auto;
		margin-right:auto;
		position:relative;
		max-width:1400px;
	}

	#subgrp01_img {
		height:420px;
		box-shadow:0px 10px 10px rgba(0,0,0,0.3);
		opacity:1;
		filter:alpha(opacity=100);
		position:relative;
		margin-right:-10000px;
		margin-top:-38px;
		width:45%;
	}

	#subgrp01_elem {
		padding-bottom:0px;
		margin-right:-10000px;
		margin-top:51px;
		width:40%;
		margin-left:55%;
	}


</style>

@endsection


<!-- Content Section -->
@section('content')

<div class="container" style="height:500px; margin-top:60px;">
	<!-- First News -->
    <div class="container colelem">
        <div class="shadow" id="grupo01"	><!-- group -->

            <div id="subgrupo01">

                <div class="shadow grpelem grid-item view view-first" id="subgrp01_img">
                    <!-- simple frame -->
                   	<img src="img/VideoRTP.png" alt="" class="cover">
                   	<div class="mask">
						<h2>Reportagem RTP &quot;Agora Nós&quot;</h2>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,...</p>
						<a href="#" class="info">Ler mais</a>
					</div>

                </div>

                <div class="grpelem" id="subgrp01_elem"><!-- column -->
                    <h5 class="colelem" >
                       01/11/2018
                    </h5><!-- rasterized frame -->
                    <h3 class="colelem" >
                       Reportagem RTP &quot;Agora Nós&quot;
                    </h3><!-- rasterized frame -->
                    <p class="colelem" >
                       Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                    </p><!-- rasterized frame -->

                    <div class="colelem barra" style="background-color: var(--bg-color-harvest-gold)"> <!-- simple frame --></div>

                    <div class="colelem" style=" width:100%; margin-left:70%;"	><!-- group -->

                        <div class="grpelem hoverbtn" style="height: 50px;">
                            <a href="#">
                                <img src="img/facebookcor-u101-fr.png" />
                            </a>
                        </div> <!--facebook-->
                        <div class="grpelem hoverbtn" style="height: 50px;">
                            <a href="#">
                                <img src="img/instagramcor-u100-fr.png" />
                            </a>
                        </div> <!--Instagr-->
                        <div class="grpelem hoverbtn" style="height: 50px">
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

<div class="container" style="height: auto;">

	<div class="grid">

    @foreach ($posts as $key => $post)

		<!-- Item 1 -->
		<div class="shadow grpelem grid-item" style="background-color: var(--bg-color-cloudy)" ><!-- column -->

		    <div style="float:left; margin-top:-15px; width:100%;">
		        <div class="view view-first"><!-- custom html -->

                    @if($post->file)
                      <img src="{{ $post->file }}" class="cover50" alt="">
                    @else
                      <img src="img/no_image_available.png" class="cover50" alt="no image available in post">
                    @endif

	                 <div class="mask">
		                 <h2>{{ $post->name }}</h2>
		                 <p>{{ $post->excerpt }}</p>
		                     <a href="#" class="info">Ler mais</a>
	                 </div>
		        </div>
		        <div class="colelem uBox">
		            <h5 class="colelem">{{ $post->created_at }}</h5><!-- rasterized frame -->
		            <h3 class="colelem">{{ $post->name }}</h3> <!-- rasterized frame -->
		            <p class="colelem" >{{ $post->excerpt }} </p>
		        </div>
		        <div class="colelem barra50" style="background-color: var(--bg-color-gallery)"><!-- simple frame --></div>

		        <div class="colelem" style=" width:100%; margin-left:50%;"><!-- group -->

		            <div class="grpelem hoverbtn" style="height: 50px;">
                        <a href="#">
                            <img src="img/facebookcor-u101-fr.png" />
                        </a>
                    </div> <!--facebook-->
                    <div class="grpelem hoverbtn" style="height: 50px;">
                        <a href="#">
                            <img src="img/instagramcor-u100-fr.png" />
                        </a>
                    </div> <!--Instagr-->
                    <div class="grpelem hoverbtn" style="height: 50px">
                         <a href="#">
                            <img src="img/youtubecor-u102-fr.png" />
                        </a>
                    </div> <!--youtube-->


		        </div>
		    </div>
		</div>
    @endforeach

	</div>
  {{ $posts->render() }}

</div>




@endsection


<!-- Java Section -->
@section('javascript')

<script>

$('.grid').masonry({
  itemSelector: '.grid-item',
  columnWidth: 325,
  gutter: 50,

});

</script>


@endsection
