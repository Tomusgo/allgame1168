<header class="header">
    <nav class="navbar navbar-expand-md">
        <div class="container justify-content-end">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars fa-lg text-white"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link header-link" href="#">หน้าแรก</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link header-link" href="#content">โปรโมชัน</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link header-link" href="{{ url('/contact') }}">ติดต่อเรา</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="logo-web text-center">
        <a href="{{ url('/') }}">
            <img class="logo" src="{{ url('assets/images/element/logo_biogame369_green_org.png') }}"
                data-aos="zoom-in" data-aos-duration="2000">
        </a>
    </div>

    <div class="owl-carousel owl-theme" id="slide">
        <div class="item">
            <img class="img-fluid" src="{{ url('assets/images/element/slide_pro_01.png') }}">
        </div>
        <div class="item">
            <img class="img-fluid" src="{{ url('assets/images/element/slide_pro_02.png') }}">
        </div>
        <div class="item">
            <img class="img-fluid" src="{{ url('assets/images/element/slide_pro_03.png') }}">
        </div>
        <div class="item">
            <img class="img-fluid" src="{{ url('assets/images/element/slide_pro_04.png') }}">
        </div>

    </div>

    <div class="container mt-3" style="padding-bottom: 70px;">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-6 text-center">
                <a class="btn btn-register rounded-pill mx-2 my-1" href="{{ url('/register') }}">
                    สมัครสมาชิก
                </a>
                <a class="btn btn-login rounded-pill mx-2 my-1" href="{{ url('/login') }}" target="_blank">
                    เข้าสู่ระบบ
                </a>
            </div>
        </div>
    </div>
    
</header>
