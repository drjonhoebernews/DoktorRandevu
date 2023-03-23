@extends('layouts.app')

@section('css')
    <link href="/assets/css/nice-select.css" rel="stylesheet">
@endsection
@section('content')
    <!-- appointment-section -->
    <section class="appointment-section bg-color-3">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 col-sm-12 left-column">
                    <div class="appointment-information">
                        <div class="title-box">
                            <h3>Randevu Al</h3>
                        </div>
                        <div class="inner-box">
                            <div class="information-form">
                                <form action="book-appointment.html" method="post">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Adınız</label>
                                            <input type="text" name="first_name" required>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group" required>
                                            <label>Soyadınız</label>
                                            <input type="text" name="last_name">
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <label>E-Posta</label>
                                            <input type="email" name="email">
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <label>Telefon</label>
                                            <input type="text" name="phone" required maxlength="11">
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 single-column">
                                            <div class="custom-check-box">
                                                <div class="custom-controls-stacked">
                                                    <label class="custom-control material-checkbox">
                                                        <input type="checkbox" class="material-control-input">
                                                        <span class="material-control-indicator"></span>
                                                        <span class="description">Verdiğim bilgilerin doğruluğundan eminim randevumu onaylamak istiyorum.</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 single-column">
                                            <div class="custom-check-box">
                                                <div class="custom-controls-stacked">
                                                    <label class="custom-control material-checkbox">
                                                        <input type="checkbox" class="material-control-input">
                                                        <span class="material-control-indicator"></span>
                                                        <span class="description">Kampanya, reklam, promosyon, gibi ticari elektronik iletilerin (SMS) tarafıma iletilmesine ve bu kapsamda verilerimin işlenmesine onay veriyorum</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 right-column">
                    <div class="booking-information">
                        <div class="title-box">
                            <h3>Randevu Bilgileri</h3>
                        </div>
                        <div class="inner-box">
                            <div class="single-box">
                                <ul class="clearfix">
                                    <li>Date<span>07/10/2020</span></li>
                                    <li>Time<span>09:30AM</span></li>
                                    <li>Doctor name<span>Dr. Agnes Ayres</span></li>
                                </ul>
                            </div>
                            <div class="single-box">
                                <ul class="clearfix">
                                    <li>General Consultation<span>$50</span></li>
                                    <li>Back Pain<span>$60</span></li>
                                </ul>
                            </div>
                            <div class="total-box">
                                <h5>Total<span>$110</span></h5>
                            </div>
                        </div>
                        <div class="btn-box">
                            <a href="confirm.html" class="theme-btn-one">Randevu ONAYLA<i class="icon-Arrow-Right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- appointment-section end -->
@endsection
@section('js')

@endsection
