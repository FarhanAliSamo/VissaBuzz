
<html lang="en-US">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<link rel="shortcut icon" type="image/x-icon" href="{{asset('fav-icon.png')}}">

	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />


	<meta http-equiv="pragma" content="no-cache" />
	
	{{-- @if(isset($meta_info['title']) && isset($meta_info['description']) )
		<title>{{$meta_info['title']}}</title>
		<meta name="description" content="{{$meta_info['description']}}" >
		@if(isset($meta_info['keyword']) && $meta_info['keyword'] != '')
		<meta name="keywords" content="{{$meta_info['keyword']}}" >
		@endif
		
	@else
		<title>{{$basic_details->company_name}}</title>
		<meta name="description" content="{{$basic_details->company_name}}" >
	@endif
	
	@if($basic_details->is_index == 0)
	<meta name='robots' content='noindex, nofollow'>
	@else
    	@if(isset($meta_info['is_index']) && $meta_info['is_index'] == '0')
    	    <meta name='robots' content='noindex, nofollow'>
	    @endif
	@endif --}}
	
    @if(config('global.header_scripts') != '')
    {!! config('global.header_scripts') !!}
    @endif	
    
    <?php
      //   $canonicalUrl = request()->url();
      //   if(request()->page > 1)
      //   {
      //       $canonicalUrl .= '?page=' . request()->page;
      //       // $canonicalUrl  = $canonicalUrl . '?page=' . request()->page;
      //   }
    ?>    
    {{-- <link rel="canonical" href="{!! $canonicalUrl !!}" /> --}}
    
    <div class="organization-schema">
     <script>        
      // @if(isset($meta_info['page_schema']) && $meta_info['page_schema'] != '')
      
      // {!! $meta_info['page_schema'] !!}
      
      // @endif
      </script>
    </div>
    
  <link rel="stylesheet" href="/assets/frontend/css/bootstrap.css">
      <!--Font Awesome css-->
      <link rel="stylesheet" href="/assets/frontend/css/font-awesome.min.css">
      <!--Magnific css-->
      <link rel="stylesheet" href="/assets/frontend/css/magnific-popup.css">
      <!--Owl-Carousel css-->
      <link rel="stylesheet" href="/assets/frontend/css/owl.carousel.min.css">
      <link rel="stylesheet" href="/assets/frontend/css/owl.theme.default.min.css">
      <!--Animate css-->
      <link rel="stylesheet" href="/assets/frontend/css/animate.min.css">
      <!--Select2 css-->
      <link rel="stylesheet" href="/assets/frontend/css/select2.min.css">
      <!--Slicknav css-->
      <link rel="stylesheet" href="/assets/frontend/css/slicknav.min.css">
      <!--Bootstrap-Datepicker css-->
      <link rel="stylesheet" href="/assets/frontend/css/bootstrap-datepicker.min.css">
      <!--Jquery UI css-->
      <link rel="stylesheet" href="/assets/frontend/css/jquery-ui.min.css">
      <!--Perfect-Scrollbar css-->
      <link rel="stylesheet" href="/assets/frontend/css/perfect-scrollbar.min.css">
      <!--Site Main Style css-->
      <link rel="stylesheet" href="/assets/frontend/css/style.css">
      <!--Responsive css-->
      <link rel="stylesheet" href="/assets/frontend/css/responsive.css">
	<style type="text/css">
	
	</style>

	@yield('styles')

</head>



