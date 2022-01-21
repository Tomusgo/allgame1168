@php
$page_title = config('page_title');
@endphp
@extends('customer.layouts.app')

@section('title', '- '.$page_title)

@section('custom-style')
<style>
body {
    background-image: url("{{ url('assets/images/bgall5e1f.jpg') }}");
    height: 100%; 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
@endsection

@section('main')
<div id="main" class="container-fluid">
    <div class="container ">
        <img class="d05s bounceInUp animated img-fluid" data-animation="bounceInUp" src="{{ url('assets/images/img-mobile.png') }}"
            alt="Los Angeles">
    </div>
</div>
<div class="container">
    <div class="head-content">
        <h2 class="title text-center">
            <i class="fas fa-home"></i> เกมส์สล็อตออนไลน์</h2>
        <h3 class="title text-center">ดาวน์โหลดเกมส์</h3>
    </div>
    <div class="body-content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12"><img src="{{ url('assets/images/img-mobile.png') }}"
                        alt="Responsive image" class="secondary-banner p-1 w-100 img-fluid float-left"></div>

                <div class="col-md-6 col-12">
                    <h1 class="playgame-font-color">Pgslot เล่นได้ทุกระบบ</h1>
                    <h2 class="playgame-font-color"> เล่นง่าย ที่ไหนก็ได้ ไม่ต้องโหลดแอปก็เล่นได้
                    </h2>
                    <p> เล่นได้แล้ววันนี้! ทั้งมือถือสมาร์ทโฟน และแท็บเล็ต รองรับทุกระบบปฏิบัติการ
                        iOS, Android, Window, Mac หรือสามารถดาวน์โหลด และติดตั้ง Application ได้ง่ายๆ เพียงคลิกเดียว
                    </p>
                    <p> ผู้นำแห่งเกมสล็อตคุณภาพ ผู้ใช้มากกว่า 20,000+ ยูสเซอร์บนระบบ
                        และยังมีเกมส์อีกมากมาย เช่น เกมโป๊กเกอร์ เกมบอร์ด เกมยิงปลาที่มีระบบเกมส์อย่างทันสมัย
                        ลูกค้าสามารถเพลิดเพลินกับการเล่นเกมส์ที่เข้าใจง่าย สะดวกสบาย ที่สำคัญระบบปลอดภัย
                        ไม่มีข้อบกพร่องใด ๆ ทั้งสิ้น </p>
                </div>
            </div>
            <div class="separate-line my-3"></div>
            <div class="d-flex justify-content-center mt-3">
                <img src="{{ url('assets/images/download.png') }}" alt="Responsive image"
                    class="download-img img-fluid float-left" width="150px">
            </div>
            <div class="playgame-font-color mt-4"> ดาวน์โหลด และ ติดตั้ง Pgslot APP </div>
            <div class="container row justify-content-center mt-2">
                <div class="download-button px-3 disable-select">
                    <a href="https://pgslot.co/games/login_mobile_v6/" target=" _blank">
                        <span>
                            <i aria-label="icon: android" class="mr-2 anticon anticon-android">
                            </i>
                            Android
                        </span>
                    </a>
                </div>
            </div>
        </div>

        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="story-himg wow zoomInDown" data-wow-delay="0.1s">
                        <img src="{{ url('assets/images/img-mobile.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-md-8 wow fadeInUp" data-wow-delay="0.4s">
                    <p>
                        <a href="index.html" class="text-danger">PG3339.CLUB</a>
                        <strong class="text-warning">สล็อตออนไลน์</strong> เกมสล็อตของเราเป็นของค่าย joker.
                        <strong>สล็อตออนไลน์</strong> เราคือ ผู้ให้บริการเกมส์คาสิโนออนไลน์ สล็อต PG3339.CLUB สล็อต
                        ยิงปลา บาคาร่า
                        casino สด
                        <br> แจกเครดิตฟรีทุกวันๆละ 50 บาท เกมสล็อตมือถือ สามารถรองรับบนมือถือทั้ง iOS และ Android
                        ที่สำคัญ PGSLOT
                        ของเราแจ็คพ็อตแตก...แจกทุกวัน
                        <br>ถอนเป็นล้านก็จ่าย เราให้การันตรีการเงินไม่ผ่านเอเย่น
                        <strong>ระบบฝาก-ถอน ทำงานด้วยระบบอัตโนมัติ 24ชม.</strong> สล็อตฝากถอนออโต้ รอเพียง 1-2 นาที
                        ท่านสามารถเล่นได้เลย
                        มีทีมงานดูแลตลอด 24 ชม. ทำให้ท่านไม่ต้องเดินทางไปเล่น สล็อต ยิงปลา บาคาร่า เสือมังกร รูเล็ท
                        แข่งม้า
                        ไฮโล เกมคาสิโน ไปเล่นที่บ่อนต่างประเทศเลย เพียงแค่เริ่มต้นฝากเงินกับ
                        <a href="{{ route('home') }}">PG3339.CLUB </a> ก็เหมือนได้นั่งเล่นอยู่ในบ่อน สะดวกสบายกว่าด้วย
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-content">
        <p>
            © PG3339.CLUB
        </p>
    </div>

</div>
@endsection

@section('custom-script')
<script type="text/javascript">
</script>
@endsection