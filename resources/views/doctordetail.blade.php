@extends('layouts.app')

@section('css')
    <link href="/assets/css/nice-select.css" rel="stylesheet">
    <link href="/assets/css/jquery-ui.css" rel="stylesheet">
    <link href="/assets/css/timePicker.css" rel="stylesheet">
@endsection
@section('content')
    <section class="page-title-two">
        <div class="lower-content">
            <div class="auto-container">
                <div class="bread-crumb-top">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{route('uzman-listesi')}}">Doktor</a></li>
                        <li>{{$doktorbul->adinfo}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="doctor-details bg-color-3">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="clinic-details-content doctor-details-content">
                        <div class="clinic-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><img src="/assets/images/team/team-33.jpg" alt=""></figure>
                                <div class="content-box">
                                    <div class="like-box"><a href="doctors-details.html"><i class="far fa-heart"></i></a></div>
                                    <div class="share-box">
                                        <a href="doctors-details.html" class="share-btn"><i class="fas fa-share-alt"></i></a>
                                    </div>
                                    <ul class="name-box clearfix">
                                        <li class="name"><h2>{{$doktorbul->adinfo}}</h2></li>
                                        <li><i class="icon-Trust-1"></i></li>
                                        <li><i class="icon-Trust-2"></i></li>
                                    </ul>
                                    <span class="designation">{{$doktorbul->uzmanlik}}</span>
                                    <div class="rating-box clearfix">
                                        <ul class="rating clearfix">
                                            <li><i class="icon-Star"></i></li>
                                            <li><i class="icon-Star"></i></li>
                                            <li><i class="icon-Star"></i></li>
                                            <li><i class="icon-Star"></i></li>
                                            <li><i class="icon-Star"></i></li>
                                            <li><a href="doctors-details.html">(32)</a></li>
                                        </ul>
                                    </div>
{{--                                    <div class="text">--}}
{{--                                        <p>Lorem ipsum dolor sit amet consectur adipisc eiusmod tempor incididunt.</p>--}}
{{--                                    </div>--}}
                                    <div class="mb-3">
                                        <button class="theme-btn-one btn-block"><i class="fas fa-calendar-check"></i> RANDEVU AL</button>
                                    </div>
                                    <div class="lower-box clearfix">
                                        <button class="btn btn-secondary left mr-2"><i class="fas fa-phone-square"></i> Telefon</button>
                                        <button class="btn btn-secondary left"><i class="fas fa-question-square"></i> BİLGİ AL</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tabs-box">
                            <div class="tab-btn-box centred">
                                <ul class="tab-btns tab-buttons clearfix">
                                    <li class="tab-btn active-btn" data-tab="#tab-1">Overview</li>
                                    <li class="tab-btn" data-tab="#tab-2">Experience</li>
                                    <li class="tab-btn" data-tab="#tab-3">Location</li>
                                    <li class="tab-btn" data-tab="#tab-4">Reviews</li>
                                </ul>
                            </div>
                            <div class="tabs-content">
                                <div class="tab active-tab" id="tab-1">
                                    <div class="inner-box">
                                        <div class="text">
                                            <h3>About Dr. Agnes Ayres:</h3>
                                            <p>Dr. Agnes Ayres is a Maxillofacial Surgeon in New York, NY.  Dr. Ayres has more experience with Congenital Cardiac Disorders and Cardiac Care than other specialists in his area.  He is affiliated with medical facilities such as Mount Sinai Morningside and Roosevelt Hospital.  He is accepting new patients.  Be sure to call ahead with Dr. Pinney to book an appointment.</p>
                                            <h3>Specialities</h3>
                                            <p>Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Nullam mollis. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapi.</p>
                                            <ul class="treatments-list clearfix">
                                                <li><a href="doctors-details.html">Cardiology</a></li>
                                                <li><a href="doctors-details.html">Dermatology</a></li>
                                                <li><a href="doctors-details.html">Family Medicine</a></li>
                                                <li><a href="doctors-details.html">Obstetrics & Gynecology</a></li>
                                                <li><a href="doctors-details.html">Oncology</a></li>
                                                <li><a href="doctors-details.html">Orthopedic Surgery</a></li>
                                            </ul>
                                            <h3>Educational Background</h3>
                                            <p>Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Nullam mollis. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapi.</p>
                                            <ul class="list clearfix">
                                                <li>New York Medical College <span>- Doctor of Medicine</span></li>
                                                <li>Montefiore Medical Center <span>- Residency in Internal Medicine</span></li>
                                                <li>New York Medical College <span>- Master Internal Medicine</span></li>
                                            </ul>
                                        </div>
                                        <div class="accordion-box">
                                            <h3>Offered Services</h3>
                                            <div class="title-box">
                                                <h6>Service - Visit<span>Price</span></h6>
                                            </div>
                                            <ul class="accordion-inner">
                                                <li class="accordion block">
                                                    <div class="acc-btn">
                                                        <div class="icon-outer"></div>
                                                        <h6>New Patient Visit<span>$40</span></h6>
                                                    </div>
                                                    <div class="acc-content">
                                                        <div class="text">
                                                            <p>Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id mattis vel nisi.</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="accordion block active-block">
                                                    <div class="acc-btn active">
                                                        <div class="icon-outer"></div>
                                                        <h6>General Consultation<span>$50</span></h6>
                                                    </div>
                                                    <div class="acc-content current">
                                                        <div class="text">
                                                            <p>Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id mattis vel nisi.</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="accordion block">
                                                    <div class="acc-btn">
                                                        <div class="icon-outer"></div>
                                                        <h6>Back Pain<span>$60</span></h6>
                                                    </div>
                                                    <div class="acc-content">
                                                        <div class="text">
                                                            <p>Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id mattis vel nisi.</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="accordion block">
                                                    <div class="acc-btn">
                                                        <div class="icon-outer"></div>
                                                        <h6>Diabetes Consultation<span>$35</span></h6>
                                                    </div>
                                                    <div class="acc-content">
                                                        <div class="text">
                                                            <p>Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id mattis vel nisi.</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="award-box">
                                            <h3>Awards</h3>
                                            <ul class="list clearfix">
                                                <li>Award win by American Dental Council of America<span>(2006)</span></li>
                                                <li>Award win by Karnataka State Dental Council<span>(2009)</span></li>
                                                <li>Award win by Manchester Academy of Oral Medicine<span>(2015)</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab" id="tab-2">
                                    <div class="experience-box">
                                        <div class="text">
                                            <h3>Professional Experience</h3>
                                            <p>Dr. Agnes Ayres is a Maxillofacial Surgeon in New York, NY.  Dr. Ayres has more experience with Congenital Cardiac Disorders and Cardiac Care than other specialists in his area.  He is affiliated with medical facilities.</p>
                                            <ul class="experience-list clearfix">
                                                <li>
                                                    Aurora Medical & Dental College:
                                                    <p>Medical & General Dentistry <span>(Aug 2008-Sep 2013)</span></p>
                                                </li>
                                                <li>
                                                    Horizon Dermatology & Cosmetic Center:
                                                    <p>Assistant Darmatologist <span>(Oct 2013-Nov 2017)</span></p>
                                                </li>
                                                <li>
                                                    New Apollo Hospital:
                                                    <p>Darmatologist<span>(Dec 2017-Till Now)</span></p>
                                                </li>
                                            </ul>
                                            <h3>Key Skills</h3>
                                            <ul class="skills-list clearfix">
                                                <li>Proficient in assisting all Gynecology & Obstetrics Surgeries.</li>
                                                <li>Expert in conducting all high risk labor.</li>
                                                <li>Proficient in performing all minor surgeries.</li>
                                                <li>Expert in handling all outpatients & inpatients department</li>
                                                <li>Able to perform ultrasound of Gynecology & Obstetrics</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab" id="tab-3">
                                    <div class="location-box">
                                        <h3>Locations</h3>
                                        <div class="map-inner">
                                            <div
                                                class="google-map"
                                                id="contact-google-map"
                                                data-map-lat="40.712776"
                                                data-map-lng="-74.005974"
                                                data-icon-path="/assets/images/icons/map-marker.png"
                                                data-map-title="Brooklyn, New York, United Kingdom"
                                                data-map-zoom="12"
                                                data-markers='{
                                                        "marker-1": [40.712776, -74.005974, "<h4>Branch Office</h4><p>77/99 New York</p>","/assets/images/icons/map-marker.png"]
                                                    }'>

                                            </div>
                                        </div>
                                        <h4>New Apollo Hospital:</h4>
                                        <ul class="location-info clearfix">
                                            <li><i class="fas fa-map-marker-alt"></i>{{$doktorbul->address}}</li>
                                            <li><i class="fas fa-phone"></i><a href="tel:2265458856">+(22) 65_458_856</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab" id="tab-4">
                                    <div class="review-box">
                                        <h3>Dr. Agnes Ayres Reviews</h3>
                                        <div class="rating-inner">
                                            <div class="rating-box">
                                                <h2>4.5</h2>
                                                <ul class="clearfix">
                                                    <li><i class="icon-Star"></i></li>
                                                    <li><i class="icon-Star"></i></li>
                                                    <li><i class="icon-Star"></i></li>
                                                    <li><i class="icon-Star"></i></li>
                                                    <li><i class="icon-Star"></i></li>
                                                </ul>
                                                <span>Based on 5 review</span>
                                            </div>
                                            <div class="rating-pregress">
                                                <div class="single-progress">
                                                    <span class="porgress-bar"></span>
                                                    <div class="text"><p><i class="icon-Star"></i>5 Stars</p></div>
                                                </div>
                                                <div class="single-progress">
                                                    <span class="porgress-bar"></span>
                                                    <div class="text"><p><i class="icon-Star"></i>4 Stars</p></div>
                                                </div>
                                                <div class="single-progress">
                                                    <span class="porgress-bar"></span>
                                                    <div class="text"><p><i class="icon-Star"></i>3 Stars</p></div>
                                                </div>
                                                <div class="single-progress">
                                                    <span class="porgress-bar"></span>
                                                    <div class="text"><p><i class="icon-Star"></i>2 Stars</p></div>
                                                </div>
                                                <div class="single-progress">
                                                    <span class="porgress-bar"></span>
                                                    <div class="text"><p><i class="icon-Star"></i>1 Stars</p></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="review-inner">
                                            <div class="single-review-box">
                                                <figure class="image-box"><img src="/assets/images/resource/review-1.jpg" alt=""></figure>
                                                <ul class="rating clearfix">
                                                    <li><i class="icon-Star"></i></li>
                                                    <li><i class="icon-Star"></i></li>
                                                    <li><i class="icon-Star"></i></li>
                                                    <li><i class="icon-Star"></i></li>
                                                    <li class="light"><i class="icon-Star"></i></li>
                                                </ul>
                                                <h6>Agnes Ayres <span>- April 10, 2020</span></h6>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusmod tempor incididunt labore dolore magna aliqua enim.</p>
                                            </div>
                                            <div class="single-review-box">
                                                <figure class="image-box"><img src="/assets/images/resource/review-2.jpg" alt=""></figure>
                                                <ul class="rating clearfix">
                                                    <li><i class="icon-Star"></i></li>
                                                    <li><i class="icon-Star"></i></li>
                                                    <li><i class="icon-Star"></i></li>
                                                    <li><i class="icon-Star"></i></li>
                                                    <li><i class="icon-Star"></i></li>
                                                </ul>
                                                <h6>Mary Astor <span>- April 09, 2020</span></h6>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusmod tempor incididunt labore dolore magna aliqua enim.</p>
                                            </div>
                                            <div class="single-review-box">
                                                <figure class="image-box"><img src="/assets/images/resource/review-3.jpg" alt=""></figure>
                                                <ul class="rating clearfix">
                                                    <li><i class="icon-Star"></i></li>
                                                    <li><i class="icon-Star"></i></li>
                                                    <li><i class="icon-Star"></i></li>
                                                    <li><i class="icon-Star"></i></li>
                                                    <li class="light"><i class="icon-Star"></i></li>
                                                </ul>
                                                <h6>Anderson <span>- April 08, 2020</span></h6>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusmod tempor incididunt labore dolore magna aliqua enim.</p>
                                            </div>
                                            <div class="single-review-box">
                                                <figure class="image-box"><img src="/assets/images/resource/review-4.jpg" alt=""></figure>
                                                <ul class="rating clearfix">
                                                    <li><i class="icon-Star"></i></li>
                                                    <li><i class="icon-Star"></i></li>
                                                    <li><i class="icon-Star"></i></li>
                                                    <li><i class="icon-Star"></i></li>
                                                    <li class="light"><i class="icon-Star"></i></li>
                                                </ul>
                                                <h6>Bradshaw <span>- April 07, 2020</span></h6>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusmod tempor incididunt labore dolore magna aliqua enim.</p>
                                            </div>
                                            <div class="single-review-box">
                                                <figure class="image-box"><img src="/assets/images/resource/review-5.jpg" alt=""></figure>
                                                <ul class="rating clearfix">
                                                    <li><i class="icon-Star"></i></li>
                                                    <li><i class="icon-Star"></i></li>
                                                    <li><i class="icon-Star"></i></li>
                                                    <li><i class="icon-Star"></i></li>
                                                    <li class="light"><i class="icon-Star"></i></li>
                                                </ul>
                                                <h6>Bradshaw <span>- April 26, 2020</span></h6>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusmod tempor incididunt labore dolore magna aliqua enim.</p>
                                            </div>
                                        </div>
                                        <div class="btn-box">
                                            <a href="doctors-details.html" class="theme-btn-one">Submit Review<i class="icon-Arrow-Right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    <div class="doctors-sidebar sticky-sidebar">
                        <div class="form-widget">
                            <div class="form-title">
                                <h3>Book Appointment</h3>
                                <p>Monday to Friday: 09:00Am-05:00PM</p>
                            </div>
                            <div class="form-inner">
                                <div id="calendar-container"></div>
                                <div class="choose-service">
                                    <h4>Choose Service</h4>
                                    <div class="custom-check-box">
                                        <div class="custom-controls-stacked">
                                            <label class="custom-control material-checkbox">
                                                <input type="checkbox" class="material-control-input">
                                                <span class="material-control-indicator"></span>
                                                <span class="description">New Patient Visit <span class="price">$40</span></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="custom-check-box">
                                        <div class="custom-controls-stacked">
                                            <label class="custom-control material-checkbox">
                                                <input type="checkbox" class="material-control-input" checked="">
                                                <span class="material-control-indicator"></span>
                                                <span class="description">General Consultation <span class="price">$50</span></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="custom-check-box">
                                        <div class="custom-controls-stacked">
                                            <label class="custom-control material-checkbox">
                                                <input type="checkbox" class="material-control-input">
                                                <span class="material-control-indicator"></span>
                                                <span class="description">Back Pain <span class="price">$60</span></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="custom-check-box">
                                        <div class="custom-controls-stacked">
                                            <label class="custom-control material-checkbox">
                                                <input type="checkbox" class="material-control-input">
                                                <span class="material-control-indicator"></span>
                                                <span class="description">Diabetes Consultation <span class="price">$35</span></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="btn-box">
                                        <a href="book-appointment.html" class="theme-btn-one">Book Appoinment<i class="icon-Arrow-Right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')



    <script src="/assets/js/timePicker.js"></script>
    <script src="/assets/js/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
    <!-- jQuery Timepicker Addon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.3/jquery-ui-timepicker-addon.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.3/jquery-ui-timepicker-addon.min.js"></script>

    <!-- map script -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
    <script src="/assets/js/gmaps.js"></script>
    <script src="/assets/js/map-helper.js"></script>

    <script>
        $(document).ready(function () {
            function updateSidebar() {
                var sidebar = $('.doctors-sidebar');
                var sidebarParent = sidebar.parent();
                var sidebarOffset = sidebarParent.offset().top;
                var footerOffset = $('.main-footer').offset().top;
                var sidebarHeight = sidebar.outerHeight(true);
                var stopPosition = footerOffset - sidebarHeight - 100;
                var sidebarWidth = sidebarParent.width();

                if (window.matchMedia('(min-width: 768px)').matches) {
                    var windowTop = $(window).scrollTop();

                    if (windowTop > sidebarOffset) {
                        if (windowTop < stopPosition) {
                            sidebar.css({ position: 'fixed', top: '20px', width: sidebarWidth + 'px' });
                        } else {
                            var diff = windowTop - stopPosition + 20;
                            sidebar.css({ position: 'fixed', top: '-' + diff + 'px', width: sidebarWidth + 'px' });
                        }
                    } else {
                        sidebar.css('position', 'static');
                    }
                } else {
                    sidebar.css('position', 'static');
                }
            }

            updateSidebar();
            $(window).scroll(updateSidebar);
            $(window).resize(updateSidebar);
        });
    </script>





@endsection
