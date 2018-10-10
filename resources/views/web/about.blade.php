@extends('layouts.app')



@section('customStyle')
<style>

.text-white-50 { color: rgba(255, 255, 255, .5); }

.text-harvest-gold { color: rgba(226, 195, 124, 1); }
.text-chestnut { color: rgba(190, 86, 73, 1); }
.text-cloudy { color: rgba(171, 166, 163, 1); }
.text-stack { color: rgba(148, 153, 130, 1); }

.bg-purple { background-color: var(--purple); }

.border-bottom { border-bottom: 1px solid #e5e5e5; }

.box-shadow { box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .05); }

.lh-100 { line-height: 1; }
.lh-125 { line-height: 1.25; }
.lh-150 { line-height: 1.5; }
.lh-175 { line-height: 1.75; }

.rcornerright {
    float: left;
    margin-right: 20%;
}

.rcorners-harvest-gold {
    border-top-right-radius: 25px;
    border-bottom-right-radius: 25px;
    background: #e2c37c;
    width: 100%;
    margin-top: 15%;
}

.rcorners-chestnut {
    border-top-right-radius: 25px;
    border-bottom-right-radius: 25px;
    background: #be5649;
    width: 100%;
    margin-top: 15%;
}

.rcorners-cloudy {
    border-top-right-radius: 25px;
    border-bottom-right-radius: 25px;
    background: #aba6a3;
    width: 100%;
    margin-top: 15%;
}

.rcorners-stack {
    border-top-right-radius: 25px;
    border-bottom-right-radius: 25px;
    background: #949982;
    width: 100%;
    margin-top: 15%;
}

.mapcontainer {
  width: auto;
  height: auto;
  margin: 0 auto;
  overflow: hidden;             /* Add this */
}

.mapimag {
	margin-top: -10%;
	float: right;
	width: 90%;
  	background-color: #F0f0f0;    /* Red */
}

.maptext {
	width: 90%;
  	height: 400px;
  	padding: 10%;
    background-color: #aba6a3;
    font-size: 0.95em;
    color:#FFFFFF;
}

.jumbo {
	width: 100%;
	height: 400px;
	background: url(img/IMG_9918.jpg);
	background-repeat: no-repeat;
	background-position: center;
}

</style>

@endsection


@section('content')

