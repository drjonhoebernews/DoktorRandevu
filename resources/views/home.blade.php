@extends('layouts.app')

@section('content')
    <section class="banner-section centred style-three"
             style="background-image: url(assets/images/banner/banner-bg-2.jpg);">
        <div class="anim-icon">
            <div class="icon icon-1 float-bob-y"
                 style="background-image: url(assets/images/icons/anim-icon-1.png);"></div>
            <div class="icon icon-2" style="background-image: url(assets/images/icons/anim-icon-2.png);"></div>
            <div class="icon icon-3 rotate-me"
                 style="background-image: url(assets/images/icons/anim-icon-3.png);"></div>
            <div class="icon icon-4 rotate-me"
                 style="background-image: url(assets/images/icons/anim-icon-4.png);"></div>
            <div class="icon icon-5" style="background-image: url(assets/images/icons/anim-icon-5.png);"></div>
            <div class="icon icon-6" style="background-image: url(assets/images/icons/anim-icon-6.png);"></div>
            <div class="icon icon-7" style="background-image: url(assets/images/icons/anim-icon-7.png);"></div>
            <div class="icon icon-8 float-bob-y"
                 style="background-image: url(assets/images/icons/anim-icon-8.png);"></div>
        </div>
        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-67.png);"></div>
        <div class="auto-container">
            <div class="content-box">
                <h1>Find Nearest Doctor.</h1>
                <p>Amet consectetur adipisicing elit sed do eiusmod.</p>
                <div class="form-inner">
                    <form action="{{route('main')}}" method="post">
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Ex. Name, Specialization..." required="">
                            <button type="submit"><i class="icon-Arrow-Right"></i></button>
                        </div>
                    </form>
                    <ul class="select-box clearfix">
                        <li>
                            <div class="single-checkbox">
                                <input type="radio" name="check-box" id="check1" checked="">
                                <label for="check1"><span></span>All</label>
                            </div>
                        </li>
                        <li>
                            <div class="single-checkbox">
                                <input type="radio" name="check-box" id="check2">
                                <label for="check2"><span></span>Doctor</label>
                            </div>
                        </li>
                        <li>
                            <div class="single-checkbox">
                                <input type="radio" name="check-box" id="check3">
                                <label for="check3"><span></span>Clinic</label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="category-section bg-color-3 centred">
        <div class="pattern-layer">
            <div class="pattern-1" style="background-image: url(assets/images/shape/shape-47.png);"></div>
            <div class="pattern-2" style="background-image: url(assets/images/shape/shape-48.png);"></div>
        </div>
        <div class="auto-container">
            <div class="sec-title centred">
                <p>Category</p>
                <h2>Browse by specialist</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12 category-block">
                    <div class="category-block-one wow fadeInUp animated animated" data-wow-delay="00ms"
                         data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="pattern">
                                <div class="pattern-1"
                                     style="background-image: url(assets/images/shape/shape-45.png);"></div>
                                <div class="pattern-2"
                                     style="background-image: url(assets/images/shape/shape-46.png);"></div>
                            </div>
                            <figure class="icon-box"><img src="assets/images/icons/icon-12.png" alt=""></figure>
                            <h3><a href="doctors-dashboard.html">Cardiologist</a></h3>
                            <div class="link"><a href="doctors-dashboard.html"><i class="icon-Arrow-Right"></i></a>
                            </div>
                            <div class="btn-box"><a href="doctors-dashboard.html" class="theme-btn-one">View List<i
                                        class="icon-Arrow-Right"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 category-block">
                    <div class="category-block-one wow fadeInUp animated animated" data-wow-delay="200ms"
                         data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="pattern">
                                <div class="pattern-1"
                                     style="background-image: url(assets/images/shape/shape-45.png);"></div>
                                <div class="pattern-2"
                                     style="background-image: url(assets/images/shape/shape-46.png);"></div>
                            </div>
                            <figure class="icon-box"><img src="assets/images/icons/icon-13.png" alt=""></figure>
                            <h3><a href="doctors-dashboard.html">Gastroenterologist</a></h3>
                            <div class="link"><a href="doctors-dashboard.html"><i class="icon-Arrow-Right"></i></a>
                            </div>
                            <div class="btn-box"><a href="doctors-dashboard.html" class="theme-btn-one">View List<i
                                        class="icon-Arrow-Right"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 category-block">
                    <div class="category-block-one wow fadeInUp animated animated" data-wow-delay="400ms"
                         data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="pattern">
                                <div class="pattern-1"
                                     style="background-image: url(assets/images/shape/shape-45.png);"></div>
                                <div class="pattern-2"
                                     style="background-image: url(assets/images/shape/shape-46.png);"></div>
                            </div>
                            <figure class="icon-box"><img src="assets/images/icons/icon-14.png" alt=""></figure>
                            <h3><a href="doctors-dashboard.html">Ear-Nose-Throat</a></h3>
                            <div class="link"><a href="doctors-dashboard.html"><i class="icon-Arrow-Right"></i></a>
                            </div>
                            <div class="btn-box"><a href="doctors-dashboard.html" class="theme-btn-one">View List<i
                                        class="icon-Arrow-Right"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 category-block">
                    <div class="category-block-one wow fadeInUp animated animated" data-wow-delay="600ms"
                         data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="pattern">
                                <div class="pattern-1"
                                     style="background-image: url(assets/images/shape/shape-45.png);"></div>
                                <div class="pattern-2"
                                     style="background-image: url(assets/images/shape/shape-46.png);"></div>
                            </div>
                            <figure class="icon-box"><img src="assets/images/icons/icon-15.png" alt=""></figure>
                            <h3><a href="doctors-dashboard.html">Ophthalmologist</a></h3>
                            <div class="link"><a href="doctors-dashboard.html"><i class="icon-Arrow-Right"></i></a>
                            </div>
                            <div class="btn-box"><a href="doctors-dashboard.html" class="theme-btn-one">View List<i
                                        class="icon-Arrow-Right"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 category-block">
                    <div class="category-block-one wow fadeInUp animated animated" data-wow-delay="00ms"
                         data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="pattern">
                                <div class="pattern-1"
                                     style="background-image: url(assets/images/shape/shape-45.png);"></div>
                                <div class="pattern-2"
                                     style="background-image: url(assets/images/shape/shape-46.png);"></div>
                            </div>
                            <figure class="icon-box"><img src="assets/images/icons/icon-16.png" alt=""></figure>
                            <h3><a href="doctors-dashboard.html">Nephrologist</a></h3>
                            <div class="link"><a href="doctors-dashboard.html"><i class="icon-Arrow-Right"></i></a>
                            </div>
                            <div class="btn-box"><a href="doctors-dashboard.html" class="theme-btn-one">View List<i
                                        class="icon-Arrow-Right"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 category-block">
                    <div class="category-block-one wow fadeInUp animated animated" data-wow-delay="200ms"
                         data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="pattern">
                                <div class="pattern-1"
                                     style="background-image: url(assets/images/shape/shape-45.png);"></div>
                                <div class="pattern-2"
                                     style="background-image: url(assets/images/shape/shape-46.png);"></div>
                            </div>
                            <figure class="icon-box"><img src="assets/images/icons/icon-17.png" alt=""></figure>
                            <h3><a href="doctors-dashboard.html">Pulmonologist</a></h3>
                            <div class="link"><a href="doctors-dashboard.html"><i class="icon-Arrow-Right"></i></a>
                            </div>
                            <div class="btn-box"><a href="doctors-dashboard.html" class="theme-btn-one">View List<i
                                        class="icon-Arrow-Right"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 category-block">
                    <div class="category-block-one wow fadeInUp animated animated" data-wow-delay="400ms"
                         data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="pattern">
                                <div class="pattern-1"
                                     style="background-image: url(assets/images/shape/shape-45.png);"></div>
                                <div class="pattern-2"
                                     style="background-image: url(assets/images/shape/shape-46.png);"></div>
                            </div>
                            <figure class="icon-box"><img src="assets/images/icons/icon-18.png" alt=""></figure>
                            <h3><a href="doctors-dashboard.html">Neurologist</a></h3>
                            <div class="link"><a href="doctors-dashboard.html"><i class="icon-Arrow-Right"></i></a>
                            </div>
                            <div class="btn-box"><a href="doctors-dashboard.html" class="theme-btn-one">View List<i
                                        class="icon-Arrow-Right"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 category-block">
                    <div class="category-block-one wow fadeInUp animated animated" data-wow-delay="600ms"
                         data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="pattern">
                                <div class="pattern-1"
                                     style="background-image: url(assets/images/shape/shape-45.png);"></div>
                                <div class="pattern-2"
                                     style="background-image: url(assets/images/shape/shape-46.png);"></div>
                            </div>
                            <figure class="icon-box"><img src="assets/images/icons/icon-19.png" alt=""></figure>
                            <h3><a href="doctors-dashboard.html">Orthopedic Surgeon</a></h3>
                            <div class="link"><a href="doctors-dashboard.html"><i class="icon-Arrow-Right"></i></a>
                            </div>
                            <div class="btn-box"><a href="doctors-dashboard.html" class="theme-btn-one">View List<i
                                        class="icon-Arrow-Right"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="more-btn"><a href="doctors-dashboard.html" class="theme-btn-one">All Category<i
                        class="icon-Arrow-Right"></i></a></div>
        </div>
    </section>
    <section class="about-style-two">
        <div class="auto-container">
            <div class="row align-items-center clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content_block_1">
                        <div class="content-box mr-50">
                            <div class="sec-title">
                                <p>About Docpro</p>
                                <h2>Bring care to your home with one click</h2>
                            </div>
                            <div class="text">
                                <p>Lorem ipsum dolor sit amet consectur adipiscing elit sed eiusmod ex tempor incididunt
                                    labore dolore magna aliquaenim ad minim veniam quis nostrud exercitation ullamco
                                    laboris.</p>
                            </div>
                            <ul class="list-style-one clearfix">
                                <li>Associates Insurance</li>
                                <li>Pina & Insurance</li>
                            </ul>
                            <div class="btn-box"><a href="about.html" class="theme-btn-one">About Us<i
                                        class="icon-Arrow-Right"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image_block_3">
                        <div class="image-box">
                            <div class="pattern">
                                <div class="pattern-1"
                                     style="background-image: url(assets/images/shape/shape-49.png);"></div>
                                <div class="pattern-2"
                                     style="background-image: url(assets/images/shape/shape-50.png);"></div>
                                <div class="pattern-3"></div>
                            </div>
                            <figure class="image image-1 paroller"><img src="assets/images/resource/about-4.jpg" alt="">
                            </figure>
                            <figure class="image image-2 paroller-2"><img src="assets/images/resource/about-3.jpg"
                                                                          alt=""></figure>
                            <div class="image-content">
                                <figure class="icon-box"><img src="assets/images/icons/icon-8.png" alt=""></figure>
                                <span>Appointment With</span>
                                <h4>Specialist</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="clients-section bg-color-2">
        <div class="pattern-layer">
            <div class="pattern-1" style="background-image: url(assets/images/shape/shape-3.png);"></div>
            <div class="pattern-2" style="background-image: url(assets/images/shape/shape-4.png);"></div>
        </div>
        <div class="auto-container">
            <div class="auto-container">
                <div class="clients-carousel owl-carousel owl-theme owl-nav-none owl-dots-none">
                    <figure class="clients-logo-box"><a href="index.html"><img
                                src="assets/images/clients/clients-logo-1.png" alt=""></a></figure>
                    <figure class="clients-logo-box"><a href="index.html"><img
                                src="assets/images/clients/clients-logo-2.png" alt=""></a></figure>
                    <figure class="clients-logo-box"><a href="index.html"><img
                                src="assets/images/clients/clients-logo-3.png" alt=""></a></figure>
                    <figure class="clients-logo-box"><a href="index.html"><img
                                src="assets/images/clients/clients-logo-4.png" alt=""></a></figure>
                    <figure class="clients-logo-box"><a href="index.html"><img
                                src="assets/images/clients/clients-logo-5.png" alt=""></a></figure>
                </div>
            </div>
        </div>
    </section>
    <section class="process-style-two bg-color-3 centred">
        <div class="pattern-layer">
            <div class="pattern-1" style="background-image: url(assets/images/shape/shape-39.png);"></div>
            <div class="pattern-2" style="background-image: url(assets/images/shape/shape-40.png);"></div>
            <div class="pattern-3" style="background-image: url(assets/images/shape/shape-41.png);"></div>
            <div class="pattern-4" style="background-image: url(assets/images/shape/shape-42.png);"></div>
        </div>
        <div class="auto-container">
            <div class="sec-title centred">
                <p>Process</p>
                <h2>Appointment Process</h2>
            </div>
            <div class="inner-content">
                <div class="arrow" style="background-image: url(assets/images/icons/arrow-1.png);"></div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 processing-block">
                        <div class="processing-block-two">
                            <div class="inner-box">
                                <figure class="icon-box"><img src="assets/images/icons/icon-9.png" alt=""></figure>
                                <h3>Search Best Online Professional</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 processing-block">
                        <div class="processing-block-two">
                            <div class="inner-box">
                                <figure class="icon-box"><img src="assets/images/icons/icon-10.png" alt=""></figure>
                                <h3>View Professional Profile</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 processing-block">
                        <div class="processing-block-two">
                            <div class="inner-box">
                                <figure class="icon-box"><img src="assets/images/icons/icon-11.png" alt=""></figure>
                                <h3>Get Instant Doctor Appoinment</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="team-style-three">
        <div class="pattern-layer">
            <div class="pattern-1" style="background-image: url(assets/images/shape/shape-51.png);"></div>
            <div class="pattern-2" style="background-image: url(assets/images/shape/shape-52.png);"></div>
            <div class="pattern-3" style="background-image: url(assets/images/shape/shape-53.png);"></div>
        </div>
        <div class="auto-container">
            <div class="sec-title light">
                <p>Meet Our Professionals</p>
                <h2>Top Rated Specialists</h2>
                <div class="more-btn"><a href="doctors-1.html" class="theme-btn-one">All Specialist<i
                            class="icon-Arrow-Right"></i></a></div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                    <div class="team-block-three wow fadeInUp animated animated animated" data-wow-delay="00ms"
                         data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="assets/images/team/team-13.jpg" alt="">
                                <a href="doctors-dashboard.html"><i class="far fa-heart"></i></a>
                            </figure>
                            <div class="lower-content">
                                <ul class="name-box clearfix">
                                    <li class="name"><h3><a href="doctors-dashboard.html">Dr. Julia Jhones</a></h3></li>
                                    <li><i class="icon-Trust-1"></i></li>
                                    <li><i class="icon-Trust-2"></i></li>
                                </ul>
                                <span class="designation">MBBS, MS - General Surgery, MCh</span>
                                <div class="rating-box clearfix">
                                    <ul class="rating clearfix">
                                        <li><i class="icon-Star"></i></li>
                                        <li><i class="icon-Star"></i></li>
                                        <li><i class="icon-Star"></i></li>
                                        <li><i class="icon-Star"></i></li>
                                        <li><i class="icon-Star"></i></li>
                                        <li><a href="doctors-dashboard.html">(32)</a></li>
                                    </ul>
                                </div>
                                <div class="location-box">
                                    <p><i class="fas fa-map-marker-alt"></i>G87P, Birmingham, UK</p>
                                </div>
                                <div class="lower-box clearfix">
                                    <span class="text">Available Today</span>
                                    <a href="doctors-dashboard.html">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                    <div class="team-block-three wow fadeInUp animated animated animated" data-wow-delay="300ms"
                         data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="assets/images/team/team-14.jpg" alt="">
                                <a href="doctors-dashboard.html"><i class="far fa-heart"></i></a>
                            </figure>
                            <div class="lower-content">
                                <ul class="name-box clearfix">
                                    <li class="name"><h3><a href="doctors-dashboard.html">Dr. Rex Allen</a></h3></li>
                                    <li><i class="icon-Trust-1"></i></li>
                                    <li><i class="icon-Trust-2"></i></li>
                                </ul>
                                <span class="designation">MBBS, MS - General Surgery, MCh</span>
                                <div class="rating-box clearfix">
                                    <ul class="rating clearfix">
                                        <li><i class="icon-Star"></i></li>
                                        <li><i class="icon-Star"></i></li>
                                        <li><i class="icon-Star"></i></li>
                                        <li><i class="icon-Star"></i></li>
                                        <li><i class="icon-Star"></i></li>
                                        <li><a href="doctors-dashboard.html">(17)</a></li>
                                    </ul>
                                </div>
                                <div class="location-box">
                                    <p><i class="fas fa-map-marker-alt"></i>G87P, Birmingham, UK</p>
                                </div>
                                <div class="lower-box clearfix">
                                    <span class="text not-available">Not Available</span>
                                    <a href="doctors-dashboard.html">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                    <div class="team-block-three wow fadeInUp animated animated animated" data-wow-delay="600ms"
                         data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="assets/images/team/team-15.jpg" alt="">
                                <a href="doctors-dashboard.html"><i class="far fa-heart"></i></a>
                            </figure>
                            <div class="lower-content">
                                <ul class="name-box clearfix">
                                    <li class="name"><h3><a href="doctors-dashboard.html">Dr. Julia Jhones</a></h3></li>
                                    <li><i class="icon-Trust-1"></i></li>
                                    <li><i class="icon-Trust-2"></i></li>
                                </ul>
                                <span class="designation">MBBS, MS - General Surgery, MCh</span>
                                <div class="rating-box clearfix">
                                    <ul class="rating clearfix">
                                        <li><i class="icon-Star"></i></li>
                                        <li><i class="icon-Star"></i></li>
                                        <li><i class="icon-Star"></i></li>
                                        <li><i class="icon-Star"></i></li>
                                        <li><i class="icon-Star"></i></li>
                                        <li><a href="doctors-dashboard.html">(20)</a></li>
                                    </ul>
                                </div>
                                <div class="location-box">
                                    <p><i class="fas fa-map-marker-alt"></i>G87P, Birmingham, UK</p>
                                </div>
                                <div class="lower-box clearfix">
                                    <span class="text not-available">Not Available</span>
                                    <a href="doctors-dashboard.html">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="faq-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image_block_4">
                        <div class="image-box">
                            <div class="pattern" style="background-image: url(assets/images/shape/shape-54.png);"></div>
                            <figure class="image"><img src="assets/images/resource/faq-1.png" alt=""></figure>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content_block_5">
                        <div class="content-box">
                            <div class="sec-title">
                                <p>Faq’s</p>
                                <h2>Frequently Asked Questions.</h2>
                            </div>
                            <ul class="accordion-box">
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-outer"></div>
                                        <h4>How do I contact customer service?</h4>
                                    </div>
                                    <div class="acc-content">
                                        <div class="text">
                                            <p>Lorem ipsum dolor sit amet consectur adipiscing elit eiusmod tempor
                                                incididunt labore dolore magna aliquaenim ad minim veniam quis nostrud
                                                exercitation ullamco laboris.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion block active-block">
                                    <div class="acc-btn active">
                                        <div class="icon-outer"></div>
                                        <h4>Do doctors pay for good reviews?</h4>
                                    </div>
                                    <div class="acc-content current">
                                        <div class="text">
                                            <p>Lorem ipsum dolor sit amet consectur adipiscing elit eiusmod tempor
                                                incididunt labore dolore magna aliquaenim ad minim veniam quis nostrud
                                                exercitation ullamco laboris.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-outer"></div>
                                        <h4>Why didn't my review get posted?</h4>
                                    </div>
                                    <div class="acc-content">
                                        <div class="text">
                                            <p>Lorem ipsum dolor sit amet consectur adipiscing elit eiusmod tempor
                                                incididunt labore dolore magna aliquaenim ad minim veniam quis nostrud
                                                exercitation ullamco laboris.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonial-style-two bg-color-3">
        <div class="pattern-layer">
            <div class="pattern-1" style="background-image: url(assets/images/shape/shape-55.png);"></div>
            <div class="pattern-2" style="background-image: url(assets/images/shape/shape-56.png);"></div>
            <div class="pattern-3" style="background-image: url(assets/images/shape/shape-57.png);"></div>
            <div class="pattern-4" style="background-image: url(assets/images/shape/shape-58.png);"></div>
            <div class="pattern-5" style="background-image: url(assets/images/shape/shape-59.png);"></div>
        </div>
        <div class="auto-container">
            <div class="sec-title centred">
                <p>Testimonials</p>
                <h2>Testimonials</h2>
            </div>
            <div class="three-item-carousel owl-carousel owl-theme owl-nav-none">
                <div class="testimonial-block-two">
                    <div class="inner-box">
                        <div class="text">
                            <p>“ Lorem ipsum dolor sit amet con sectetur adipic eksed do eiusm od tempor incid.”</p>
                        </div>
                        <div class="author-info">
                            <figure class="author-thumb"><img src="assets/images/resource/testimonial-3.png" alt="">
                            </figure>
                            <h4>Amelia Anna</h4>
                            <span class="designation">Martketer</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-block-two">
                    <div class="inner-box">
                        <div class="text">
                            <p>“ Lorem ipsum dolor sit amet con sectetur adipic eksed do eiusm od tempor incid.”</p>
                        </div>
                        <div class="author-info">
                            <figure class="author-thumb"><img src="assets/images/resource/testimonial-4.png" alt="">
                            </figure>
                            <h4>Paolo Dybala</h4>
                            <span class="designation">Martketer</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-block-two">
                    <div class="inner-box">
                        <div class="text">
                            <p>“ Lorem ipsum dolor sit amet con sectetur adipic eksed do eiusm od tempor incid.”</p>
                        </div>
                        <div class="author-info">
                            <figure class="author-thumb"><img src="assets/images/resource/testimonial-5.png" alt="">
                            </figure>
                            <h4>Samuel Daniels</h4>
                            <span class="designation">Martketer</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-block-two">
                    <div class="inner-box">
                        <div class="text">
                            <p>“ Lorem ipsum dolor sit amet con sectetur adipic eksed do eiusm od tempor incid.”</p>
                        </div>
                        <div class="author-info">
                            <figure class="author-thumb"><img src="assets/images/resource/testimonial-3.png" alt="">
                            </figure>
                            <h4>Amelia Anna</h4>
                            <span class="designation">Martketer</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-block-two">
                    <div class="inner-box">
                        <div class="text">
                            <p>“ Lorem ipsum dolor sit amet con sectetur adipic eksed do eiusm od tempor incid.”</p>
                        </div>
                        <div class="author-info">
                            <figure class="author-thumb"><img src="assets/images/resource/testimonial-4.png" alt="">
                            </figure>
                            <h4>Paolo Dybala</h4>
                            <span class="designation">Martketer</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-block-two">
                    <div class="inner-box">
                        <div class="text">
                            <p>“ Lorem ipsum dolor sit amet con sectetur adipic eksed do eiusm od tempor incid.”</p>
                        </div>
                        <div class="author-info">
                            <figure class="author-thumb"><img src="assets/images/resource/testimonial-5.png" alt="">
                            </figure>
                            <h4>Samuel Daniels</h4>
                            <span class="designation">Martketer</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-block-two">
                    <div class="inner-box">
                        <div class="text">
                            <p>“ Lorem ipsum dolor sit amet con sectetur adipic eksed do eiusm od tempor incid.”</p>
                        </div>
                        <div class="author-info">
                            <figure class="author-thumb"><img src="assets/images/resource/testimonial-3.png" alt="">
                            </figure>
                            <h4>Amelia Anna</h4>
                            <span class="designation">Martketer</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-block-two">
                    <div class="inner-box">
                        <div class="text">
                            <p>“ Lorem ipsum dolor sit amet con sectetur adipic eksed do eiusm od tempor incid.”</p>
                        </div>
                        <div class="author-info">
                            <figure class="author-thumb"><img src="assets/images/resource/testimonial-4.png" alt="">
                            </figure>
                            <h4>Paolo Dybala</h4>
                            <span class="designation">Martketer</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-block-two">
                    <div class="inner-box">
                        <div class="text">
                            <p>“ Lorem ipsum dolor sit amet con sectetur adipic eksed do eiusm od tempor incid.”</p>
                        </div>
                        <div class="author-info">
                            <figure class="author-thumb"><img src="assets/images/resource/testimonial-5.png" alt="">
                            </figure>
                            <h4>Samuel Daniels</h4>
                            <span class="designation">Martketer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="news-section pt-115">
        <div class="auto-container">
            <div class="sec-title centred">
                <p>News & Article</p>
                <h2>Stay Update With Docpro</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="00ms"
                         data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="assets/images/news/news-1.jpg" alt="">
                                <a href="blog-details" class="link"><i class="fas fa-link"></i></a>
                                <span class="category">Featured</span>
                            </figure>
                            <div class="lower-content">
                                <h3><a href="blog-details.html">Including animation in your design system</a></h3>
                                <ul class="post-info">
                                    <li><img src="assets/images/news/admin-1.png" alt=""><a href="index.html">Eva
                                            Green</a></li>
                                    <li>April 10, 2020</li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                <div class="link"><a href="blog-details.html"><i class="icon-Arrow-Right"></i></a></div>
                                <div class="btn-box"><a href="blog-details.html" class="theme-btn-one">Read more<i
                                            class="icon-Arrow-Right"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="300ms"
                         data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="assets/images/news/news-2.jpg" alt="">
                                <a href="blog-details" class="link"><i class="fas fa-link"></i></a>
                                <span class="category">Featured</span>
                            </figure>
                            <div class="lower-content">
                                <h3><a href="blog-details.html">Baking can be done with a few things.</a></h3>
                                <ul class="post-info">
                                    <li><img src="assets/images/news/admin-2.png" alt=""><a href="index.html">George
                                            Clooney</a></li>
                                    <li>April 09, 2020</li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                <div class="link"><a href="blog-details.html"><i class="icon-Arrow-Right"></i></a></div>
                                <div class="btn-box"><a href="blog-details.html" class="theme-btn-one">Read more<i
                                            class="icon-Arrow-Right"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="600ms"
                         data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="assets/images/news/news-3.jpg" alt="">
                                <a href="blog-details" class="link"><i class="fas fa-link"></i></a>
                                <span class="category">Featured</span>
                            </figure>
                            <div class="lower-content">
                                <h3><a href="blog-details.html">Great food is not just eating energy.</a></h3>
                                <ul class="post-info">
                                    <li><img src="assets/images/news/admin-3.png" alt=""><a href="index.html">George
                                            Clooney</a></li>
                                    <li>April 08, 2020</li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                <div class="link"><a href="blog-details.html"><i class="icon-Arrow-Right"></i></a></div>
                                <div class="btn-box"><a href="blog-details.html" class="theme-btn-one">Read more<i
                                            class="icon-Arrow-Right"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="agent-section">
        <div class="auto-container">
            <div class="inner-container bg-color-2">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 left-column">
                        <div class="content_block_3">
                            <div class="content-box">
                                <h3>Emergency call</h3>
                                <div class="support-box">
                                    <div class="icon-box"><i class="fas fa-phone"></i></div>
                                    <span>Telephone</span>
                                    <h3><a href="tel:11165458856">+(111) 65_458_856</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 right-column">
                        <div class="content_block_4">
                            <div class="content-box">
                                <h3>Sign up for Email</h3>
                                <form action="index.html" method="post" class="subscribe-form">
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Your Email" required="">
                                        <button type="submit" class="theme-btn-one">Submit now<i
                                                class="icon-Arrow-Right"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