<body class="">
  <!-- Header Area Start -->
      <header class="visasbuzz-header-area stick-top forsticky">
         <div class="menu-animation">
            <div class="container">
               <div class="row">
                  <div class="col-lg-2">
                     <div class="site-logo">
                        <a href="/">
                        <img src="/assets/frontend/img/VisasBuzz copy.png" alt="visasbuzz" class="non-stick-logo" />
                        <img src="/assets/frontend/img/VisasBuzz copy.png" alt="visasbuzz" class="stick-logo" />
                        </a>
                     </div>
                     <!-- Responsive Menu Start -->
                     <div class="visasbuzz-responsive-menu"></div>
                     <!-- Responsive Menu Start -->
                  </div>
                  <div class="col-lg-6 cen">
                     <div class="header-menu">
                        <nav id="navigation">
                           <ul id="visasbuzz_navigation">
                              <li class="active">
                                 <a href="/">home</a>
                                
                              </li>
                              <li class=" has-children">
                                 <a href="#">for candidates</a>
                                 <ul>

                                    <li><a href="{{route('front.jobs')}}">browse jobs</a></li>
                                    {{-- <li><a href="browse-companies.html">browse companies</a></li>
                                    <li><a href="single-candidates.html">candidates details</a></li>
                                    <li><a href="submit-resume.html">submit resume</a></li>
                                    <li class="has-inner-child">
                                       <a href="#">candidate dashboard</a>
                                       <ul>
                                          <li><a href="candidate-dashboard.html">Candidate dashboard</a></li>
                                          <li><a href="candidate-profile.html">Candidate profile</a></li>
                                          <li><a href="message.html">messages</a></li>
                                          <li><a href="manage-jobs.html">manage jobs</a></li>
                                          <li><a href="candidate-earnings.html">earnings</a></li>
                                          <li><a href="change-password.html">change password</a></li>
                                       </ul>
                                    </li> --}}
                                 </ul>
                              </li>
                              <li class="has-children">
                                 <a href="#">for employers</a>
                                 <ul>
                                    <li><a href="browse-candidates.html">Browse Candidates</a></li>
                                    <li><a href="single-company.html">company details</a></li>
                                    <li><a href="post-job.html">Post A job</a></li>
                                    <li class="has-inner-child">
                                       <a href="#">employer dashboard</a>
                                       <ul>
                                          <li><a href="employer-dashboard.html">employer dashboard</a></li>
                                          <li><a href="company-profile.html">company profile</a></li>
                                          <li><a href="message.html">messages</a></li>
                                          <li><a href="manage-candidates.html">manage candidates</a></li>
                                          <li><a href="transaction.html">transaction</a></li>
                                          <li><a href="change-password.html">change password</a></li>
                                       </ul>
                                    </li>
                                 </ul>
                              </li>
                              <li class="has-children">
                                 <a href="#">pages</a>
                                 <ul>
                                    <li><a href="about.html">About us</a></li>
                                    <li class="has-inner-child">
                                       <a href="#">blog</a>
                                       <ul>
                                          <li><a href="blog.html">blog</a></li>
                                          <li><a href="single-blog.html">single blog</a></li>
                                       </ul>
                                    </li>
                                    <li><a href="job-page.html">job page</a></li>
                                    <li><a href="login.html">login</a></li>
                                    <li><a href="register.html">register</a></li>
                                    <li><a href="contact.html">contact us</a></li>
                                 </ul>
                              </li>
                           </ul>
                        </nav>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="header-right-menu">
                        <ul>
                           <li><a href="post-job.html" class="post-jobs">Post jobs</a></li>
                           <li><a href="register.html"><i class="fa fa-user"></i>sign up</a></li>
                           <li><a href="login.html"><i class="fa fa-lock"></i>login</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- Header Area End -->
 
	
	
	
	<div class='clearfix'></div>
	
@yield('content')

