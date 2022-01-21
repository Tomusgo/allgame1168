@php
$game_partners = [
    '1' => 'assets/images/element/partner/game_01.png',
    '2' => 'assets/images/element/partner/game_02.png',
    '3' => 'assets/images/element/partner/game_03.png',
    '4' => 'assets/images/element/partner/game_04.png',
    '5' => 'assets/images/element/partner/game_05.png',
    '6' => 'assets/images/element/partner/game_06.png',
    '7' => 'assets/images/element/partner/game_07.png',
    '8' => 'assets/images/element/partner/game_08.png',
    '9' => 'assets/images/element/partner/game_09.png',
    '10' => 'assets/images/element/partner/game_10.png',
    '11' => 'assets/images/element/partner/game_11.png',
    '12' => 'assets/images/element/partner/game_12.png',
];
@endphp

<section id="footer" class="pb-3">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="owl-carousel owl-theme" id="game_partner">
                    @foreach ($game_partners as $game)
                        <div class="item">
                            <img src="{{ url($game) }}" style="max-width: 90px;">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <img class="img-fluid" src="{{ url('assets/images/element/light.png') }}">
                <div class="text-white">
                    Copyright © 2022 | BIOGAME369 | All Rights Reserved
                </div>
                <img class="img-fluid" src="{{ url('assets/images/element/light.png') }}">
            </div>
        </div>
    </div>
</section>
