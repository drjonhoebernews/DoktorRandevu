@extends('layouts.app')

@section('css')
    <link href="/assets/css/nice-select.css" rel="stylesheet">
@endsection
@section('content')
    <section class="page-title-two">
        <div class="lower-content">
            <div class="auto-container">
                <div class="bread-crumb-top">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{route('main')}}">Anasayfa</a></li>
                        <li>Doktor Listesi</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="clinic-section doctors-page-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="bread-crumb-top">
                        <div class="item-shorting clearfix">
                            <div class="left-column pull-left">
                                <h4 style="font-size: 15px">Toplam {{$liste->lastPage()}} sayfa da {{count($liste)}} ar adet <b>DOKTOR</b> gösteriliyor..</h4>
                            </div>
                        </div>
                    </div>
                    <div class="wrapper list">
                        <div class="clinic-list-content list-item">
                            @foreach($liste as $doktor)
                                <div class="clinic-block-one">
                                    <div class="inner-box">
                                        <div class="pattern">
                                            <div class="pattern-1" style="background-image: url(/assets/images/shape/shape-24.png);"></div>
                                            <div class="pattern-2" style="background-image: url(/assets/images/shape/shape-25.png);"></div>
                                        </div>
                                        <figure class="image-box"><img src="/assets/images/team/team-1.jpg" alt=""></figure>
                                        <div class="content-box">
                                            <div class="like-box"><a href="{{route('doctor')}}"><i class="far fa-heart"></i></a></div>
                                            <ul class="name-box clearfix">
                                                <li class="name"><h3><a href="{{route('doctor',$doktor->id)}}">{{$doktor->adinfo}}</a></h3></li>
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
                            data-icon-path="/assets/images/icons/map-marker.png"
                            data-map-title="Brooklyn, New York, United Kingdom"
                            data-map-zoom="12"
                            data-markers='{
                                    "marker-1": [40.712776, -74.005974, "<h4>Branch Office</h4><p>77/99 New York</p>","/assets/images/icons/map-marker.png"]
                                }'>

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
