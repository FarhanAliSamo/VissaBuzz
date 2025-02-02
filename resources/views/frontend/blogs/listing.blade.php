@extends('frontend.template')

@section('styles')
	
<style type="text/css">




</style>


<!-- Add jQuery library -->
<!--<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>-->

<!-- Add mousewheel plugin (this is optional) -->
<!--<script type="text/javascript" src="/assets/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>-->


@endsection

@section('content')	

<div class="bannermain innerbanner">
		<div class="banner_overlay"></div>
			@if(isset($meta_info['featured_banners']) )

    		<img src="/uploads/images/banners/{{$meta_info['featured_banners']}}" alt="{{$basic_details->name}}">
		
	    @else
		
		<img src="{{get_thumb_url_400('banners',"/".$basic_details->featured_banner,1)}}" alt="{{$basic_details->name}}">
		
		@endif
		<div class="innercaption">
			<div class="container">
				<h2>Blogs</h2>
			</div>
		</div>
	</div>
		<section class="bread-crum">
        
        <div class="container">
        
            <div class="bread_crumb">
    	            <a href="/">Home</a> > 
    	            <a href="/blogs">Blogs</a>
    	    </div>
	    
	    </div>
         
    </section>
	<section class="blogs-section">
	<div class="container">
	    <div class="row">
	        <div class="col-xs-12 col-12" style="margin-bottom: 20px;">
	         
	        </div>
	    
	            
	            
	             @foreach($data['blogs'] as $key=>$value)
         <div class="col-md-4 col-sm-4 col-xs-12 col-lg-4">
            <a href="{{route('blogs.view',$value->slug)}}" >
               <div class="blog-bg-color">
                  <div class="main-blogs-">
                     <div class="main-blogs-1" style="background:url({{get_blogthumb_url_500('blogs/',$value->featured_image,1)}}); height: 280px; border-radius:unset; background-size: cover; background-position: top center; background-repeat: no-repeat;">
                     </div>
                  </div>
                         <p class="date-formatt">{{$value->created_at->format('j')}} <br> {{$value->created_at->format('M')}}</p>
                  <div class="blo-til">
            <a href="{{route('blogs.view',$value->slug)}}" class="blo-titles"> 
            <h6>News</h6>
            <h4>{{$value->title}}</h4>
     
            </a>
            </div>
            </div> 
            </a>
         </div>
            
               @endforeach
	        
	        <div class="col-xs-12">
	            {{$data['blogs']->links()}}
	        </div>
	    </div>
	</div>
	</section>
	
	
@endsection


@section('scripts')

<script type="text/javascript" src="/assets/fancybox/source/jquery.fancybox.pack.js?v=2.1.7"></script>

<script type="text/javascript" src="/assets/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="/assets/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

<link rel="stylesheet" href="/assets/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
<script type="text/javascript" src="/assets/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>



<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});
</script>

@endsection