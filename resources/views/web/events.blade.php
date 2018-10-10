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


	<style>

	/* .section SECTION
	–––––––––––––––––––––––––––––––––––––––––––––––––– */

	.section {
	  background: #f0f0f0;
	  padding: 10px 0;

	}

	.section .container {
	  position: relative;
	  display: flex;
	  width: 90%;
	  max-width: 1200px;
	  margin: 0 auto;
	  text-align: center;
	  overflow: hidden;
	  background: #f0f0f0;
	}

	.section button {
	  background: transparent;
	  border: none;
	  cursor: pointer;
	  outline: none;
	}

	/* TIMELINE
	–––––––––––––––––––––––––––––––––––––––––––––––––– */
	.timeline {
	  white-space: nowrap;
	  overflow-x: hidden;
	}

	.timeline ol {
	  font-size: 0;
	  width: 100vw;
	  padding: 200px 0;
	  transition: all 1s;
	}

	.timeline ol li {
	  position: relative;
	  display: inline-block;
	  list-style-type: none;
	  width: 160px;
	  height: 3px;
	  background: url('img/dot.gif') 1px top repeat-x;;
	}

	.timeline ol li:last-child {
	  width: 280px;
	}

	.timeline ol li:not(:first-child) {
	  margin-left: 14px;
	}

	.timeline ol li:not(:last-child)::after {
	  content: '';
	  position: absolute;
	  top: 50%;
	  left: calc(100% + 1px);
	  bottom: 0;
	  width: 12px;
	  height: 12px;
	  transform: translateY(-50%);
	  border-radius: 50%;
	  background: #bb9246;
	}

	/* Timeline Element Styles */
	.timeline ol li div {
	  position: absolute;
	  left: calc(100% + 7px);
	  width: 280px;
	  padding: 15px;
	  font-size: 0.8rem;
	  text-align: left;
	  white-space: normal;
	  color: black;
	  background: white;
	}

	.timeline ol li div::before {
	  content: '';
	  position: absolute;
	  top: 100%;
	  left: 0;
	  width: 0;
	  height: 0;
	  border-style: solid;
	}

	/* styles for the odd ones */
	.timeline ol li:nth-child(odd) div {
	  top: -16px;
	  transform: translateY(-100%);
	}

	.timeline ol li:nth-child(odd) div::before {
	  top: 100%;
	  border-width: 8px 8px 0 0;
	  border-color: white transparent transparent transparent;
	}

	/* styles for the even ones */
	.timeline ol li:nth-child(even) div {
	  top: calc(100% + 16px);
	}

	.timeline ol li:nth-child(even) div::before {
	  top: -8px;
	  border-width: 8px 0 0 8px;
	  border-color: transparent transparent transparent white;
	}

	/* Timeline text Styles */
	.timeline time {
	  display: block;
	  font-size: 0.9rem;
	  font-weight: normal;
	  font-style: italic;
	}
	.timeline title {
	  display: block;
	  font-size: 0.9rem;
	  font-weight: bold;
	  font-style: normal;
	  margin-bottom: 8px;
	}

	/* Timeline Navigation Styles */

	.arrows {

	  }

	.arrows .arrow__prev {
	  position: absolute;
	  display: flex;
	  top: calc(50% - 2px);
	  left:  calc(2% - 2px);
	  transform:translate(-25px,-25px);
	}

	.arrows .arrow__next {
	  position: absolute;
	  display: flex;
	  top: calc(50% - 2px);
	  right:  calc(-2% - 5px);
	  transform:translate(-25px,-25px);
	}

	.timeline .disabled {
	  opacity: .5;
	}

	.arrows img {
	  width: 35px;
	  height: 35px;
	}

	/* GENERAL MEDIA QUERIES
	–––––––––––––––––––––––––––––––––––––––––––––––––– */
	@media screen and (max-width: 599px) {
	  .timeline ol,
	  .timeline ol li {
	    width: auto;
	  }

	  .timeline ol {
	    padding: 0;
	    transform: none !important;
	  }

	  .timeline ol li {
	    display: block;
	    height: auto;
	    background: transparent;
	  }

	  .timeline ol li:first-child {
	    margin-top: 25px;
	  }

	  .timeline ol li:not(:first-child) {
	    margin-left: auto;
	  }

	  .timeline ol li div {
	    width: 94%;
	    height: auto !important;
	    margin: 0 auto 25px;
	  }

	  .timeline ol li div {
	    position: static;
	  }

	  .timeline ol li:nth-child(odd) div {
	    transform: none;
	  }

	  .timeline ol li:nth-child(odd) div::before,
	  .timeline ol li:nth-child(even) div::before {
	    left: 50%;
	    top: 100%;
	    transform: translateX(-50%);
	    border: none;
	    border-left: 1px solid white;
	    height: 25px;
	  }

	  .timeline ol li:last-child,
	  .timeline ol li:nth-last-child(2) div::before,
	  .timeline ol li:not(:last-child)::after,
	  .timeline .arrows {
	    display: none;
	  }
	}


	</style>


