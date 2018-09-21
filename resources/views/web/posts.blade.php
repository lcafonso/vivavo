@extends('layouts.app')


@section('customStyle')
 <style>

        .borderbox {
              -moz-box-sizing:border-box;
              -webkit-box-sizing:border-box;
              -ms-box-sizing:border-box;
              box-sizing:border-box;
            }

        .browser_width > * {
              position:absolute;
              left:0px;
              right:0px;
            }

        .clearfix:after {
              content:"\0020";
              visibility:hidden;
              display:block;
              height:0px;
              clear:both;
            }

        *:first-child + html .clearfix {
              zoom:1;
            }

        .colelem {
              display:inline;
              float:left;
              clear:both;
            }

        .grpelem, .accordion_wrapper {
              display:inline;
              float:left;
            }


        .fluid_height_spacer {
          width:0.01px;
        }

        .position_content, .excludeFromNormalFlow {
          float:left;
        }



        #page {
              z-index:1;
              min-height:215px;
              background-image:none;
              border-width:0px;
              border-color:#000000;
              background-color:transparent;
              padding-top:50px;
              padding-bottom:62px;
              width:100%;
              max-width:1400px;
              margin-left:auto;
              margin-right:auto;
            }


        #u94 {
          z-index:2;
          min-height:439px;
          box-shadow:2px 5px 8px rgba(0,0,0,0.15);
          border-width:0px;
          background-color:#F0F0F0;
          padding-bottom:12px;
        }


        #u94-bw {
          z-index:2;
          min-height:439px;
        }

        #u94_align_to_page {
          margin-left:auto;
          margin-right:auto;
          position:relative;
          max-width:1400px;
        }

        #u95 {
          z-index:3;
          height:420px;
          box-shadow:0px 10px 10px rgba(0,0,0,0.3);
          opacity:1;
          -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
          filter:alpha(opacity=100);
          position:relative;
          margin-right:-10000px;
          margin-top:-38px;
          width:49.65%;
          left:1.5%;
          background:#F0F0F0 no-repeat center center;
          background-size:cover;
        }

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
          width:87.47%;
          margin-left:6.27%;
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



        #pu96-4 {
          z-index:4;
          padding-bottom:0px;
          margin-right:-10000px;
          margin-top:51px;
          width:41.36%;
          margin-left:57.22%;
        }

        #u96-4 {
          z-index:4;
          display:block;
          vertical-align:top;
          position:relative;
          width:43.87%;
        }


        #u99 {
          z-index:16;
          height:4px;
          background-color:#3A4953;
          margin-top:123px;
          position:relative;
          width:64.77%;
          margin-left:35.24%;
        }

        #pu102 {
          z-index:19;
          width:27.47%;
          margin-left:72.54%;
        }

        .youtube {
          z-index:87;
          opacity:1;
          -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
          filter:alpha(opacity=100);
          position:relative;
          margin-right:-10000px;
          width:33.34%;
          background:transparent url("images/youtubecor-u102-fr.png?crc=3954809695") no-repeat center center;
          background-size:cover;

        }

        .facebook {
          z-index:18;
          opacity:1;
          -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
          filter:alpha(opacity=100);
          position:relative;
          margin-right:-10000px;
          width:33.34%;
          left:33.34%;
          background:transparent url("images/facebookcor-u101-fr.png?crc=3851407862") no-repeat center center;
          background-size:cover;
        }

        .instagram {
          z-index:17;
          opacity:1;
          -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
          filter:alpha(opacity=100);
          position:relative;
          margin-right:-10000px;
          width:33.34%;
          left:66.67%;
          background:transparent url("images/instagramcor-u100-fr.png?crc=201568751") no-repeat center center;
          background-size:cover;
        }

        #pu127 {
          z-index:71;
          margin-top:148px;
          width: 100%;
        }

        #u127 {
          z-index:71;
          box-shadow:2px 5px 8px rgba(0,0,0,0.15);
          background-color:#F0F0F0;
          padding-bottom:0px;
          position:relative;
          margin-right:-10000px;
          width:28.5%;
          left:1.36%;
        }

        #u127_position_content {
          margin-top:-42px;
          width:100%;
        }

        #u128 {
          z-index:72;
          height:4px;
          background-color:#E2C37C;
          margin-top:16px;
          position:relative;
          width:87.47%;
          margin-left:6.27%;
        }

        #pu134 {
          z-index:87;
          width:39.85%;
          margin-left:53.89%;
        }

        #u119 {
          z-index:54;
          box-shadow:0px 10px 10px rgba(0,0,0,0.3);
          opacity:1;
          -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
          filter:alpha(opacity=100);
          position:relative;
          margin-right:-10000px;
          width:100%;
          background:transparent url("images/img_8817.jpg?crc=3888230737") no-repeat center center;
          background-size:cover;
        }

        #u119 .fluid_height_spacer {
          padding-bottom:71.91977077363897%;
        }

        #u118 {
          z-index:53;
          box-shadow:2px 5px 8px rgba(0,0,0,0.15);
          border-width:0px;
          background-color:#ABA6A3;
          padding-bottom:1px;
          margin-top:12px;
          position:relative;
          width:28.5%;
          margin-left:1.36%;
        }

        #u118_position_content {
          margin-top:-38px;
          width:100%;
        }

        #u110 {
          z-index:36;
          box-shadow:2px 5px 8px rgba(0,0,0,0.15);
          border-width:0px;
          background-color:#FFFFFF;
          padding-bottom:1px;
          position:relative;
          margin-right:-10000px;
          width:28.5%;
          left:34.72%;
        }

        #u103 {
          z-index:20;
          box-shadow:2px 5px 8px rgba(0,0,0,0.15);
          border-width:0px;
          background-color:#949982;
          padding-bottom:1px;
          position:relative;
          margin-right:-10000px;
          width:28.5%;
          left:70.08%;
        }

        #uBox {
          margin-top:16px;
          position:relative;
          width:87.47%;
          margin-left:6.27%;
        }

        /* Opacity #2 */
        .hoverbtn {
            background: rgba(0, 0, 0, 0);
        }
        .hoverbtn img {
            opacity: 1;
            -webkit-transition: .3s ease-in-out;
            transition: .3s ease-in-out;
        }
        .hoverbtn img:hover {
            opacity: .5;
        }


    </style>

