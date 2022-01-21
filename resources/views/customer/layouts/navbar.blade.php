<header>
    <div class="nav-bg-mobile d-block fixed-bottom d-md-none">
        <ul class="nav-mobile">
            <li>
                <a href="{{ route('register') }}">

                    <img src="{{ url('assets/images/icon/bt-register.png') }}" class="ico-menu img-fluid d-block">
                </a>
            </li>
            <li>
                <a href="{{ route('login') }}">
                    <img src="{{ url('assets/images/icon/bt-login.png') }}" class="ico-menu img-fluid d-block">
                </a>
            </li>
            <li>
                <a href="{{ route('home') }}">
                    <img src="{{ url('assets/images/icon/bt-home.png') }}" class="ico-menu img-fluid d-block">
                </a>
            </li>
            <li>
                <a href="{{ route('loadgame') }}">
                    <img src="{{ url('assets/images/icon/bt-download.png') }}" class="ico-menu img-fluid d-block">
                </a>
            </li>
            <li>
                <a href="{{ route('contact') }}" target="_blank">
                    <img src="{{ url('assets/images/icon/bt-contact.png') }}" class="ico-menu img-fluid d-block">
                </a>
            </li>
        </ul>
    </div>
    <div class="head-desktop">
        <!-- Navbar -->

        <nav class="navbar navbar-expand-lg navbar-light affix nav-bg" id="mainNav" data-toggle="affix">
            <div class="container" style="height: 73px;">
                <a class="navbar-brand smooth-scroll" href="{{ route('home') }}">
                    <img src="{{ url('assets/images/logogif.gif') }}" alt="logo" width="350px" class="img-logo d-block img-fluid">
                </a>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto" style="margin-top: 6px;">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}" style="font-size: 16px;">
                                <i class="fas fa-home" style="color:rgb(255, 255, 255)"></i>
                                <span style="color:rgb(255, 255, 255);text-shadow: 2px 2px #4a3b3b;"> หน้าหลัก </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}" style="font-size: 16px;">
                                <i class="fas fa-user-plus"
                                    style="color:rgb(255, 255, 255);text-shadow: 2px 2px #4a3b3b;"></i>
                                <span style="color:rgb(255, 255, 255)"> สมัคร </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('loadgame') }}" style="font-size: 16px;">
                                <i class="fas fa-download"
                                    style="color:rgb(255, 255, 255);text-shadow: 2px 2px #4a3b3b;"></i>
                                <span style="color:rgb(255, 255, 255)"> โหลดเกมส์ </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}" style="font-size: 16px;"
                                target="_blank">
                                <i class="fab fa-line"
                                    style="color:rgb(255, 255, 255);text-shadow: 2px 2px #4a3b3b;"></i>
                                <span style="color:rgb(255, 255, 255)"> ติดต่อเรา </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}" style="font-size: 16px;">
                                <i class="fas fa-sign-in-alt" style="color:rgb(255, 255, 255)"></i>
                                <span style="color:rgb(255, 255, 255)"> เข้าสู่ระบบ </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>