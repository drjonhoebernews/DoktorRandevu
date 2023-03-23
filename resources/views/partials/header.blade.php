<header class="main-header style-two">
    <div class="header-lower">
        <div class="auto-container">
            <div class="outer-box">
                <div class="logo-box">
                    <figure class="logo"><a href="{{route('main')}}"><img src="/assets/images/logo-3.png" alt=""></a></figure>
                </div>
                <div class="menu-area">
                    <div class="mobile-nav-toggler">
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                    </div>
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li><a href="{{route('uzman-listesi')}}">Uzmanlar</a></li>
                                <li><a href="/blog">Blog</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <style>
                    .btn-box a {
                        display: inline-block;
                        margin-right: 10px;
                    }
                </style>
                <div class="btn-box">
                    <a href="{{ route('login') }}" class="theme-btn-one"><i class="fas fa-user-check"></i>Giriş Yap</a>
                    <a href="{{ route('register') }}" class="theme-btn-one"><i class="fas fa-user-plus"></i>Kayıt Ol</a>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-header">
        <div class="auto-container">
            <div class="outer-box">
                <div class="logo-box">
                    <figure class="logo"><a href="{{route('main')}}"><img src="/assets/images/small-logo.png" alt=""></a></figure>
                </div>
                <div class="menu-area">
                    <nav class="main-menu clearfix">
                    </nav>
                </div>
                <style>
                    .btn-box a {
                        display: inline-block;
                        margin-right: 10px;
                    }
                </style>
                <div class="btn-box">
                    <a href="{{ route('login') }}" class="theme-btn-one"><i class="fas fa-user-check"></i>Giriş Yap</a>
                    <a href="{{ route('register') }}" class="theme-btn-one"><i class="fas fa-user-plus"></i>Kayıt Ol</a>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="mobile-menu">
    <div class="menu-backdrop"></div>
    <div class="close-btn"><i class="fas fa-times"></i></div>

    <nav class="menu-box">
        <div class="nav-logo"><a href="index.html"><img src="/assets/images/logo-2.png" alt="" title=""></a></div>
        <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
        <div class="contact-info">
            <h4>Contact Info</h4>
            <ul>
                <li>Chicago 12, Melborne City, USA</li>
                <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                <li><a href="mailto:info@example.com">info@example.com</a></li>
            </ul>
        </div>
        <div class="social-links">
            <ul class="clearfix">
                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                <li><a href="#"><span class="fab fa-youtube"></span></a></li>
            </ul>
        </div>
    </nav>
</div>
