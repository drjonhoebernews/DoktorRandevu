@extends('layouts.app')

@section('content')
<section class="registration-section bg-color-3">
    <div class="pattern">
        <div class="pattern-1" style="background-image: url(assets/images/shape/shape-85.png);"></div>
        <div class="pattern-2" style="background-image: url(assets/images/shape/shape-86.png);"></div>
    </div>
    <div class="auto-container">
        <div class="inner-box">
            <div class="content-box">
                <div class="title-box">
                    <h3>KULLANICI KAYDI</h3>
                    <a href="#">Doktormusunuz?</a>
                </div>
                <div class="inner">
                    <form method="POST" action="{{ route('register') }}" class="registration-form">
                            @csrf
                            <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <label>Ad Soyad</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <label>E-Posta</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <label>Şifre</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <label>Şifre Tekrar</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <div class="custom-check-box">
                                    <div class="custom-controls-stacked">
                                        <label class="custom-control material-checkbox">
                                            <input type="checkbox" class="material-control-input">
                                            <span class="material-control-indicator"></span>
                                            <span class="description">I accept <a href="book-appointment.html">terms</a> and <a href="book-appointment.html">conditions</a> and general policy</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                <button type="submit" class="theme-btn-one">KAYIT OL<i class="icon-Arrow-Right"></i></button>
                            </div>
                        </div>
                    </form>
                    <div class="login-now"><p>Hesabınız varsa ? <a href="{{route('login')}}">Giriş Yap</a></p></div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
