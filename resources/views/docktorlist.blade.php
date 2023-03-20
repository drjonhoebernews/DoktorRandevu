@extends('layouts.app')

@section('css')
    <link href="/assets/css/nice-select.css" rel="stylesheet">
@endsection
@section('content')
    <section class="page-title-two">
        <div class="title-box centred bg-color-2">
            <div class="pattern-layer">
                <div class="pattern-1" style="background-image: url(assets/images/shape/shape-70.png);"></div>
                <div class="pattern-2" style="background-image: url(assets/images/shape/shape-71.png);"></div>
            </div>
            <div class="auto-container">
                <div class="title">
                    <h1>Doctors List</h1>
                </div>
            </div>
        </div>
        <div class="lower-content">
            <div class="auto-container">
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Home</a></li>
                    <li>Doctors List</li>
                </ul>
            </div>
        </div>
    </section>
    <div class="select-field bg-color-3">
        <div class="auto-container">
            <div class="content-box">
                <div class="form-inner clearfix">
                    <form action="index.html" method="post">
                        <div class="form-group clearfix">
                            <select class="wide">
                                <option data-display="Select Location">Select Location</option>
                                <option value="1">California</option>
                                <option value="2">New York</option>
                                <option value="3">Sun Francis</option>
                                <option value="4">Shicago</option>
                            </select>
                            <input type="text" name="name" placeholder="Ex. Name, Specialization..." required="">
                            <button type="submit"><i class="icon-Arrow-Right"></i></button>
                        </div>
                    </form>
                    <ul class="select-box clearfix">
                        <li>
                            <div class="single-checkbox">
                                <input type="radio" name="check-box" id="check1">
                                <label for="check1"><span></span>All</label>
                            </div>
                        </li>
                        <li>
                            <div class="single-checkbox">
                                <input type="radio" name="check-box" id="check2" checked="">
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
    </div>
    <section class="clinic-section doctors-page-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="item-shorting clearfix">
                        <div class="left-column pull-left">
                            <h3>Toplam {{count($liste)}} adet gösteriliyor</h3>
                        </div>
                        <div class="right-column pull-right clearfix">
                            <div class="short-box clearfix">
                                <div class="select-box">
                                    <select class="wide">
                                        <option data-display="Sort by">Sort by</option>
                                        <option value="1">Cardiology</option>
                                        <option value="2">Nurology</option>
                                        <option value="4">Pragnency</option>
                                    </select>
                                </div>
                            </div>
                            <div class="menu-box">
                                <button class="list-view on"><i class="icon-List"></i></button>
                                <button class="grid-view"><i class="icon-Grid"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="wrapper list">
                        <div class="clinic-list-content list-item">
                            @foreach($liste as $doktor)
                                <div class="clinic-block-one">
                                    <div class="inner-box">
                                        <div class="pattern">
                                            <div class="pattern-1" style="background-image: url(assets/images/shape/shape-24.png);"></div>
                                            <div class="pattern-2" style="background-image: url(assets/images/shape/shape-25.png);"></div>
                                        </div>
                                        <figure class="image-box"><img src="assets/images/team/team-1.jpg" alt=""></figure>
                                        <div class="content-box">
                                            <div class="like-box"><a href="{{route('doktor')}}"><i class="far fa-heart"></i></a></div>
                                            <ul class="name-box clearfix">
                                                <li class="name"><h3><a href="{{route('doktor',$doktor->id)}}">{{$doktor->adinfo}}</a></h3></li>
                                                <li><i class="icon-Trust-1"></i></li>
                                                <li><i class="icon-Trust-2"></i></li>
                                            </ul>
                                            <span class="designation">{{$doktor->uzmanlik}}</span>
{{--                                            <div class="text">--}}
{{--                                                <p>Lorem ipsum dolor sit amet consectur adipisc elit sed eiusmod tempor incididunt labore dolore magna.</p>--}}
{{--                                            </div>--}}
                                            <div class="rating-box clearfix">
                                                <ul class="rating clearfix">
                                                    <li><i class="icon-Star"></i></li>
                                                    <li><i class="icon-Star"></i></li>
                                                    <li><i class="icon-Star"></i></li>
                                                    <li><i class="icon-Star"></i></li>
                                                    <li><i class="icon-Star"></i></li>
                                                    <li><a href="doctors-details.html">(17)</a></li>
                                                </ul>
                                                <div class="link"><a href="doctors-details.html">24/7 Available</a></div>
                                            </div>
                                            <div class="location-box">
                                                <p><i class="fas fa-map-marker-alt"></i>{{$doktor->address}}</p>
                                            </div>
                                            <div class="btn-box"><a href="doctors-details.html">RANDEVU</a></div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="pagination-wrapper">
                        <ul class="pagination">
                            {{-- Previous Page Link --}}
                            @if ($liste->onFirstPage())
                                <li class="disabled"><span>&laquo;</span></li>
                            @else
                                <li><a href="{{ $liste->previousPageUrl() }}" rel="prev">&laquo;</a></li>
                            @endif

                            {{-- Pagination Elements --}}
                            @foreach ($liste->links()->elements as $element)
                                {{-- "Three Dots" Separator --}}
                                @if (is_string($element))
                                    <li class="disabled"><span>{{ $element }}</span></li>
                                @endif

                                {{-- Array Of Links --}}
                                @if (is_array($element))
                                    @foreach ($element as $page => $url)
                                        @if ($page == $liste->currentPage())
                                            <li class="active"><span>{{ $page }}</span></li>
                                        @else
                                            <li><a href="{{ $url }}">{{ $page }}</a></li>
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach

                            {{-- Next Page Link --}}
                            @if ($liste->hasMorePages())
                                <li><a href="{{ $liste->nextPageUrl() }}" rel="next">&raquo;</a></li>
                            @else
                                <li class="disabled"><span>&raquo;</span></li>
                            @endif
                        </ul>
                    </div>

                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    <div class="map-inner ml-10">
                        <div
                            class="google-map"
                            id="contact-google-map"
                            data-map-lat="40.712776"
                            data-map-lng="-74.005974"
                            data-icon-path="assets/images/icons/map-marker.png"
                            data-map-title="Brooklyn, New York, United Kingdom"
                            data-map-zoom="12"
                            data-markers='{
                                    "marker-1": [40.712776, -74.005974, "<h4>Branch Office</h4><p>77/99 New York</p>","assets/images/icons/map-marker.png"]
                                }'>

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
                                        <button type="submit" class="theme-btn-one">Submit now<i class="icon-Arrow-Right"></i></button>
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
@section('js')
    <!-- map script -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
    <script src="/assets/js/gmaps.js"></script>
    <script src="/assets/js/map-helper.js"></script>
@endsection
