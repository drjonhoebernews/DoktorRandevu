@extends('admin.layout.adminapp')
@section('css')

@endsection
@section('content')
    <!-- doctors-dashboard -->
    <section class="doctors-dashboard bg-color-3">
        <div class="left-panel">
            <div class="profile-box">
                <div class="upper-box">
                    <figure class="profile-image"><img src="/assets/images/resource/profile-2.png" alt=""></figure>
                    <div class="title-box centred">
                        <div class="inner">
                            <h3>{{$doctor->adinfo }}</h3>
                            <p>{{$doctor->uzmanlik }}</p>
                        </div>
                    </div>
                </div>
                <div class="profile-info">
                    <ul class="list clearfix">
                        <li><a href="{{route('admin.doctor')}}"><i class="fas fa-columns"></i>Dashboard</a></li>
                        <li><a href="#"><i class="fas fa-calendar-alt"></i>Appointments</a></li>
                        <li><a href="#"><i class="fas fa-wheelchair"></i>My Patients</a></li>
                        <li><a href="#" class="current"><i class="fas fa-plus-circle"></i>Add Listing</a></li>
                        <li><a href="#"><i class="fas fa-clock"></i>Schedule Timing</a></li>
                        <li><a href="#"><i class="fas fa-star"></i>Reviews</a></li>
                        <li><a href="#"><i class="fas fa-comments"></i>Messages</a><span>20</span></li>
                        <li><a href="#"><i class="fas fa-user"></i>My Profile</a></li>
                        <li><a href="#"><i class="fas fa-unlock-alt"></i>Change Password</a></li>
                        <li><a href="#"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="right-panel">
            <div class="content-container">
                <div class="outer-container">
                    <div class="add-listing">
                        <div class="single-box">
                            <div class="title-box">
                                <h3>Bilgiler</h3>
                            </div>
                            <div class="inner-box">
                                <form action="{{route('admin.doctor.edit',$doctor->id)}}" method="post">
                                    @csrf
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>AD SOYAD ÜNVAN</label>
                                            <input type="text" name="adinfo" value="{{$doctor->adinfo }}" required="">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Uzmanlık</label>
                                            <input type="text" name="uzmanlik" value="{{$doctor->uzmanlik }}" required="">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>İLÇE İL</label>
                                            <input type="text" name="ilinfo" value="{{$doctor->ilinfo }}" required="">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Klinik</label>
                                            <input type="text" name="klinik" value="{{$doctor->klinik }}" required="">
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <label>Profil Fotoğrafı</label>
                                            <input type="file" name="uploaded_file">
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <label>Adres</label>
                                            <textarea name="address" value="{{$doctor->address }}"></textarea>
                                        </div>
                                    </div>

                                    <div class="btn-box mt-3">
                                        <button type="submit" class="theme-btn-one">KAYDET<i class="icon-Arrow-Right"></i></button>
                                        <a href="#" class="cancel-btn">İPTAL</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="single-box">
                            <div class="title-box">
                                <h3>Address</h3>
                                <a href="add-listing.html" class="menu"><i class="icon-Dot-menu"></i></a>
                            </div>
                            <div class="inner-box">
                                <form action="add-listing.html" method="post">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>City</label>
                                            <input type="text" name="city" placeholder="Enter your City" required="">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Address</label>
                                            <input type="text" name="address" placeholder="Enter your Address" required="">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>State</label>
                                            <input type="text" name="state" placeholder="State" required="">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Zip code</label>
                                            <input type="text" name="zip" placeholder="Zip code" required="">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="single-box">
                            <div class="title-box">
                                <h3>Curriculum</h3>
                                <a href="add-listing.html" class="menu"><i class="icon-Dot-menu"></i></a>
                            </div>
                            <div class="inner-box">
                                <form action="add-listing.html" method="post">
                                    <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <label>Biography</label>
                                            <textarea name="message" placeholder="Enter your name"></textarea>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="single-box">
                            <div class="title-box">
                                <h3>Social Network Info</h3>
                                <a href="add-listing.html" class="menu"><i class="icon-Dot-menu"></i></a>
                                <a href="add-listing.html" class="theme-btn-one">Add More<i class="icon-image"></i></a>
                            </div>
                            <div class="inner-box">
                                <form action="add-listing.html" method="post">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Facebook URL</label>
                                            <input type="text" name="url" required="">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Twitter URL</label>
                                            <input type="text" name="url2" required="">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Google Plus URL</label>
                                            <input type="text" name="url3" required="">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Instagram URL</label>
                                            <input type="text" name="url4" required="">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="single-box">
                            <div class="title-box">
                                <h3>Pricing</h3>
                                <a href="add-listing.html" class="menu"><i class="icon-Dot-menu"></i></a>
                                <a href="add-listing.html" class="theme-btn-one">Add More<i class="icon-image"></i></a>
                            </div>
                            <div class="inner-box">
                                <form action="add-listing.html" method="post">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Treatment</label>
                                            <input type="text" name="treatment" required="">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>PriceL</label>
                                            <input type="text" name="price" required="">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Treatment</label>
                                            <input type="text" name="treatment2" required="">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Price</label>
                                            <input type="text" name="price2" required="">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="btn-box">
                            <a href="add-listing.html" class="theme-btn-one">KAYDET<i class="icon-Arrow-Right"></i></a>
                            <a href="add-listing.html" class="cancel-btn">İPTAL</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- doctors-dashboard -->
@endsection
@section('js')

@endsection