@endsection

@section('content')
 <!--Main layout-->


  <section class="section timeline">
    <div class="container">
      <ol>
        <li></li>
        @foreach ($events as $event)
        <li>
          <div>
            <time>{{ $event->data_time }}</time>
            <title>{{ $event->name }}</title>
            <p style="font-size: 9px;">{{ $event->excerpt }}</p>
          </div>
        </li>
        @endforeach
        <li></li>
        <li></li>
      </ol>

      <div class="arrows">
        <button class="arrow arrow__prev disabled " disabled>
          <img src="img/svg/arrow_prev.svg" alt="prev timeline arrow">
        </button>
        <button class="arrow arrow__next " >
          <img src="img/svg/arrow_next.svg" alt="next timeline arrow" >
        </button>
      </div>
    </div>
  </section>

  <!-- START THE FEATURETTES -->
  <section>

    <div class="container">
    <hr class="featurette-divider">
    @foreach ($events as $k => $event)
      @if ($k % 2 == 0)
          <div class="row featurette">
            <div class="col-md-7">
              <h2 class="featurette-heading">{{ $event->name }} </h2>
              <span class="text-muted">
                <p>Local:<strong>{{ $event->local }}</strong> com a Avó <strong>{{ $event->grandma->name }}</strong></p>
                <p>Data/Hora:<strong>{{ $event->data_time }}</strong></p>
              </span>
              <p class="lead">{{ $event->excerpt }}</p>
            </div>
            <div class="col-md-5 view view-first">
              @if($event->file1)
               <img src="{{ $event->file1 }}" class="featurette-image img-fluid mx-auto" alt="">
              @else
               <img src="img/no_image_available.png"  class="featurette-image img-fluid mx-auto" alt="no image available in post">
              @endif
              <div class="mask">
                  <h2>{{ $event->name }}</h2>
                  <p>{{ $event->local }}, {{ $event->data_time }} </p>
                      <a href="{{ route('event', $event->slug) }}" class="info">Mais Informações</a>
              </div>
            </div>
          </div>
      @else
          <div class="row featurette">
            <div class="col-md-7 order-md-2">
              <h2 class="featurette-heading">{{ $event->name }} </h2>
              <span class="text-muted">
                <p>Local:<strong>{{ $event->local }}</strong> com a Avó <strong>{{ $event->grandma->name }}</strong></p>
                <p>Data/Hora:<strong>{{ $event->data_time }}</strong></p>
              </span>
              <p class="lead">{{ $event->excerpt }}</p>
            </div>
            <div class="col-md-5 order-md-1 view view-first">
              @if($event->file1)
               <img src="{{ $event->file1 }}" class="featurette-image img-fluid mx-auto" alt="">
              @else
               <img src="img/no_image_available.png"  class="featurette-image img-fluid mx-auto" alt="no image available in post">
              @endif
              <div class="mask">
                  <h2>{{ $event->name }}</h2>
                  <p>{{ $event->local }}, {{ $event->data_time }} </p>
                      <a href="{{ route('event', $event->slug) }}" class="info">Mais Informações</a>
              </div>
            </div>
          </div>
       @endif

          <hr class="featurette-divider">


    @endforeach
    {{ $events->render() }}
  </div>
  </section>        <!-- /END THE FEATURETTES -->






