@extends('frontend.template')

@section('styles')
@endsection

@section('content')
    <!-- Breadcromb Area Start -->
    <section class="visasbuzz-breadcromb-area">
        <div class="breadcromb-top section_100">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcromb-box">
                            <h3>Browse Jobs</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcromb-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcromb-box-pagin">
                            <ul>
                                <li><a href="#">home</a></li>
                                <li><a href="#">candidates</a></li>
                                <li class="active-breadcromb"><a href="#">browse jobs</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcromb Area End -->

    <!-- Top Job Area Start -->
    <section class="visasbuzz-top-job-area browse-page section_70">
        <div class="container">
            <div class="row">


                <div class="col-md-10 col-lg-3 mx-auto">
                    <div class="job-grid-sidebar">
                     
                        <!-- Single Job Sidebar Start -->
                        <div class="single-job-sidebar sidebar-type">
                           <h3>By Country</h3>
                           <div class="job-sidebar-box">
                               <ul>

                                   <li class="checkbox">
                                       <input class="checkbox-spin" type="checkbox" id="UAE" />
                                       <label for="UAE"><span></span>UAE</label>
                                   </li>
                                   
                                   <li class="checkbox">
                                       <input class="checkbox-spin" type="checkbox" id="DUBAI" />
                                       <label for="DUBAI"><span></span>DUBAI</label>
                                   </li>

                                   <li class="checkbox">
                                       <input class="checkbox-spin" type="checkbox" id="QATAR" />
                                       <label for="QATAR"><span></span>QATAR</label>
                                   </li>

                                   <li class="checkbox">
                                       <input class="checkbox-spin" type="checkbox" id="OMAN" />
                                       <label for="OMAN"><span></span>OMAN</label>
                                   </li>
 
                               </ul>
                           </div>
                       </div>


                        <div class="single-job-sidebar sidebar-type">
                           <h3>By City</h3>
                           <div class="job-sidebar-box">
                               <ul>

                                   <li class="checkbox">
                                       <input class="checkbox-spin" type="checkbox" id="UAE" />
                                       <label for="UAE"><span></span>UAE</label>
                                   </li>

                                   <li class="checkbox">
                                       <input class="checkbox-spin" type="checkbox" id="DUBAI" />
                                       <label for="DUBAI"><span></span>DUBAI</label>
                                   </li>

                                   <li class="checkbox">
                                       <input class="checkbox-spin" type="checkbox" id="QATAR" />
                                       <label for="QATAR"><span></span>QATAR</label>
                                   </li>

                                   <li class="checkbox">
                                       <input class="checkbox-spin" type="checkbox" id="OMAN" />
                                       <label for="OMAN"><span></span>OMAN</label>
                                   </li>
 
                               </ul>
                           </div>
                       </div>
                       <!-- Single Job Sidebar End -->
 
                        <!-- Single Job Sidebar Start -->
                        <div class="single-job-sidebar sidebar-type">
                            <h3>job type</h3>
                            <div class="job-sidebar-box">
                                <ul>
                                    <li class="checkbox">
                                        <input class="checkbox-spin" type="checkbox" id="Freelance" />
                                        <label for="Freelance"><span></span>Freelance</label>
                                    </li>
                                    <li class="checkbox">
                                        <input class="checkbox-spin" type="checkbox" id="Full_Time" />
                                        <label for="Full_Time"><span></span>Full Time</label>
                                    </li>
                                    <li class="checkbox">
                                        <input class="checkbox-spin" type="checkbox" id="Internship" />
                                        <label for="Internship"><span></span>Internee</label>
                                    </li>
                                 
                                   
                                </ul>
                            </div>
                        </div>
                        <!-- Single Job Sidebar End -->
 
                        <!-- Single Job Sidebar Start -->
                        <div class="single-job-sidebar sidebar-type">
                            <h3>By Seniority</h3>
                            <div class="job-sidebar-box">
                                <ul>
                                    <li class="checkbox">
                                        <input class="checkbox-spin" type="checkbox" id="Freelance" />
                                        <label for="Freelance"><span></span>Experienced </label>
                                    </li>
                                    <li class="checkbox">
                                        <input class="checkbox-spin" type="checkbox" id="Full_Time" />
                                        <label for="Full_Time"><span></span>Senior</label>
                                    </li>
                                    <li class="checkbox">
                                        <input class="checkbox-spin" type="checkbox" id="Internship" />
                                        <label for="Internship"><span></span>Internship</label>
                                    </li>
                                    <li class="checkbox">
                                        <input class="checkbox-spin" type="checkbox" id="Part_Time" />
                                        <label for="Part_Time"><span></span>Part Time</label>
                                    </li>
                                    <li class="checkbox">
                                        <input class="checkbox-spin" type="checkbox" id="Temporary" />
                                        <label for="Temporary"><span></span>Temporary</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Single Job Sidebar End -->
                        <!-- Single Job Sidebar Start -->
                        <div class="single-job-sidebar sidebar-type">
                            <h3>By Industry</h3>
                            <div class="job-sidebar-box">
                                <ul>
                                    <li class="checkbox">
                                        <input class="checkbox-spin" type="checkbox" id="Freelance" />
                                        <label for="Freelance"><span></span>IT </label>
                                    </li>
                                    <li class="checkbox">
                                        <input class="checkbox-spin" type="checkbox" id="Full_Time" />
                                        <label for="Full_Time"><span></span>HR</label>
                                    </li>
                                    <li class="checkbox">
                                        <input class="checkbox-spin" type="checkbox" id="Internship" />
                                        <label for="Internship"><span></span>ELECTRICIAN</label>
                                    </li>
                                    <li class="checkbox">
                                        <input class="checkbox-spin" type="checkbox" id="Part_Time" />
                                        <label for="Part_Time"><span></span>MACHENIC</label>
                                    </li>
                                    <li class="checkbox">
                                        <input class="checkbox-spin" type="checkbox" id="Temporary" />
                                        <label for="Temporary"><span></span>CHEMISTRY</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Single Job Sidebar End -->
 
                    </div>
                </div>


                <div class="col-md-10 col-lg-9 mx-auto">
                    <div class="job-grid-right">

                        <div class="browse-job-head-option">
                            <div class="job-browse-search">
                                <form>
                                    <input type="search" placeholder="Search Jobs Here...">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                            <div class="job-browse-action">
                                {{-- <div class="email-alerts">
                                    <input type="checkbox" class="styled" id="b_1">
                                    <label class="styled" for="b_1">email alerts for this search</label>
                                </div> --}}
                                <div class="dropdown">
                                    <button class="btn-dropdown dropdown-toggle" type="button" id="dropdowncur"
                                        data-bs-toggle="dropdown" aria-haspopup="true">Sort By</button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdowncur">
                                        <li>Newest</li>
                                        <li>Oldest</li>
                                        <li>Random</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- end job head -->

                        <div class="job-sidebar-list-single">

                            @foreach ($jobs as $job)
                                <div class="sidebar-list-single">
                                    <div class="top-company-list">
                                        <div class="company-list-logo">
                                            <a href="{{route('front.jobs.show',['id' => $job->id])}}">
                                             <img src="/assets/admin/images/logo-full.png" alt="company list 1">
                                            </a>
                                        </div>
                                        <div class="company-list-details">
                                            <h3><a href="{{route('front.jobs.show',['id' => $job->id])}}">{{$job->job_title}}</a></h3>
                                            <p class="company-state"><i class="fa fa-map-marker"></i> {{$job->city->name}}, {{$job->country->name}} </p>
                                          <p class="open-icon"><i class="fa fa-clock-o"></i>{{ $job->created_at->format('F j, Y') }}</p>
                                            <p class="varify"><i class="fa fa-check"></i>Fixed price : {{ $job->currency }} {{$job->salary_from}} - {{$job->salary_to}}</p>
                                            <p class="rating-company">4.1</p>
                                        </div>
                                        <div class="company-list-btn">
                                            <a href="{{route('front.jobs.show',['id' => $job->id])}}" class="visasbuzz-btn">apply now</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

{{-- 
                            <div class="sidebar-list-single">
                                <div class="top-company-list">
                                    <div class="company-list-logo">
                                        <a href="#">
                                            <img src="assets/frontend/img/company-logo-1.png" alt="company list 1">
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
                            </div> --}}
                            <!-- end sidebar single list -->
 
    
                        </div>


                        <!-- end job sidebar list -->
                        {{-- <div class="pagination-box-row">
                            <p>Page 1 of 6</p>
                            <ul class="pagination">
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li>...</li>
                                <li><a href="#">6</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                            </ul>
                        </div> --}}
                        <!-- end pagination -->

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Top Job Area End -->
@endsection
