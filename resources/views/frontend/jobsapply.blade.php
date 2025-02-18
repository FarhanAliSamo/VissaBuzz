@extends('frontend.template')


@section('styles')
	


@endsection

@section('content')	

 <!-- Single Candidate Start -->
      <section class="single-candidate-page section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-9 col-lg-6">
                  <div class="single-candidate-box">
                     <div class="single-candidate-img bg-white d-flex align-items-center p-2 justify-content-center rounded">
                        <img src="/assets/admin/images/logo-full.png" alt="single candidate" />
                     </div>
                     <div class="single-candidate-box-right">
                        <h4>{{ $data->job_title }}</h4>
                         
                        {{-- <img src="/assets/frontend/img/pl.svg" alt="region" /> --}}
                        <p>{{$data->industry->name}}</p>
                        <div class="job-details-meta">
                           {{-- <p><i class="fa fa-file-text"></i> Applications 1</p> --}}
                           <p><i class="fa fa-calendar"></i> {{ $data->created_at->format('F j, Y') }}</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-3 col-lg-6">
                  <div class="single-candidate-action">
                     <a href="#" class="candidate-contact"><i class="fa fa-star"></i>Bookmarks</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Single Candidate End -->
       
       
      <!-- Single Candidate Bottom Start -->
      <section class="single-candidate-bottom-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-10 col-lg-9 mx-auto">
                  <div class="single-candidate-bottom-left">
                     <div class="single-candidate-widget">
                        <h3>job Description / Role</h3>
                        
                        <p class="my-4"> <b>Employement : </b> {{$data->jobType->name}}</p>
                        
                        <p>{!! nl2br(e($data->job_description)) !!}</p>
                        
                        <p class="mt-4"> <b>Requirements : </b></p>
                        <p>{!! nl2br(e($data->candidate_profile)) !!}</p>
 
                     </div>
                     {{-- <div class="single-candidate-widget job-required">
                        <h3>Skills, and Abilities</h3>
                        <ul class="company-desc-list">
                           <li><i class="fa fa-check"></i> Ability to write code – HTML & CSS (SCSS flavor of SASS preferred when writing CSS)</li>
                           <li><i class="fa fa-check"></i>Proficient in Photoshop, Illustrator, bonus points for familiarity with Sketch (Sketch is our preferred concepting)</li>
                           <li><i class="fa fa-check"></i>Cross-browser and platform testing as standard practice</li>
                           <li><i class="fa fa-check"></i>Experience using Invision a plus</li>
                           <li><i class="fa fa-check"></i>Experience in video production a plus or, at a minimum, a willingness to learn</li>
                        </ul>
                     </div>
                     <div class="single-candidate-widget clearfix">
                        <h3>Challenges & Benifits</h3>
                        <p>Etiam quis interdum felis, at pellentesque metus. Morbi eget congue lectus. Donec eleifend ultricies urna et euismod. Sed consectetur tellus eget odio aliquet, vel vestibulum tellus sollicitudin. Morbi maximus metus eu eros tincidunt, vitae mollis ante imperdiet. Nulla imperdiet at mauris ut posuere.</p>
                        <p>Donec accumsan auctor iaculis. Nullam non tortor massa. Proin ligula leo, hendrerit quis tincidunt a, sodales eget ligula. Aenean et est tristique, dictum lorem vel, porttitor urna.</p>
                        <p>Suspendisse gravida elementum lacus, a malesuada tortor sollicitudin ut. Donec pharetra metus lectus, ut eleifend eros sollicitudin et. Ut at lobortis dolor, eget commodo tortor. Curabitur bibendum consequat neque a tincidunt. In in euismod quam. Proin in egestas eros. Cum sociis </p>
                     </div> --}}
                     <div class="single-candidate-widget clearfix">
                        <h3>share this post</h3>
                        <ul class="share-job">
                           <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                           <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                           <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                           <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                     </div>
                     <div class="single-candidate-widget">
                        <h3>Similar Jobs</h3>
                        <div class="sidebar-list-single">
                           <div class="top-company-list">
                              <div class="company-list-logo">
                                 <a href="#">
                                 <img src="/assets/frontend/img/company-logo-2.png" alt="company list 1">
                                 </a>
                              </div>
                              <div class="company-list-details">
                                 <h3><a href="#">Regional Sales Manager</a></h3>
                                 <p class="company-state"><i class="fa fa-map-marker"></i> Chicago, Michigan</p>
                                 <p class="open-icon"><i class="fa fa-clock-o"></i>2 minutes ago</p>
                                 <p class="varify"><i class="fa fa-check"></i>Fixed price : $1200-$2000</p>
                                 <p class="rating-company">4.1</p>
                              </div>
                              <div class="company-list-btn">
                                 <a href="#" class="visasbuzz-btn">bid now</a>
                              </div>
                           </div>
                        </div>
                        <div class="sidebar-list-single">
                           <div class="top-company-list">
                              <div class="company-list-logo">
                                 <a href="#">
                                 <img src="/assets/frontend/img/company-logo-3.png" alt="company list 1">
                                 </a>
                              </div>
                              <div class="company-list-details">
                                 <h3><a href="#">Asst. Teacher</a></h3>
                                 <p class="company-state"><i class="fa fa-map-marker"></i> Chicago, Michigan</p>
                                 <p class="open-icon"><i class="fa fa-clock-o"></i>2 minutes ago</p>
                                 <p class="varify"><i class="fa fa-check"></i>Fixed price : $800-$1200</p>
                                 <p class="rating-company">4.2</p>
                              </div>
                              <div class="company-list-btn">
                                 <a href="#" class="visasbuzz-btn">bid now</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-10 col-lg-3 mx-auto">
                  <div class="single-candidate-bottom-right">
                     <div class="single-candidate-widget-2">
                        <a href="#" class="visasbuzz-btn-2">
                        <i class="fa fa-paper-plane-o"></i>
                        Apply Now
                        </a>
                     </div>
                     <div class="single-candidate-widget-2">
                        <h3>Job overview</h3>
                        <ul class="job-overview">
                           
                           @if($data->salary_from && $data->salary_to)
                              <li>
                                 <h4><i class="fa fa-briefcase"></i> Offerd Salary</h4>
                                 <p>{{$data->currency}} {{$data->salary_from}} - {{$data->currency}} {{$data->salary_to}}</p>
                              </li>
                           @endif

                           @if($data->country && $data?->country->name)
                              <li>
                                 <h4><i class="fa fa-map-marker"></i> Location</h4>
                                 <p>{{$data->city->name}}, {{$data->country->name}}</p>
                              </li>
                           @endif

                           <li>
                              <h4><i class="fa fa-thumb-tack"></i> Job Type</h4>
                              <p>{{$data->jobType->name}}</p>
                           </li>

                           <li>
                              <h4><i class="fa fa-thumb-tack"></i> Location</h4>
                              <p>{{$data->location}}</p>
                           </li>

                           @if($data->seniority && $data?->seniority->name)
                              <li>
                                 <h4><i class="fa fa-thumb-tack"></i>Seniority</h4>
                                 <p>{{$data->seniority->name}}</p>
                              </li>
                           @endif

                           <li>
                              <h4><i class="fa fa-thumb-tack"></i>Industry</h4>
                              <p>{{$data->industry->name}}</p>
                           </li>

                           @if($data->experience && $data?->experience->name)
                              <li>
                                 <h4><i class="fa fa-thumb-tack"></i>Experience</h4>
                                 <p>{{$data->experience->name}}</p>
                              </li>
                           @endif

                           <li>
                              <h4><i class="fa fa-clock-o"></i> Date Posted</h4>
                              <p>{{ $data->created_at->format('F j, Y') }}</p>
                           </li>
                        </ul>
                     </div>
                     <div class="single-candidate-widget-2">
                        <h3>Quick Contacts</h3>
                        <form>
                           <p>
                              <input type="text" placeholder="Your Name">
                           </p>
                           <p>
                              <input type="email" placeholder="Your Email Address">
                           </p>
                           <p>
                              <textarea placeholder="Write here your message"></textarea>
                           </p>
                           <p>
                              <button type="submit">Send Message</button>
                           </p>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Single Candidate Bottom End -->



	
@endsection