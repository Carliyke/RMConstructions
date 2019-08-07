@extends('layouts.app')

@section('content')
  <!-- CAROUSEL -->
  
  <div id="demo" class="carousel kb_elastic slide kb_wrapper" data-ride="carousel">

    <!-- The Slideshow -->

    <div class="carousel-inner" role="listbox" style=" width:100%; height: 600px !important;">

      <div class="carousel-item item caro active">
        <img src="{{asset('asset/img/pic3.jpg')}}" style="width:130%; height: 600px;" alt="Image6">
        <div class="carousel-caption col-sm-8 caroin">
          <div class="col-sm-12 px-0">
            <h3 class="col-sm-8 text-center text-dark rounded font-weight-bold bg-warning ml-0 py-2" style="border: 3px solid ;">Welcome to RM CONSTRUCTIONS</h3>
            <p class="col-sm-7 text-left text-dark rounded bg-warning" style="border: 3px solid ;">We Specialize in all kinds of Building Constructions.</p>
          </div>
          <div class="col-8 row">

            <button class="btn btn-success rounded text-dark font-weight-bold px-2 px-sm-4 mr-1 butin" style="border: 3px solid ;">
              Discover More
            </button>

            <button class="btn btn-light rounded text-dark font-weight-bold mx-0 px-2 px-sm-4 butin" style="border: 3px solid ;">
              Get Started
            </button>

          </div>
        </div>
      </div>

      <div class="carousel-item item caro">
        <img src="{{asset('asset/img/pic1.jpeg')}}" style="width:130%; height: 600px;" alt="Image3">
        <div class="carousel-caption col-sm-8 caroin">
          <div class="col-sm-12 px-0">
            <h3 class="col-sm-6 text-left text-dark rounded font-weight-bold bg-warning ml-0 py-2" style="border: 3px solid ;">We deliver latest in tech..</h3>
            <p class="col-sm-9 text-left text-dark rounded bg-warning" style="border: 3px solid ;">We build from scratch as well as renovate all kinds of constructions.</p>    
          </div>
          <div class="col-8 row">

            <button class="btn btn-success text-dark rounded font-weight-bold px-2 px-sm-4 mr-1 butin" style="border: 3px solid ;">
              Discover More
            </button>

            <button class="btn btn-light text-dark rounded font-weight-bold mx-0 px-2 px-sm-4 butin" style="border: 3px solid ;">
              Get Quote
            </button>

          </div>

        </div>
      </div>

      <div class="carousel-item item caro">
        <img src="{{asset('asset/img/pic5.jpg')}}" style="width:130%; height: 600px;" alt="Image7">
        <div class="carousel-caption col-sm-8 caroin">
          <div class="col-sm-12 px-0">
            <h3 class="col-sm-8 text-center text-dark rounded font-weight-bold bg-warning ml-0 py-2" style="border: 3px solid ;">Our Landscapes are Breathtaking</h3>
            <p class="col-sm-12 text-left text-dark rounded bg-warning" style="border: 3px solid ;">With over 20 years of experience in the construction industry, we deliver state of the art .</p>
          </div>
          <div class="col-8 row">

            <button class="btn btn-success text-dark rounded font-weight-bold px-2 px-sm-4 mr-1 butin" style="border: 3px solid ;">
              Discover More
            </button>

            <button class="btn btn-light text-dark rounded font-weight-bold mx-0 px-2 px-sm-4 butin" style="border: 3px solid ;">
              Features
            </button>

          </div>
        </div>
      </div>

      <div class="carousel-item item caro">
        <img src="{{asset('asset/img/pic6.jpg')}}" style="width:130%; height: 600px;" alt="Image7">
        <div class="carousel-caption col-sm-8 caroin">
          <div class="col-sm-12 px-0">
            <h3 class="col-sm-7 text-center text-dark rounded font-weight-bold bg-warning ml-0 py-2" style="border: 3px solid ;">Surveys and Urban planning.</h3>
            <p class="col-sm-7 text-left text-dark rounded bg-warning" style="border: 3px solid ;">We proffer Survey and urban planning service.</p>
          </div>
          <div class="col-8 row">

            <button class="btn btn-success text-dark rounded font-weight-bold px-2 px-sm-4 mr-1 butin" style="border: 3px solid ;">
              Discover More
            </button>

            <button class="btn btn-light text-dark rounded font-weight-bold mx-0 px-2 px-sm-4 butin" style="border: 3px solid ;">
              Features
            </button>

          </div>
        </div>
      </div>

      <div class="carousel-item item caro">
        <img src="{{asset('asset/img/pic5.jpg')}}" style="width:130%; height: 600px;" alt="Image7">
        <div class="carousel-caption col-sm-8 caroin">
          <div class="col-sm-12 px-0">
            <h3 class="col-sm-3 text-center text-dark rounded font-weight-bold bg-warning ml-0 py-2" style="border: 3px solid ;">Our Goal.</h3>
            <p class="col-sm-9 text-left text-dark rounded bg-warning" style="border: 3px solid ;">Is for the society to attain a state of environmental utopia.</p>
          </div>
          <div class="col-8 row">

            <button class="btn btn-success text-dark rounded font-weight-bold px-2 px-sm-4 mr-1 butin" style="border: 3px solid ;">
              Discover More
            </button>

            <button class="btn btn-light text-dark rounded font-weight-bold mx-0 px-2 px-sm-4 butin" style="border: 3px solid ;">
              Features
            </button>

          </div>
        </div>
      </div>
    </div>
  
    <!-- Left and Right Controls -->

    <a href="#demo" class="carousel-control-prev icon" data-slide="prev">
      <span class="carousel-control-prev-icon"></span> 
    </a>
    <a href="#demo" class="carousel-control-next icon" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>

  <!-- END OF CAROUSEL -->


  <!-- NEWS FLASH -->

  <div class="container-fluid bg-dark px-0 align-items try">
    <div class="row">
      <div class="col-sm-1 bg-danger">
        <p class="text-dark text-center font-weight-bold">NEWS</p>
      </div>
      <div class="col-sm-11" style="border: 2px solid;">
        <div class="col">
          <marquee class="align-middle pb-0 mb-0" behavior="scroll" direction="left" scrollamount="8">
            <p class="align-middle text-light news pb-0 mb-0">In a nutshell all we have is all we need | 
              <span>Indeed where there is life there is hope </span> | 
              <span>What can we do other than to give thanks for the gift </span> | 
              <span> I don't care how to see it but I know it's surely good </span> | 
              <span> Where can we run to when the grim reaper comes for you? </span> | 
              <span> Little do we know that how we picture life is often reversed</span>
            </p>
          </marquee>
        </div>
      </div>
    </div>
  </div>

  <!-- END OF NEWS FLASH -->

  <!-- THREE -->

  <div class="container-fluid three p-2">
    <h2 class="wow rubberBand text-center font-weight-bold mb-3 mt-5" data-wow-duration="1s" data-wow-delay=".2s">WHY CHOOSE US?</h2>
    <p class="wow bounceIn text-center text-dark threet" data-wow-duration="3s" data-wow-delay="1s">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lectus nulla at volutpat diam ut venenatis tellus. Consectetur adipiscing elit ut aliquam purus sit.</p>
    <div class="row mx-5 px-2 d-flex justify-content-between">

      <div class="wow bounceInDown col-sm-3 px-0 mx-auto" data-wow-duration="1s" data-wow-delay=".3s">

        <div class="col-sm-12 offset-sm-3 circleborder">
            <img class="imageback col-sm-12 mt-3 pt-4" src="{{ asset('asset/img/customwindow.png') }}"/>
        </div>

        <div class="col-sm-12 px-0 mx-0 mt-4">
          <h5 class="text-center font-weight-bold">WE DELIVER QUALITY</h5>
          <p class="text-center text-dark px-1 mx-0 threet">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consectetur adipiscing elit ut aliquam purus sit.</p>
        </div>

      </div>

      <div class="wow bounceInDown col-sm-3 pb-0 px-0 mx-auto" data-wow-duration="2s" data-wow-delay=".35s">

        <div class="col-sm-12 offset-sm-3 circleborder">
            <img class="imageback col-sm-12 mt-3 pt-4" src="{{ asset('asset/img/tachometer.png') }}"/>
        </div>

        <div class="col-sm-12 px-0 mx-0 mt-4">
          <h5 class="text-center font-weight-bold">ALWAYS ON TIME</h5>
          <p class="text-center text-dark px-1 mx-0 threet">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consectetur adipiscing elit ut aliquam purus sit.</p>
        </div>

      </div>

      <div class="wow bounceInDown col-sm-3 pb-0 px-0 mx-auto" data-wow-duration="3s" data-wow-delay=".4s">

        <div class="col-sm-12 offset-sm-3 circleborder">
            <img class="imageback col-sm-12 mt-3 pt-4" src="{{ asset('asset/img/tasklist.png') }}"/>
        </div>

        <div class="col-sm-12 px-0 mx-0 mt-4">
          <h5 class="text-center font-weight-bold">WE ARE PASSIONATE</h5>
          <p class="text-center text-dark px-1 mx-0 threet">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consectetur adipiscing elit ut aliquam purus sit.</p>
        </div>

      </div>

      <div class="wow bounceInDown col-sm-3 pb-0 px-0 mx-auto" data-wow-duration="4s" data-wow-delay=".45s">

        <div class="col-sm-12 offset-sm-3 circleborder">
            <img class="imageback col-sm-12 mt-3 pt-4" src="{{ asset('asset/img/settings.png') }}"/>
        </div>

        <div class="col-sm-12 px-0 mx-0 mt-4">
          <h5 class="text-center font-weight-bold">PROFESSIONAL SERVICES</h5>
          <p class="text-center text-dark px-1 mx-0 threet">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consectetur adipiscing elit ut aliquam purus sit.</p>
        </div>

      </div>

    </div>
  </div>

  <!-- END OF THREE -->

  

  <!-- MANY -->

  <div class="container-fluid px-4 yello" style="height: 100%">
    <div class="col-sm-12 px-4 pt-4">
                
      <div class="gallery mb-1">

        <figure class="gallery_item gallery_item--1">
          <img src="{{ asset('asset/img/construct.jpeg') }}" alt="" class="img-fluid rounded gallery_img img1">
        </figure>
        <figure class="gallery_item gallery_item--2">
          <img src="{{ asset('asset/img/pic6.jpg') }}" alt="" class="img-fluid rounded gallery_img img2">
        </figure>
        <figure class="gallery_item gallery_item--3">
          <img src="{{ asset('asset/img/construc.jpg') }}" alt="" class="img-fluid rounded gallery_img img3">
        </figure>
        <figure class="gallery_item gallery_item--4">
          <img src="{{ asset('asset/img/drill.jpg') }}" alt="" class="img-fluid rounded gallery_img img4">
        </figure>
        <figure class="gallery_item gallery_item--5">
          <img src="{{ asset('asset/img/pic3.jpg') }}" alt="" class="img-fluid rounded gallery_img img5">
        </figure>
        <figure class="gallery_item gallery_item--6">
          <img src="{{ asset('asset/img/pic2.jpg') }}" alt="" class="img-fluid rounded gallery_img img6">
        </figure>

      </div>
                              
    </div>
  </div>

  <!-- END OF MANY -->

  <!-- DARK -->

  <div class="container-fluid dark">
    <div class="row p-4 justify-content-around">
      <div class="col-sm-3" style="border: 2px solid green;">

      </div>
      <div class="col-sm-5" style="border: 2px solid blue;">
        <h3 class="text-light text-center font-weight-light">About OUR CEO</h3>
        <p class="block-quote text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consectetur adipiscing elit ut aliquam purus sit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consectetur adipiscing elit ut aliquam purus sit.</p>
      </div>
    </div>
  </div>
  <!-- END OF DARK -->
  
  <div class="col">
      <div class="col">
        <div class="col">
      
        </div>
      </div>
  </div>

  <!-- MAP -->

  <!-- END OF MAP -->

@endsection