@endsection

@section('content')

   <div class="clearfix borderbox" id="page"><!-- column -->

        <!-- First News -->
        <div class="browser_width colelem" id="u94-bw">
            <div class="shadow" id="u94"><!-- group -->
                <div class="clearfix" id="u94_align_to_page">
                    <div class="shadow grpelem" id="u95" style="background-image: url('img/videoRTP.png') ">
                        <!-- simple frame -->

                    </div>
                    <div class="clearfix grpelem" id="pu96-4"><!-- column -->
                        <h5 class="colelem" >
                           01/11/2018
                        </h5><!-- rasterized frame -->
                        <h3 class="colelem" >
                           Reportagem RTP &quot;Agora Nós&quot;
                        </h3><!-- rasterized frame -->
                        <p class="colelem" >
                           Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio
                        </p><!-- rasterized frame -->

                        <div class="colelem" id="u99"><!-- simple frame --></div>
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


        <div class="clearfix colelem" id="pu127"><!-- group -->

            <div class="shadow clearfix grpelem" id="u127"><!-- column -->
                <div class="position_content" id="u127_position_content">
                    <div class="view view-first"><!-- custom html -->

                             <img src="img/media/img_0040-u137-fr.jpg" />
                             <div class="mask">
                             <h2>Reportagem JN</h2>
                             <p>Reportagem feita na aldeia pelo JN</p>
                                 <a href="#" class="info">Ler mais</a>
                             </div>
                    </div>
                    <div class="colelem" id="uBox">
                        <h5 class="colelem">01/11/2018</h5><!-- rasterized frame -->
                        <h3 class="colelem">Reportagem JN </h3> <!-- rasterized frame -->
                        <p class="colelem" >Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip
                        </p><!-- rasterized frame -->
                    </div>
                    <div class="colelem" id="u128"><!-- simple frame --></div>

                    <div class="clearfix colelem" id="pu134"><!-- group -->
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



            <div class="shadow clearfix grpelem" id="u110"><!-- column -->
                <div class="position_content" id="u127_position_content">
                    <div class="view view-first"><!-- custom html -->

                             <img src="img/media/img_8784.jpg" style="height: 150%; object-fit: cover;" />
                             <div class="mask">
                             <h2>Gastronomia e Tradições</h2>
                             <p>Gastronomia e Tradições</p>
                                 <a href="#" class="info">Ler mais</a>
                             </div>
                    </div>
                    <div class="colelem" id="uBox">
                        <h5 class="colelem">01/11/2018</h5><!-- rasterized frame -->
                        <h3 class="colelem">Gastronomia e Tradições</h3> <!-- rasterized frame -->
                        <p class="colelem" >Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim
                        </p><!-- rasterized frame -->
                    </div>
                    <div class="colelem" id="u128"><!-- simple frame --></div>

                    <div class="clearfix colelem" id="pu134"><!-- group -->
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


            <div class="shadow clearfix grpelem" id="u103"><!-- column -->
                <div class="position_content" id="u127_position_content">
                    <div class="view view-first"><!-- custom html -->

                             <img src="img/media/img_0034-u139-fr.jpg" />
                             <div class="mask">
                             <h2>Maravilhosa Couve Penca</h2>
                             <p>Maravilhosa Couve Penca</p>
                                 <a href="#" class="info">Ler mais</a>
                             </div>
                    </div>
                    <div class="colelem" id="uBox">
                        <h5 class="colelem">01/11/2018</h5><!-- rasterized frame -->
                        <h3 class="colelem">Maravilhosa Couve Penca</h3> <!-- rasterized frame -->
                        <p class="colelem" >Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                        </p><!-- rasterized frame -->
                    </div>
                    <div class="colelem" id="u128"><!-- simple frame --></div>

                    <div class="clearfix colelem" id="pu134"><!-- group -->
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


        <div class="shadow clearfix colelem" id="u118"><!-- column -->
            <div class="position_content" id="u118_position_content">
                <div class="view view-first"><!-- custom html -->

                         <img src="img/media/img_8817.jpg" />
                         <div class="mask">
                         <h2>Reportagem JN</h2>
                         <p>Reportagem feita na aldeia pelo JN</p>
                             <a href="#" class="info">Ler mais</a>
                         </div>
                </div>

                <div class="colelem" id="uBox">
                    <h5 class="colelem">01/11/2018</h5><!-- rasterized frame -->
                    <h3 class="colelem">Vila Verde da Raia</h3> <!-- rasterized frame -->
                    <p class="colelem" >Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip
                    </p><!-- rasterized frame -->
                </div>
                <div class="colelem" id="u128"><!-- simple frame --></div>

                <div class="clearfix colelem" id="pu134"><!-- group -->
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



@endsection


@section('javascript')

@endsection
