@extends('frontend.template',['showmore'=>'yes'])

@section('styles')



@endsection

@section('content')

 <!--Home Video Start-->
      <section class="home-video-banner parallax" data-jarallax-video="https://www.youtube.com/watch?v=dk9uNWPP7EA">
         <div class="banner-area">
            <div class="banner-caption container">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12 col-sm-12 content-home">
                        <div class="banner-welcome">
                           <h4>Over <span>100,000+</span> Testing</h4>
                           {{-- <h4>Over <span>100,000+</span> jobs are waiting for you</h4> --}}
                           <form>
                              <div class="video-banner-input">
                                 <input type="text" placeholder="Job Title, Keywords, or Phrase">
                              </div>
                              <div class="video-banner-input">
                                 <input type="text" placeholder="City, State or ZIP">
                              </div>
                              <div class="video-banner-input">
                                 <button type="submit"><i class="fa fa-search"></i></button>
                              </div>
                           </form>
                           <div class="top-search-cat">
                              <p>Top Search :</p>
                              <a href="#">Design</a>
                              <a href="#">Analysis</a>
                              <a href="#">training</a>
                              <a href="#">Music</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--Home Video End-->
       
       
       <section class="bg-darks content-visibility-auto">
    <div class="container">
        <div class="row py-5">
            <div class="col-12">
                <h3 class="text-center mb-5 text-hg">Find Jobs by Location</h3>
                <div class="row g-4">
                    <!-- UAE -->
                     <div class="col-sm-3">
                        <a href="/uae/jobs" title="Jobs in UAE" class="card border-0 shadow-sm text-decoration-none">
                            <div class="card-body d-flex align-items-center">
                                <div class="icon icon-2x me-3">
                                   <img src="/assets/frontend/img/united-arab-emirates.png">
                                </div>
                                <div>
                                    <h5 class="mb-1 text-link">UAE</h5>
                                    <span class="text-sm text-muted">(2,774)</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Saudi Arabia -->
                 <div class="col-sm-3">
                        <a href="/saudi-arabia/jobs" title="Jobs in Saudi Arabia" class="card border-0 shadow-sm text-decoration-none">
                            <div class="card-body d-flex align-items-center">
                                <div class="icon icon-2x me-3">
                                 <img src="/assets/frontend/img/flag.png">
                                </div>
                                <div>
                                    <h5 class="mb-1 text-link">Saudi Arabia</h5>
                                    <span class="text-sm text-muted">(1,357)</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Qatar -->
                    <div class="col-sm-3">
                        <a href="/qatar/jobs" title="Jobs in Qatar" class="card border-0 shadow-sm text-decoration-none">
                            <div class="card-body d-flex align-items-center">
                                <div class="icon icon-2x me-3">
                                   <img src="/assets/frontend/img/qatar.png">
                                </div>
                                <div>
                                    <h5 class="mb-1 text-link">Qatar</h5>
                                    <span class="text-sm text-muted">(280)</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Kuwait -->
                    <div class="col-sm-3">
                        <a href="/kuwait/jobs" title="Jobs in Kuwait" class="card border-0 shadow-sm text-decoration-none">
                            <div class="card-body d-flex align-items-center">
                                <div class="icon icon-2x me-3">
                                    <img src="/assets/frontend/img/kuwait.png">
                                </div>
                                <div>
                                    <h5 class="mb-1 text-link">Kuwait</h5>
                                    <span class="text-sm text-muted">(121)</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Oman -->
                    <div class="col-sm-3">
                        <a href="/oman/jobs" title="Jobs in Oman" class="card border-0 shadow-sm text-decoration-none">
                            <div class="card-body d-flex align-items-center">
                                <div class="icon icon-2x me-3">
                                    <img src="/assets/frontend/img/flag (1).png">
                                </div>
                                <div>
                                    <h5 class="mb-1 text-link">Oman</h5>
                                    <span class="text-sm text-muted">(180)</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Bahrain -->
                   <div class="col-sm-3">
                        <a href="/bahrain/jobs" title="Jobs in Bahrain" class="card border-0 shadow-sm text-decoration-none">
                            <div class="card-body d-flex align-items-center">
                                <div class="icon icon-2x me-3">
                                  <img src="/assets/frontend/img/bahrain.png">
                                </div>
                                <div>
                                    <h5 class="mb-1 text-link">Bahrain</h5>
                                    <span class="text-sm text-muted">(131)</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Egypt -->
                  <div class="col-sm-3">
                        <a href="/egypt/jobs" title="Jobs in Egypt" class="card border-0 shadow-sm text-decoration-none">
                            <div class="card-body d-flex align-items-center">
                                <div class="icon icon-2x me-3">
                                   <img src="/assets/frontend/img/flag (2).png">
                                </div>
                                <div>
                                    <h5 class="mb-1 text-link">Egypt</h5>
                                    <span class="text-sm text-muted">(523)</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- More Countries -->
                  <div class="col-sm-3">
                        <a href="/jobs/country" title="View all countries" class="card border-0 shadow-sm text-decoration-none">
                            <div class="card-body text-center">
                                <h5 class="text-primary mb-0">More Countries</h5>
                                <i class="fa fa-angle-double-right text-primary"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



       
      <!-- Categories Area Start -->
      <section class="visasbuzz-categories-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="site-heading">
                     <h2>top Trending <span>Categories</span></h2>
                     <p>A better career is out there. We'll help you find it. We're your first step to becoming everything you want to be.</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-3 col-md-6 col-sm-6">
                  <a href="#" class="single-category-holder account_cat">
                     <div class="category-holder-icon">
                        <i class="fa fa-briefcase"></i>
                     </div>
                     <div class="category-holder-text">
                        <h3>Accounting & Finance</h3>
                     </div>
                     <img src="assets/frontend/img/account_cat.jpg" alt="category" />
                  </a>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6">
                  <a href="#" class="single-category-holder design_cat">
                     <div class="category-holder-icon">
                        <i class="fa fa-pencil-square-o"></i>
                     </div>
                     <div class="category-holder-text">
                        <h3>Design, Art & Multimedia</h3>
                     </div>
                     <img src="assets/frontend/img/design_art.jpg" alt="category" />
                  </a>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6">
                  <a href="#" class="single-category-holder restaurant_cat">
                     <div class="category-holder-icon">
                        <i class="fa fa-cutlery"></i>
                     </div>
                     <div class="category-holder-text">
                        <h3>Restaurant / Food Service</h3>
                     </div>
                     <img src="assets/frontend/img/restaurent.jpg" alt="category" />
                  </a>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6">
                  <a href="#" class="single-category-holder tech_cat">
                     <div class="category-holder-icon">
                        <i class="fa fa-code"></i>
                     </div>
                     <div class="category-holder-text">
                        <h3>Programming & Tech</h3>
                     </div>
                     <img src="assets/frontend/img/programing_cat.jpg" alt="category" />
                  </a>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-3 col-md-6 col-sm-6">
                  <a href="#" class="single-category-holder data_cat">
                     <div class="category-holder-icon">
                        <i class="fa fa-bar-chart"></i>
                     </div>
                     <div class="category-holder-text">
                        <h3>Data Science & Analitycs</h3>
                     </div>
                     <img src="assets/frontend/img/data_cat.png" alt="category" />
                  </a>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6">
                  <a href="#" class="single-category-holder writing_cat">
                     <div class="category-holder-icon">
                        <i class="fa fa-pencil"></i>
                     </div>
                     <div class="category-holder-text">
                        <h3>Writing / Translations</h3>
                     </div>
                     <img src="assets/frontend/img/writing_cat.jpg" alt="category" />
                  </a>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6">
                  <a href="#" class="single-category-holder edu_cat">
                     <div class="category-holder-icon">
                        <i class="fa fa-graduation-cap"></i>
                     </div>
                     <div class="category-holder-text">
                        <h3>Education / Training</h3>
                     </div>
                     <img src="assets/frontend/img/edu_cat.jpg" alt="category" />
                  </a>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6">
                  <a href="#" class="single-category-holder sale_cat">
                     <div class="category-holder-icon">
                        <i class="fa fa-bullhorn"></i>
                     </div>
                     <div class="category-holder-text">
                        <h3>sales / marketing</h3>
                     </div>
                     <img src="assets/frontend/img/sale_cat.png" alt="category" />
                  </a>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="load-more">
                     <a href="#" class="visasbuzz-btn">browse all categories</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Categories Area End -->
       
   
      <!-- Job Tab Area Start -->
      <section class="visasbuzz-job-tab-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="site-heading">
                     <h2>Companies & <span>job offers</span></h2>
                     <p>It's easy. Simply post a job you need completed and receive competitive bids from freelancers within minutes</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class=" job-tab">
                     <ul class="nav nav-pills job-tab-switch" id="pills-tab" role="tablist">
                        <li class="nav-item">
                           <a class="nav-link active" id="pills-companies-tab" data-bs-toggle="pill" href="#pills-companies" role="tab" aria-controls="pills-companies" aria-selected="true">top Companies</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" id="pills-job-tab" data-bs-toggle="pill" href="#pills-job" role="tab" aria-controls="pills-job" aria-selected="false">job openning</a>
                        </li>
                     </ul>
                  </div>
                  <div class="tab-content" id="pills-tabContent">
                     <div class="tab-pane fade show active" id="pills-companies" role="tabpanel" aria-labelledby="pills-companies-tab">
                        <div class="top-company-tab">
                           <ul>
                              <li>
                                 <div class="top-company-list">
                                    <div class="company-list-logo">
                                       <a href="#">
                                       <img src="assets/frontend/img/company-logo-4.png" alt="company list 1" />
                                       </a>
                                    </div>
                                    <div class="company-list-details">
                                       <h3><a href="#">jamulai - consulting & finance Co.</a></h3>
                                       <p class="company-state"><i class="fa fa-map-marker"></i> Chicago, Michigan</p>
                                       <p class="open-icon"><i class="fa fa-briefcase"></i>32 open position</p>
                                       <p class="varify"><i class="fa fa-check"></i>Verified</p>
                                       <p class="rating-company">4.9</p>
                                    </div>
                                    <div class="company-list-btn">
                                       <a href="#" class="visasbuzz-btn">view profile</a>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="top-company-list">
                                    <div class="company-list-logo">
                                       <a href="#">
                                       <img src="assets/frontend/img/company-logo-2.png" alt="company list 1" />
                                       </a>
                                    </div>
                                    <div class="company-list-details">
                                       <h3><a href="#">Buildo - construction Co.</a></h3>
                                       <p class="company-state"><i class="fa fa-map-marker"></i> Chicago, Michigan</p>
                                       <p class="open-icon"><i class="fa fa-briefcase"></i>32 open position</p>
                                       <p class="varify"><i class="fa fa-check"></i>Verified</p>
                                       <p class="rating-company">4.2</p>
                                    </div>
                                    <div class="company-list-btn">
                                       <a href="#" class="visasbuzz-btn">view profile</a>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="top-company-list">
                                    <div class="company-list-logo">
                                       <a href="#">
                                       <img src="assets/frontend/img/company-logo-3.png" alt="company list 1" />
                                       </a>
                                    </div>
                                    <div class="company-list-details">
                                       <h3><a href="#">palms - school & college.</a></h3>
                                       <p class="company-state"><i class="fa fa-map-marker"></i> Chicago, Michigan</p>
                                       <p class="open-icon"><i class="fa fa-briefcase"></i>32 open position</p>
                                       <p class="varify"><i class="fa fa-check"></i>Verified</p>
                                       <p class="rating-company">4.6</p>
                                    </div>
                                    <div class="company-list-btn">
                                       <a href="#" class="visasbuzz-btn">view profile</a>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="top-company-list">
                                    <div class="company-list-logo">
                                       <a href="#">
                                       <img src="assets/frontend/img/company-logo-1.png" alt="company list 1" />
                                       </a>
                                    </div>
                                    <div class="company-list-details">
                                       <h3><a href="#">finance - consulting & business Co.</a></h3>
                                       <p class="company-state"><i class="fa fa-map-marker"></i> Chicago, Michigan</p>
                                       <p class="open-icon"><i class="fa fa-briefcase"></i>32 open position</p>
                                       <p class="varify"><i class="fa fa-check"></i>Verified</p>
                                       <p class="rating-company">4.9</p>
                                    </div>
                                    <div class="company-list-btn">
                                       <a href="#" class="visasbuzz-btn">view profile</a>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="pills-job" role="tabpanel" aria-labelledby="pills-job-tab">
                        <div class="top-company-tab">
                           <ul>
                              <li>
                                 <div class="top-company-list">
                                    <div class="company-list-logo">
                                       <a href="#">
                                       <img src="assets/frontend/img/company-logo-1.png" alt="company list 1" />
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
                                       <a href="#" class="visasbuzz-btn">apply now</a>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="top-company-list">
                                    <div class="company-list-logo">
                                       <a href="#">
                                       <img src="assets/frontend/img/company-logo-4.png" alt="company list 1" />
                                       </a>
                                    </div>
                                    <div class="company-list-details">
                                       <h3><a href="#">C Developer (Senior) C .Net</a></h3>
                                       <p class="company-state"><i class="fa fa-map-marker"></i> Chicago, Michigan</p>
                                       <p class="open-icon"><i class="fa fa-clock-o"></i>2 minutes ago</p>
                                       <p class="varify"><i class="fa fa-check"></i>Fixed price : $800-$1200</p>
                                       <p class="rating-company">3.1</p>
                                    </div>
                                    <div class="company-list-btn">
                                       <a href="#" class="visasbuzz-btn">apply now</a>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="top-company-list">
                                    <div class="company-list-logo">
                                       <a href="#">
                                       <img src="assets/frontend/img/company-logo-3.png" alt="company list 1" />
                                       </a>
                                    </div>
                                    <div class="company-list-details">
                                       <h3><a href="#">Asst. Teacher</a></h3>
                                       <p class="company-state"><i class="fa fa-map-marker"></i> Chicago, Michigan</p>
                                       <p class="open-icon"><i class="fa fa-clock-o"></i>3 minutes ago</p>
                                       <p class="varify"><i class="fa fa-check"></i>Fixed price : $800-$1200</p>
                                       <p class="rating-company">4.3</p>
                                    </div>
                                    <div class="company-list-btn">
                                       <a href="#" class="visasbuzz-btn">apply now</a>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="top-company-list">
                                    <div class="company-list-logo">
                                       <a href="#">
                                       <img src="assets/frontend/img/company-logo-2.png" alt="company list 1" />
                                       </a>
                                    </div>
                                    <div class="company-list-details">
                                       <h3><a href="#">civil engineer</a></h3>
                                       <p class="company-state"><i class="fa fa-map-marker"></i> Chicago, Michigan</p>
                                       <p class="open-icon"><i class="fa fa-clock-o"></i>30 minutes ago</p>
                                       <p class="varify"><i class="fa fa-check"></i>Fixed price : $2000-$2500</p>
                                       <p class="rating-company">3.7</p>
                                    </div>
                                    <div class="company-list-btn">
                                       <a href="#" class="visasbuzz-btn">apply now</a>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="load-more">
                     <a href="#" class="visasbuzz-btn">browse more listing</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Job Tab Area End -->
       
       
      <!-- Video Area Start -->
      <section class="visasbuzz-video-area section_100">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="video-container">
                     <h2>Hire experts today for <br> any job, any time.</h2>
                     <div class="video-btn">
                        <a class="popup-youtube" href="https://www.youtube.com/watch?v=k-R6AFn9-ek">
                        <i class="fa fa-play"></i>
                        how it works
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Video Area End -->
       
       
      <!-- How Works Area Start -->
      <section class="how-works-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="site-heading">
                     <h2>how it <span>works</span></h2>
                     <p>It's easy. Simply post a job you need completed and receive competitive bids from freelancers within minutes</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4">
                  <div class="how-works-box box-1">
                     <img src="assets/frontend/img/arrow-right-top.png" alt="works" />
                     <div class="works-box-icon">
                        <i class="fa fa-user"></i>
                     </div>
                     <div class="works-box-text">
                        <p>sign up</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="how-works-box box-2">
                     <img src="assets/frontend/img/arrow-right-bottom.png" alt="works" />
                     <div class="works-box-icon">
                        <i class="fa fa-gavel"></i>
                     </div>
                     <div class="works-box-text">
                        <p>post job</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="how-works-box box-3">
                     <div class="works-box-icon">
                        <i class="fa fa-thumbs-up"></i>
                     </div>
                     <div class="works-box-text">
                        <p>choose expert</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- How Works Area End -->
       


@endsection