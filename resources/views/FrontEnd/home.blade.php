@extends('layouts.site')

@section('content')
 <!-- ======= Intro Section ======= -->
  <section id="intro">
    <div class="intro-container" data-aos="zoom-in" data-aos-delay="100">
      <h1 class="mb-4 pb-0"> rendre <br><span> votre événement </span></h1>
      <p class="mb-4 pb-0">vivant</p>

      <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
      <!--a href="#about" class="about-btn scrollto">About The Event</a-->
       
    </div>
  </section><!-- End Intro Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
     @include('FrontEnd.section.about')
   <!-- End About Section -->

    <!-- ======= Speakers Section ======= -->
    @include('FrontEnd.section.events')
   <!-- End Speakers Section -->
    @include('FrontEnd.section.contact')
    
   <!-- End Contact Section -->

  </main><!-- End #main -->

@endsection
