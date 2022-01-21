@php
$page_title = config('page_title');
@endphp
@extends('customer.layouts.app')

@section('title', '- ' . $page_title)

@section('content')
    <div class="container" id="pretty" data-aos="fade-up" data-aos-duration="1300">
        <div class="row justify-content-center">
            <div class="col-6 col-md-3 col-lg-2 p-2">
                <img class="img-fluid" src="{{ url('assets/images/element/sport.png') }}">
            </div>
            <div class="col-6 col-md-3 col-lg-2 p-2" data-aos="fade-up">
                <img class="img-fluid" src="{{ url('assets/images/element/casino.png') }}">
            </div>
            <div class="col-6 col-md-3 col-lg-2 p-2" data-aos="fade-up">
                <img class="img-fluid" src="{{ url('assets/images/element/slots.png') }}">
            </div>
            <div class="col-6 col-md-3 col-lg-2 p-2" data-aos="fade-up">
                <img class="img-fluid" src="{{ url('assets/images/element/card-game.png') }}">
            </div>
        </div>
    </div>

    <section id="content">
        <div class="container">
            <div class="row justify-content-center py-md-5 py-3">
                <div class="col-md-2 d-md-block d-none align-self-md-center">
                    <div class="half-circle-left ml-auto"></div>
                </div>
                <div class="col-md-8 align-self-center">
                    <div class="owl-carousel owl-theme" data-aos="zoom-in" data-aos-duration="2000" id="promotion">
                      
                        @foreach ($promotions as $p)
                        <div class="item">
                            <img class="img-fluid" src="{{ $p['image'] }}" alt="{{ $p['name'] }}">
                        </div>
                        @endforeach
                       
                    </div>
                </div>
                <div class="col-md-2  d-md-block d-none align-self-md-center">
                    <div class="half-circle-right mr-auto"></div>
                </div>
            </div>
        </div>
    </section>

    <section id="slot">
        <div class="container bg-slot">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-5">
                    <img class="img-fluid" src="{{ url('assets/images/element/pic_pig.png') }}">
                </div>
                <div class="col-md-12 col-lg-7 align-self-center">
                    <h2 class="text-white">
                        เว็บสล็อตออนไลน์ เล่นง่ายผ่านมือถือทุกระบบ บริการตลอด 24 ชม.
                    </h2>
                    <p class="slot-description py-3">
                        เว็บสล็อตออนไลน์ เล่นคาสิโนออนไลน์
                        เราคือเว็บผู้ให้บริการหลักของเว็บสล็อตออนไลน์ชั้นนำระดับประเทศ รวบรวมเว็บสล็อตทั้งไทยและเทศ
                        มาไว้ที่เดียว ทุกเว็บการันตีด้วยระบบพนันระดับมาตรฐานสากล ออกแบบระบบให้เข้าใจง่าย ใช้งานได้ทุกเพศ
                        ทุกวัน รองรับการเล่นทั้งเล่นผ่านคอมพิวเตอร์ และมือถือทุกระบบ
                        สามารถดาวโหลดน์แอฟมาลงไว้เพื่อเล่นได้ทั้งในมือถือระบบ IOS และ Andriod อยากเล่นเกมส์ ยิงปลา
                        เกมส์แข่งม้า เกมส์สล็อต เกมส์คาสิโน และเกมส์อื่นๆ มีให้เลือกมากกว่า 100 เกมส์
                    </p>
                </div>
            </div>
        </div>

        <div class="container my-4 bg-foot" data-aos="fade-up" data-aos-duration="1500">
            <div class="row">
                <div class="col-12">
                    <img class="img-fluid d-none d-md-block" src="{{ url('assets/images/element/cover-btm.png') }}"
                        alt="">
                    <img class="img-fluid d-md-none d-block" src="{{ url('assets/images/element/cover-btm-m.png') }}"
                        alt="">
                </div>
            </div>
        </div>

        <img class="img-fluid" src="{{ url('assets/images/element/foot_line.png') }}" alt="">
    </section>

    <section id="article">
        <div class="container pb-3">
            {{-- 1 --}}
            <div class="row bg-article-1 py-3 my-3">
                <div class="col-md-5">
                    <img class="img-fluid" src="{{ url('assets/images/element/pic_ct_01.png') }}" alt="">
                </div>
                <div class="col-md-7 text-white">
                    <h3 class="text-topic-article py-2 text-center text-md-left">เว็บพนันออนไลน์อันดับ 1</h3>
                    <div>
                        BIOGAME369.COM เว็บไซต์พนันแนวใหม่ ที่ใครๆก็ต้องเล่น ด้วยบริการที่ครบครันไม่ว่าจะเป็น แทงบอล
                        คาสิโนสด สล็อต ยิงปลา และ เกมไพ่
                        เกมเดิมพันออนไลน์มากมายถ่ายทอดสดจากสถานการณ์จริงตลอด 24 ชั่วโมงให้คุณได้เดิมพันจริงๆแบบเรียลไทม์
                        และมาแรงที่สุดในตอนนี้ด้วยความสร้างสีสันในการเดิมพันทำให้การเดิมพันของเว็บไซต์ BIOGAME369
                        เรานั้นเพลิดเพลินขึ้นอย่างแน่นอน
                        แถมยังเป็นที่นิยมที่ได้รับจากกลุ่มนักลงทุนมาอย่างยาวนานและด้วยฐานการเงินที่มั่นคงระบบฝาก-ถอน Auto
                        ได้ตลอด 24 ชั่วโมงกับเกมเดิมพันทั้งหมดนี้จึงทำให้เว็บไซต์ของเราเป็นเจ้าที่ดีที่สุดมาแรงที่สุดในปี
                        2022
                        และทางเรายังเปิดมาอย่างยาวนาน มีความน่าเชื่อถือเป็นอย่างมาก การเงินมั่นคง
                        และไม่มีประวัติการโกงแต่อย่างใด ปลอดภัยแน่นอน 100%
                    </div>
                </div>

            </div>

            {{-- 2 --}}
            <div class="row bg-article-2 py-3 my-3 flex-column-reverse flex-md-row">
                <div class="col-md-7 text-white">
                    <h3 class="text-topic-article py-2 text-center text-md-right ">แทงบอลออนไลน์</h3>
                    <div>
                        BIOGAME369.COM แทงบอลออนไลน์บนมือถือ ที่กำลังได้รับความนิยมอย่างสุด เพราะทางเราเปิดรับเดิมพันทุกคู่
                        ทุกรายการ ทั้งบอลลีกเล็ก ลีกใหญ่ บอลไลฟ์ บอลสเต็ป แทงบอลขั้นต่ำ 10 บาท ราคาบอลดีที่สุด​
                        เปิดราคาทุกอย่างไม่ว่าจะเป็น Asian Handicap(ต่อลูก) สูง-ต่ำ คู่-คี่ ประตูรวม เตะมุม 1×2 แทงสเต็ป
                        สเต็ปคอมโบ 2-12 คู่ บอลสด(football live ) มาตรฐานที่ทั่วโลกยอมรับ แทงบอลออนไลน์
                        ใบโอเกม369โดดเด่นในเรื่องของความมั่นคง ปลอดภัย รวด-เร็ว
                        จึงเป็นสัญลักษณ์ของการการันตีได้อย่างชัดเจนว่า เว็บแทงบอล
                        แห่งนี้ย่อมมีมาตรฐานในการให้บริการที่ยอดเยี่ยมและพร้อมที่จะสร้างประสบการณ์ที่ดีที่สุดให้กับท่านอย่างแน่นอน
                    </div>
                </div>
                <div class="col-md-5">
                    <img class="img-fluid" src="{{ url('assets/images/element/pic_ct_02.png') }}" alt="">
                </div>

            </div>

            {{-- 3 --}}
            <div class="row bg-article-1 py-3 my-3">
                <div class="col-md-5">
                    <img class="img-fluid" src="{{ url('assets/images/element/pic_ct_03.png') }}" alt="">
                </div>
                <div class="col-md-7 text-white">
                    <h3 class="text-topic-article py-2 text-center text-md-left">คาสิโนสด</h3>
                    <div>
                        BIOGAME369.COM แหล่งรวมคาสิโนระดับโลกที่อยากให้คุณมาสัมผัส พร้อมสาวสวยแจกไพ่ตลอด 24ชัวโมง
                        เราเป็นเว็บที่ให้เล่นคาสิโนสดออนไลน์ในรูปแบบมือถือ และบนคอมพิวเตอร์ มี บาคาร่า เกมส์สล็อต เสือ มังกร
                        มีให้เล่นมากในเกมส์ ทั้งนี้ค่ายดังที่มีบริการลูกค้า SA GAMING,SEXY BARCARAT,PRETTY GAMING,ALL BET
                        เป็นต้น สามารถเลือกเล่นได้หลากหลายรูปแบบ มีระบบฝากถอน เงิน ออโต้ที่สเถรียนที่สุด
                        สามารถทำรายการไม่เกิน 1 นาที าสามารถ ฝาก ถอนได้ตลอดเวลา 24 ชั่วโมง เว็บ www.biogame369.com
                        เล่นบาคาร่าออนไลน์ เสือ-มังกร คาสิโนสด ได้ตลอด 24 ชั่วโมง
                    </div>
                </div>

            </div>

            {{-- 4 --}}
            <div class="row bg-article-2 py-3 my-3 flex-column-reverse flex-md-row">
                <div class="col-md-7 text-white">
                    <h3 class="text-topic-article py-2 text-center text-md-right ">สล็อตออนไลน์</h3>
                    <div>
                        BIOGAME369.COM มีสล็อตออนไลน์ -ยิงปลาออนไลน์ ให้ลูกค้าเลือกเล่นมากกว่า 50 ค่าย
                        สามารถเล่นเกมสล็อตออนไลน์
                        เล่นง่ายได้เงินจริงได้เงินมากกว่าที่เคยได้ด้วยโบนัสเพียงแค่เล่นผ่านมือถือหรือคอมพิวเตอร์ที่เชื่อมต่อกับอินเตอร์เน็ตก็สามารถเข้าร่วมสนุกเพลิดเพลินคลายเครียดได้แล้วและนอกจากนี้ก็ยังรองรับทุกระบบไม่ว่าจะเป็น
                        ไอโอเอสและแอนดรอย์
                        เรียกได้ว่าตอบโจทย์ที่สุดในความต้องการของทุกๆท่านที่ในสมัยนี้รักความสะดวกสบายในการเดิมพันเล่นได้ทุกเวลาไม่มีวันเบื่อด้วยรูปแบบเกมสล็อตแนวใหม่หลากหลายแบบจะพาคุณไปสู่โลกแห่งความสนุกแบบไม่มีวันหยุด
                    </div>
                </div>
                <div class="col-md-5">
                    <img class="img-fluid" src="{{ url('assets/images/element/pic_ct_04.png') }}" alt="">
                </div>

            </div>

            {{-- 5 --}}
            <div class="row bg-article-1 py-3 my-3">
                <div class="col-md-5">
                    <img class="img-fluid" src="{{ url('assets/images/element/pic_ct_05.png') }}" alt="">
                </div>
                <div class="col-md-7 text-white">
                    <h3 class="text-topic-article py-2 text-center text-md-left">BIOGAME369</h3>
                    <div>
                        BIOGAME369.COM ผู็ให้บริการเว็บพนัน BIOGAMING
                        เว็บคาสิโนออนไลน์ชั้นนำซึ่งให้บริการอย่างซื่อสัตย์และโด่งดังจนกลายมาเป็นเว็บพนันแนวหน้าของภูมิภาคเอเชียที่เราอาศัยอยู่มีมาตรฐานการให้บริการระดับสากล
                        มีการนำเสนอประสบการณ์การ แทงบอลออนไลน์ คาสิโนสด บาคาร่าออนไลน์ สล็อต-ยิงปลา
                        คุณภาพสูงมีให้เลือกเล่นมากมายหลากหลาย
                        เพื่อที่จะให้ผู้เดิมพันเพลิดเพลินสนุกสนานผ่อนคายผ่านเว็บพนันออนไลน์เจ้าต่างๆ
                        เป็นเว็บไซต์การลงทุนทางออนไลน์ที่เน้นเรื่องความคังคง ปลอดภัย ของลูกค้าเป็นหลัก biogame369
                        สามารถหารายได้เสริมแถมยังเป็นเว็บพนันที่มาแรงมีชื่อเสียงดังไปทั่วโลกตอบสนองความต้องการของนักพนันเป็นอย่างมาก
                        <br>
                        คุณภาพเกมภาพเสียงต่างๆอยู่ในระดับพิมพ์เมี่ยมอย่างแน่นอนรับประกัน 100%
                        และเกมทั้งหมดนี้ก็สามารถวางเงินเดิมพันสร้างกำไรสร้างรายได้เข้ากระเป๋าเมื่อคุณเล่น biogaming ใบโอ369
                        จะให้ทั้งความสนุกและเงิน อย่างที่เว็บอื่นๆไม่มีอีกด้วย
                    </div>
                </div>

            </div>

            {{-- 6 --}}
            <div class="row bg-article-2 py-3 my-3 flex-column-reverse flex-md-row">
                <div class="col-md-7 text-white">
                    <h3 class="text-topic-article py-2 text-center text-md-right ">เว็บพนันบนมือถือ จบครบในที่เดียว</h3>
                    <div>
                        เว็บพนันบนมือถือ จบครบในที่เดียว
                        ไม่ต้องไปตามหาที่ไหนแล้ว BIOGAME369 นำเสนอทุกอย่างให้ลูกค้าทุกคน
                        การลงทุนหาเงินบนช่องทางออนไลน์ถือเป็นช่องทางสำคัญที่มองข้ามไม่ได้
                        พวกเรา biogame369 ขอมอบประสบการณ์ที่สดใหม่ด้วยสุดยอดเว็บไซต์เกมพนันระดับโลก ทั้งคุณภาพ แสง สี เสียง
                        ที่ดีกว่าเจ้าอื่นในประเทศไทย พร้อมด้วยเกมเดิมพัน 5 ประเภท
                        ครอบคลุมเกมพนันทุกรูปแบบที่คุณกำลังตามหา ไม่ว่าจะเป็น แทงบอล,ESPORT, คาสิโนสด บาคาร่า
                        หรือสล็อตออนไลน์ แถมเรายังมีระบบฝาก-ถอน ออโต้ ที่รวดเร็ว
                        พร้อมด้วยแอดมินที่น่ารักคอยบริการลูกค้าทุกท่านตลอด 24 ชั่วโมง </div>
                </div>
                <div class="col-md-5">
                    <img class="img-fluid" src="{{ url('assets/images/element/pic_ct_06.png') }}" alt="">
                </div>
            </div>
        </div>
        <img class="img-fluid" src="{{ url('assets/images/element/foot_line.png') }}" alt="">
    </section>
@endsection