<main role="main">

	<div class="container">

		<div class="jumbo" >
			<!-- <div class="container"  >
				<h1 class="display-3">Hello, world!</h1>
				<p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
				<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
			</div> -->
		</div>
	</div>

	<br><br>

	<div class="container">
		<!-- Example row of columns -->
		<div class="row">
			<div class="col-md-6" style="font-size: 0.8em; padding-left: 10em;">
				<p>O projeto “Viv@vó” pretende contribuir para o combate à desertificação e isolamento das comunidades rurais através do aproveitamento do conhecimento ancestral destas comunidades para a criação de experiências autênticas.</p>
				<p>Assim, pretende-se desenvolver um sistema de levantamento, seleção e divulgação do património cultural das aldeias da região norte de Portugal, permitindo aos visitantes usufruírem de uma experiência contextualizada, ouvindo histórias, relatos e lendas, enquanto partilham uma refeição na casa da avó.
				O objetivo central do projeto é, deste modo, valorizar as singularidades locais da cultura popular portuguesa, revelar segredos que se refazem em cada sentido e quebrar ritmos. Por ser desenvolvido numa região com inúmero património cultural, etnográfico,</p>
			</div>
			<div class="col-md-6" style="font-size: 0.8em; padding-right: 10em;">
				 <p>natural e paisagístico tem como objetivo principal criar experiências turísticas únicas e proporcionar aos visitantes viver a autenticidade dos locais na companhia das “Avos”.</p>
				 <p>Projeto de investigação inovador e abrangente, na área do Turismo, financiado pela Fundação para a Ciência e a Tecnologia (FCT), com cofinanciamento comunitário (Portugal 2020), em que colaboram oito investigadores de várias instituições de ensino superior, nomeadamente Instituto Politécnico de Bragança e Instituto Politécnico Viana do Castelo, sob a coordenação da Professora Doutora Paula Odete Fernandes, do Instituto Politécnico de Bragança. O projeto conta ainda com o contributo de cinco bolseiros de investigação.  </p>
				<p><a class="btn btn-secondary pull-right" href="{{ route('aboutdetail') }}" role="button">Ver detalhes &raquo;</a></p>
			</div>

    	</div>

	</div> <!-- /container -->

	<div class="container">
		<div class="row">

			<div class="col-md-10">
				<div class="col-md-2">
					<div class="rcorners-harvest-gold pt-3 rcornerright"></div>
				</div>
				<div class="media text-muted pt-3">
				  <p class="mr-2 lh-125">1.</p>
				  <p class="media-body pb-3 mb-0 small lh-175 border-gray">
				    <strong class="d-block text-gray-dark">Gerar</strong>
				    <strong class="mb-2 text-harvest-gold lh-150" style="font-size: 1.5em;">experiências únicas</strong>
				    <br>aos visitantes.
				  </p>
				</div>
				<div class="w-100"></div>
				<div class="col-md-2">
					<div class="rcorners-chestnut pt-3 rcornerright"></div>
				</div>
				<div class="media text-muted pt-3">
				  <p class="mr-2 lh-125">2.</p>
				  <p class="media-body pb-3 mb-0 small lh-175 border-gray">
				    <strong class="d-block text-gray-dark">Valorizar o</strong>
				    <strong class="mb-2 text-chestnut lh-150" style="font-size: 1.5em;">patrimonio humano </strong>
				    e contribuir
				    <br>para a <strong class="mb-2 text-chestnut lh-150" style="font-size: 1.5em;"> preservação da herança </strong>
				    cultural das regioes.
				  </p>
				</div>
				<div class="w-100"></div>
				<div class="col-md-2">
					<div class="rcorners-cloudy pt-3 rcornerright"></div>
				</div>
				<div class="media text-muted pt-3">
				  <p class="mr-2 lh-125">3.</p>
				  <p class="media-body pb-3 mb-0 small lh-175 border-gray">
				    <strong class="d-block text-gray-dark">Contribuir para o</strong>
				    <strong class="mb-2 text-cloudy lh-150" style="font-size: 1.5em;">combate ao isolamento </strong>
				    das avós que desta forma
				    <br>passam a interagir e a socializar periodicamente com visitantes;
				  </p>
				</div>
				<div class="w-100"></div>
				<div class="col-md-2">
					<div class="rcorners-stack pt-3 rcornerright"></div>
				</div>
				<div class="media text-muted pt-3">
				  <p class="mr-2 lh-125">4.</p>
				  <p class="media-body pb-3 mb-0 small lh-175 border-gray">
				    <strong class="d-block text-gray-dark">Gerar uma fonte de</strong>
				    <strong class="mb-2 text-stack lh-150" style="font-size: 1.5em;">rendimento suplementar </strong>
				    através da experiência
				    <br>proporcionada e da eventual compra de produtos provenientes de produção local
				  </p>
				</div>
			</div>
		</div>

	</div>

	<br><br>
	<div class="container">
	    <!-- Example row of columns -->
	    <div class="row">
	      <div class="col-md-4"></div>
	      <div class="col-md-8" style="font-size: 0.8em; padding: 70px; background-color: #F0F0F0;">
	         <p>Projeto de investigação inovador e abrangente, na área do Turismo, financiado pela Fundação para a Ciência e a Tecnologia (FCT), com cofinanciamento comunitário (Portugal 2020), em que colaboram oito investigadores de várias instituições de ensino superior, nomeadamente Instituto Politécnico de Bragança e Instituto Politécnico Viana do Castelo, sob a coordenação da Professora Doutora Paula Odete Fernandes, do Instituto Politécnico de Bragança. O projeto conta ainda com o contributo de cinco bolseiros de investigação.  </p>
	      </div>
	    </div>

	</div>

	<div class="container" style="padding: 100px; text-align: center;">
		<div class="row">
		  <div class="col ">
	        <img src="img/490085x669_poster_.png" alt="Lights" style="width:50%">
	        <div  style="padding: 10px; vertical-align: text-bottom; word-wrap: break-word;">
	          <p>Avó</p>
	        </div>
		  </div>
		  <div class="col ">
	        <img src="img/490085x609_poster_.png" alt="Lights" style="width:50%">
	        <div  style="padding: 20px; vertical-align: text-bottom; word-wrap: break-word;">
	          <p>Casa da Avó</p>
	        </div>
		  </div>
		  <div class="col ">
	        <img src="img/490075x669_poster_.png" alt="Lights" style="width:50%">
	        <div style="padding: 10px; vertical-align: text-bottom; word-wrap: break-word;">
	          <p>Gastronomia</p>
	        </div>
		  </div>
		  <div class="col ">
	        <img src="img/430069x549_poster_.png" alt="Lights" style="width:50%">
	        <div style="padding: 20px; vertical-align: text-bottom; word-wrap: break-word;">
	          <p>Património Natural</p>
	        </div>
		  </div>
		  <div class="col ">
	        <img src="img/430136x669_poster_.png" alt="Lights" style="width:50%">
	        <div style="padding: 10px; vertical-align: text-bottom; word-wrap: break-word;">
	          <p>Património Cultural</p>
	        </div>
		  </div>
		</div>
	</div>

	<div class="container">
		<div class='mapcontainer'>

	      <div class='maptext'>
			<p>O projeto está inserido na região de Terras Trás-os-Montes e Alto Tâmega. Uma região singular com um vasto património cultural, etnográfico, natural e paisagístico de grande potencial turístico.</p>
			<p>Parta à descoberta e venha conhecer o melhor do mundo rural! Deixa-se levar pelos 5 sentidos. Combine o palato com o a olfato e faça jus ao orgulho das nossas tradições. Parti-lhe connosco cada momento!</p>
	      </div>
	      <img src="{{ URL('img/mapa.png') }}" alt="" class='mapimag'>

	</div>
	<br><br>

</main>



@endsection


@section('javascript')


@endsection
