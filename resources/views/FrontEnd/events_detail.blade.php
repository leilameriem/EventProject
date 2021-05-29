@extends('layouts.site')

@section('content')


 <main id="main" class="main-page">
   

       <!-- ======= Speaker Details Sectionn ======= -->
  
   
  @include('FrontEnd.section_event.details')
  @include('FrontEnd.section_event.location')
  @include('FrontEnd.section_event.date')
  @include('FrontEnd.section_event.gallery')
  @include('FrontEnd.section_event.ticket')

    
  </main><!-- End #main -->
@endsection