<!--Main layout-->
@endsection


@section('javascript')

<script>
(function() {
  // VARIABLES
  const timeline = document.querySelector(".timeline ol"),
    elH = document.querySelectorAll(".timeline li > div"),
    arrows = document.querySelectorAll(".timeline .arrows .arrow"),
    arrowPrev = document.querySelector(".timeline .arrows .arrow__prev"),
    arrowNext = document.querySelector(".timeline .arrows .arrow__next"),
    firstItem = document.querySelector(".timeline li:first-child"),
    lastItem = document.querySelector(".timeline li:last-child"),
    xScrolling = 280,
    disabledClass = "disabled";
  // START
  window.addEventListener("load", init);
  function init() {
    setEqualHeights(elH);
    animateTl(xScrolling, arrows, timeline);
    setSwipeFn(timeline, arrowPrev, arrowNext);
    setKeyboardFn(arrowPrev, arrowNext);
  }
  // SET EQUAL HEIGHTS
  function setEqualHeights(el) {
    let counter = 0;
    for (let i = 0; i < el.length; i++) {
      const singleHeight = el[i].offsetHeight;
      if (counter < singleHeight) {
        counter = singleHeight;
      }
    }
    for (let i = 0; i < el.length; i++) {
      el[i].style.height = `${counter}px`;
    }
  }
  // CHECK IF AN ELEMENT IS IN VIEWPORT
  // http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
  function isElementInViewport(el) {
    const rect = el.getBoundingClientRect();
    return (
      rect.top >= 0 &&
      rect.left >= 0 &&
      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
  }
  // SET STATE OF PREV/NEXT ARROWS
  function setBtnState(el, flag = true) {
    if (flag) {
      el.classList.add(disabledClass);
    } else {
      if (el.classList.contains(disabledClass)) {
        el.classList.remove(disabledClass);
      }
      el.disabled = false;
    }
  }
  // ANIMATE TIMELINE
  function animateTl(scrolling, el, tl) {
    let counter = 0;
    for (let i = 0; i < el.length; i++) {
      el[i].addEventListener("click", function() {
        if (!arrowPrev.disabled) {
          arrowPrev.disabled = true;
        }
        if (!arrowNext.disabled) {
          arrowNext.disabled = true;
        }
        const sign = (this.classList.contains("arrow__prev")) ? "" : "-";
        if (counter === 0) {
          tl.style.transform = `translateX(-${scrolling}px)`;
        } else {
          const tlStyle = getComputedStyle(tl);
          // add more browser prefixes if needed here
          const tlTransform = tlStyle.getPropertyValue("-webkit-transform") || tlStyle.getPropertyValue("transform");
          const values = parseInt(tlTransform.split(",")[4]) + parseInt(`${sign}${scrolling}`);
          tl.style.transform = `translateX(${values}px)`;
        }
        setTimeout(() => {
          isElementInViewport(firstItem) ? setBtnState(arrowPrev) : setBtnState(arrowPrev, false);
          isElementInViewport(lastItem) ? setBtnState(arrowNext) : setBtnState(arrowNext, false);
        }, 1100);
        counter++;
      });
    }
  }
  // ADD SWIPE SUPPORT FOR TOUCH DEVICES
  function setSwipeFn(tl, prev, next) {
    const hammer = new Hammer(tl);
    hammer.on("swipeleft", () => next.click());
    hammer.on("swiperight", () => prev.click());
  }
  // ADD BASIC KEYBOARD FUNCTIONALITY
  function setKeyboardFn(prev, next) {
    document.addEventListener("keydown", (e) => {
      if ((e.which === 37) || (e.which === 39)) {
        const timelineOfTop = timeline.offsetTop;
        const y = window.pageYOffset;
        if (timelineOfTop !== y) {
          window.scrollTo(0, timelineOfTop);
        }
        if (e.which === 37) {
          prev.click();
        } else if (e.which === 39) {
          next.click();
        }
      }
    });
  }
})();
</script>

@endsection
