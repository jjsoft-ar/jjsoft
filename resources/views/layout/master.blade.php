<!DOCTYPE html>
<html lang="en">
  <head>
      <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>JJSoft</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
    
      @include('partials.header_css')
      
   </head>
  <body> 
     <!-- BEGAIN PRELOADER -->
    <div id="preloader">
      <div id="status">&nbsp;</div>
    </div>
    <!-- END PRELOADER -->

    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
    <!-- END SCROLL TOP BUTTON -->
     
      <!-- Primary Page Layout ================================================== -->
 
    @include('partials.header')
 
    @include('partials.about')
 
    @include('partials.services')
 
    @include('partials.worsk')
 
    @include('partials.team')
 
    @include('partials.pricing')
 
    @include('partials.blog')
 
    @include('partials.testimonials')
 
    @include('partials.clients')
 
    @include('partials.contact')
 
    @include('partials.contact_adv')
 
    @include('partials.subcribe')
 
    @include('partials.footer')
    
    @include('partials.footer_js')
      </body>
</html>