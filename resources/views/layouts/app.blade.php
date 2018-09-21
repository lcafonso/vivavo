<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- =========================================
    Basic
    ========================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="vivavo, IPB, projetos, interior"/>
    <meta name="description" content="Projeto Viv@vo - Viver na casa da avó">
    <meta name="author" content="Luis Carlos M. Afonso">
    <link rel="icon" href="{{ url('img/favicon.ico') }}">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Viv@vo Project</title>
    <base href="{{ URL::asset('/') }}" target="_top">



    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Viv@vo') }}</title>


    <!-- =========================================
    Mobile Configurations
    ========================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css' />
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

    <!-- //Fonts -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ url('js/jquery-3.3.1.min.js') }}"></script>
    <!-- Bootstrap -->
    <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="https://unpkg.com/ionicons@4.2.4/dist/css/ionicons.min.css" rel="stylesheet">
    <!-- <link href="{{ url('css/glowing.css') }}" rel="stylesheet" /> -->


    <!-- Custom style -->
    <link href="{{ url('css/master.css') }}" rel="stylesheet" />

    <style>

      #app{

        padding-top: 60px;

      }

      @font-face {
        font-family: 'museo300';
        src: url('font/Museo300Regular.otf');
        font-weight: normal;
        font-style: normal;
      }

      @font-face {
        font-family: 'museo500';
        src: url('font/Museo500Regular.otf');
        font-weight: normal;
        font-style: normal;
      }

      @font-face {
        font-family: 'museo700';
        src: url('font/Museo700Regular.otf');
        font-weight: normal;
        font-style: normal;
      }



      body {
        font-family: 'museo300';
        font-size: 18px;
      }


      /* Footer */
      /* Footer settings */
      #footer_settings{
        background: #3a4953;
        color: black;
        padding: 1rem;
      }

      #footer_settings img {
        padding: 0.5rem;
      }

      /* Logos Institucionais */

      #logo_ipb_esact {
        width:195px;
        height:auto;
      }
      #logo_pe2 {
        width:109px;
        height:auto;
      }
      #logo_ce {
        width:116px;
        height:auto;
      }
      #logo_fct {
        width:169px;
        height:auto;
      }

      .glowing {
        -webkit-filter: drop-shadow(0 0 0 rgba(255,255,255,.8));
        -webkit-transition: all .2s linear;
        -moz-transition: all .2s linear;
        -o-transition: all .2s linear;
        transition: all .2s linear;
      }
      .glowing.red:hover { -webkit-filter: drop-shadow(0 0 8px rgba(255,153,153,1)); }
      .glowing.orange:hover { -webkit-filter: drop-shadow(0 0 8px rgba(244,173,66,1)); }
      .glowing.yellow:hover { -webkit-filter: drop-shadow(0 0 8px rgba(244,241,66,1)); }
      .glowing.green:hover { -webkit-filter: drop-shadow(0 0 8px rgba(83,244,66,1)); }
      .glowing.cyan:hover { -webkit-filter: drop-shadow(0 0 8px rgba(0,255,221,1)); }
      .glowing.lightblue:hover { -webkit-filter: drop-shadow(0 0 8px rgba(0,231,255,1)); }
      .glowing.blue:hover { -webkit-filter: drop-shadow(0 0 8px rgba(0,153,255,1)); }
      .glowing.darkblue:hover { -webkit-filter: drop-shadow(0 0 8px rgba(0,63,255,1)); }
      .glowing.indigo:hover { -webkit-filter: drop-shadow(0 0 8px rgba(167,66,244,1)); }
      .glowing.purple:hover { -webkit-filter: drop-shadow(0 0 8px rgba(244,66,232,1)); }
      .glowing.magenta:hover { -webkit-filter: drop-shadow(0 0 8px rgba(255,109,194,1)); }
      .glowing.pink:hover { -webkit-filter: drop-shadow(0 0 8px rgba(255,137,184,1)); }
      .glowing.cloudy:hover { -webkit-filter: drop-shadow(0 0 8px rgba(171,166,163,1)); }
      .glowing.gunsmoke:hover { -webkit-filter: drop-shadow(0 0 8px rgba(126,138,132,1)); }
      .glowing.gallery:hover { -webkit-filter: drop-shadow(0 0 8px rgba(240,240,240,1)); }

      .and { }
      .quickly { -webkit-transition:-webkit-transform .05s !important;-moz-transition:-moz-transform .05s !important;-o-transition:-o-transform .05s !important;transition:transform .05s !important; }
      .rotating:hover { -ms-transform:matrix(1.1,0.2,-0.2,1.1,0,0);-webkit-transform:matrix(1.1,0.2,-0.2,1.1,0,0);transform:matrix(1.1,0.2,-0.2,1.1,0,0); }
      .zooming:hover { -ms-transform: scale(1.1,1.1);-webkit-transform: scale(1.1,1.1);transform: scale(1.1,1.1); }

      .disco:hover {
        -webkit-animation-duration: 2s;
        -webkit-animation-timing-function: ease-in-out;
        -webkit-animation-iteration-count: infinite;
        -webkit-animation-name: disco;
        animation-duration: 2s;
        animation-timing-function: ease-in-out;
        animation-iteration-count: infinite;
        animation-name: disco;
      }
      @-webkit-keyframes disco {
        0%    { -webkit-filter: drop-shadow(0 0 8px rgba(255,153,153,1)); }
        25%  { -webkit-filter: drop-shadow(0 0 8px rgba(244,241,66,1)); }
        50%  { -webkit-filter: drop-shadow(0 0 8px rgba(0,153,255,1)); }
        75%  { -webkit-filter: drop-shadow(0 0 8px rgba(244,66,232,1)); }
        100%    { -webkit-filter: drop-shadow(0 0 8px rgba(255,153,153,1)); }
      }

    </style>

    @yield('customStyle')

  </head>
    <body>

      <!-- NavBar -->
      <!--
      Navbar with brand center, links on left and right that all collapse into the vertical mobile
      menu
      -->
      <nav class="navbar navbar-dark navbar-expand-md navbar-custom justify-content-between">

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-nav">
               <span class="ion ion-ios-menu"></span>
          </button>
          <div class="navbar-collapse collapse dual-nav w-50 order-1 order-md-0">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/grandmaslist') }}">Avós</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/events') }}">Eventos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/news') }}">Notícias</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/about') }}">Projecto</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/contacts') }}">Contactos</a>
                </li>
              </ul>
          </div>
          <a href="/" class="navbar-brand mx-auto d-block text-center order-0 order-md-1 w-25">
              <img class="navbar-brand logo glowing gunsmoke and quickly zooming" src="{{ url('img/svg/VivavoPrincipalPreto.svg') }}" alt="">
          </a>
          <div class="navbar-collapse collapse dual-nav w-50 order-2">
            <ul class="nav navbar-nav ml-auto">
              <!-- Authentication Links -->
              @guest
                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}"><span class="ion ion-ios-cart"></span> </a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}"><span class="ion ion-ios-person"></span></a></li>
              @else
                 <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <span class="ion ion-ios-list"></span>
                     </a>
                     <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                         <a class="dropdown-item" href="{{ route('tags.index') }}">Etiquetas</a>
                         <a class="dropdown-item" href="{{ route('categories.index') }}">Categorias</a>
                         <a class="dropdown-item" href="{{ route('activities.index') }}">Atividades</a>
                         <a class="dropdown-item" href="{{ route('locals.index') }}">Locais</a>
                         <a class="dropdown-item" href="{{ route('districts.index') }}">Distritos</a>
                         <a class="dropdown-item" href="{{ route('pois.index') }}">Pontos de Interesse</a>
                         <div class="dropdown-divider"></div>
                         <a class="dropdown-item" href="{{ route('users.index') }}">Utilizadores</a>
                         <a class="dropdown-item" href="{{ route('grandmas.index') }}">Intervinientes (avós)</a>
                         <div class="dropdown-divider"></div>
                         <a class="dropdown-item" href="{{ route('posts.index') }}">Noticias</a>
                         <a class="dropdown-item" href="{{ route('event.index') }}">Eventos</a>
                     </div>
                 </li>
                 <li class="nav-item"><a class="nav-link" href="{{ url('/') }}"><span class="ion ion-ios-cart"></span> </a></li>
                 <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>


                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>


                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>

                    </li>
                @endguest
            </ul>
          </div>

      </nav>

      <!-- Slogan -->
      <div class="slogan">
        <img src="{{ url('img/svg/textoViver.svg') }}" alt="">
      </div>
      <!-- end Slogan -->


      <!-- Content -->
      <div class="separador"></div>
      @yield('content')


      <!-- end Content -->



      <div class="separador"></div>
      <!-- Footer -->
      <footer class="footer p-t-1" id="footer_settings">
        <div class="row">
          <div class="col-lg-8 d-flex align-items-lg-center mr-auto p-2">
            <a href="#">
              <img src="{{ url('img/IPB-ESACT-02-branco.png') }}" class="img-fluid glowing gallery" alt="" id="logo_ipb_esact">
            </a>
            <a href="{{ url('/') }}">
              <img src="{{ url('img/logo-PE2.png') }}" class="img-fluid  glowing gallery" alt="" id="logo_pe2">
            </a>
            <a href="{{ url('/') }}">
              <img src="{{ url('img/logo-ce-bw2.png') }}" class="img-fluid glowing gallery" alt="" id="logo_ce">
            </a>
            <a href="{{ url('/') }}">
              <img src="{{ url('img/2017_FCT_H_branco.png') }}" class="img-fluid glowing gallery" alt="" id="logo_fct">
            </a>
            <a href="{{ url('/') }}">
              <img src="{{ url('img/Logo_Portugal_2020_Branco.png') }}" class="img-fluid glowing gallery" alt="" style="width:107px;height:auto;padding: 0.5rem;">
            </a>
            <a href="{{ url('/') }}">
              <img src="{{ url('img/principal_bt.png') }}" class="img-fluid glowing gallery" alt="" style="width:126px;height:auto;padding: 0.5rem;">
            </a>
            <a href="{{ url('/') }}">
              <img src="{{ url('img/hotel_logo_footer.png') }}"  class="img-fluid glowing gallery" alt="" style="width:147px;height:auto;padding: 0.5rem;">
            </a>
          </div>
          <div class="col-lg-4 p-2 align-self-lg-end text-right">
            <a href="{{ url('/') }}">
              <img src="{{ url('img/FacebookBranco.png') }}"  class="img-fluid glowing gallery" alt="" style="width:10%;height:auto;">
            </a>
            <a href="{{ url('/') }}">
              <img src="{{ url('img/InstagramBrancoPNG.png') }}"  class="img-fluid glowing gallery" alt="" style="width:10%;height:auto;">
            </a>
            <a href="{{ url('/') }}">
              <img src="{{ url('img/YoutubeBrancoPNG.png') }}"  class="img-fluid glowing gallery" alt="" style="width:10%;height:auto;">
            </a>
          </div>
        </div>
        <!-- Footer Elements -->
        <!--
        <div class="row">
          <div class="col-lg-12"  >

            <div class="footer-copyright text-center py-1" style="color: #ffffff; font-family: 'museo300'; font-size: .8rem;">
              © 2018 Copyright
              <a href="{{ url('/') }}">
                <img class="glowing orange" src="{{ url('img/svg/VivavoPrincipalBranco.svg') }}" alt="" style="width:5rem;height:auto;">
              </a>
            </div>

          </div>

        </div>
        -->
      </footer>
      <!-- end Footer -->



      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="{{ url('js/popper.min.js') }}"></script>
      <script src="{{ url('js/bootstrap.min.js') }}"></script>
      <script src="https://unpkg.com/ionicons@4.2.4/dist/ionicons.js"></script>
      <script src="{{ url('js/masonry.pkgd.min.js') }}"></script>

      <!-- Others scripts  -->
      <script src="{{ url('js/wow.js') }}"></script>


      @yield('javascript')


    </body>
  </html>