{{-- @if(intval(request()->page) <= 1) 
	@if(isset($meta_info['content']) && $meta_info['content'] != '')
	<div class="seo-content">
	    <div class="container">
	        <div class="row">
	            <div class="col-xs-12 pad0 content content-hidden">
            	    {!! $meta_info['content'] !!}
        	    </div>
    	    </div>
    	    
    	    @if(isset($showmore) && $showmore == 'yes')
    
        	<button class="btn btn-primary btn-toggle" id="toggleBtn">Show More</button>
    
    	    @endif
	    </div>
	</div>
    	
    @endif

@endif
	 --}}
    <!-- Footer Area Start -->
      <footer class="visasbuzz-footer-area">
         <div class="footer-top section_50">
            <div class="container">
               <div class="row">
                  <div class="col-lg-3 col-md-6">
                     <div class="single-footer-widget">
                        <div class="footer-logo">
                           <a href="/">
                           <img src="/assets/frontend/img/VisasBuzz copy.png" alt="visasbuzz logo" />
                           </a>
                        </div>
                        <p>Aliquip exa consequat dui aut repahend vouptate elit cilum fugiat pariatur lorem dolor cit amet consecter adipisic elit sea vena eiusmod nulla</p>
                        <ul class="footer-social">
                           <li><a href="#" class="fb"><i class="fa fa-facebook"></i></a></li>
                           <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                           <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                           <li><a href="#" class="gp"><i class="fa fa-google-plus"></i></a></li>
                           <li><a href="#" class="skype"><i class="fa fa-skype"></i></a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                     <div class="single-footer-widget">
                        <h3>recent post</h3>
                        <div class="latest-post-footer clearfix">
                           <div class="latest-post-footer-left">
                              <img src="assets/frontend/img/footer-post-2.jpg" alt="post" />
                           </div>
                           <div class="latest-post-footer-right">
                              <h4><a href="#">Website design trends for 2018</a></h4>
                              <p>January 14 - 2018</p>
                           </div>
                        </div>
                        <div class="latest-post-footer clearfix">
                           <div class="latest-post-footer-left">
                              <img src="assets/frontend/img/footer-post-3.jpg" alt="post" />
                           </div>
                           <div class="latest-post-footer-right">
                              <h4><a href="#">UI experts and modern designs</a></h4>
                              <p>January 12 - 2018</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                     <div class="single-footer-widget">
                        <h3>main links</h3>
                        <ul>
                           <li><a href="#"><i class="fa fa-angle-double-right "></i> About visasbuzz</a></li>
                           <li><a href="#"><i class="fa fa-angle-double-right "></i> Delivery Information</a></li>
                           <li><a href="#"><i class="fa fa-angle-double-right "></i> Terms & Conditions</a></li>
                           <li><a href="#"><i class="fa fa-angle-double-right "></i> Customer support</a></li>
                           <li><a href="#"><i class="fa fa-angle-double-right "></i> Contact with an expert</a></li>
                           <li><a href="#"><i class="fa fa-angle-double-right "></i> community updates</a></li>
                           <li><a href="#"><i class="fa fa-angle-double-right "></i> upcoming updates</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                     <div class="single-footer-widget footer-contact">
                        <h3>Contact Info</h3>
                        <p><i class="fa fa-map-marker"></i> 4257 Street, SunnyVale, USA </p>
                        <p><i class="fa fa-phone"></i> 012-3456-789</p>
                        <p><i class="fa fa-envelope-o"></i> info@visasbuzz.com</p>
                        <p><i class="fa fa-envelope-o"></i> info@visasbuzz.com</p>
                        <p><i class="fa fa-fax"></i> 112-3456-7898</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="footer-copyright">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="copyright-left">
                        <p>Copyrights visasbuzz 2025. All Rights Reserved</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- Footer Area End -->
      
 


	
      
      
      




   <!--Jquery js-->
      <script src="/assets/frontend/js/jquery-3.6.0.min.js"></script>
      <!--Bootstrap js-->
      <script src="/assets/frontend/js/bootstrap.bundle.min.js"></script>
      <!--Bootstrap Datepicker js-->
      <script src="/assets/frontend/js/bootstrap-datepicker.min.js"></script>
      <!--Perfect Scrollbar js-->
      <script src="/assets/frontend/js/jquery-perfect-scrollbar.min.js"></script>
      <!--Owl-Carousel js-->
      <script src="/assets/frontend/js/owl.carousel.min.js"></script>
      <!--SlickNav js-->
      <script src="/assets/frontend/js/jquery.slicknav.min.js"></script>
      <!--Magnific js-->
      <script src="/assets/frontend/js/jquery.magnific-popup.min.js"></script>
      <!--Select2 js-->
      <script src="/assets/frontend/js/select2.min.js"></script>
      <!--jquery-ui js-->
      <script src="/assets/frontend/js/jquery-ui.min.js"></script>
      <!--Custom-Scrollbar js-->
      <script src="/assets/frontend/js/custom-scrollbar.js"></script>
      <!--Jarallax js-->
      <script src="/assets/frontend/js/jarallax.min.js"></script>
      <script src="/assets/frontend/js/jarallax-video.min.js"></script>
      <!--Main js-->
      <script src="/assets/frontend/js/main.js"></script>
	
	
	

	




   
@yield('scripts')
    
    @if(config('global.footer_scripts') != '')
    {!! config('global.footer_scripts') !!}
    @endif	
</body>

</html>



