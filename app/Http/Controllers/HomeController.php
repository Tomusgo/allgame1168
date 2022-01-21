<?php

namespace App\Http\Controllers;

use App\SiteConfig;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        SiteConfig::getInstance();
        config([
            'page_description' => 'สล็อตออนไลน์ เล่นเกมส์สล็อต อันดับหนึ่ง Joker88th.net',
            'page_keyword' => 'slot, สล๊อต,เล่นเกมได้เงิน,slot007,slot999,jokerslot,joker123 ,สล็อตแจกเครดิตฟรีไม่ต้องฝาก , สล็อตออนไลน์,เกมส์สล็อต,เกมสล็อต,เกม slot,jackpotxo,เกมส์สล็อต,สล็อตออนไลน์มือถือ,เกมสล็อต,สล็อตออนไลน์ฟรี,เล่นเกมได้เงินจริง,สล็อตออนไลน์ได้เงินจริง,เกมส์สล็อตออนไลน์,เล่นสล็อตออนไลน์ฟรี,เล่นสล็อตออนไลน์ให้ได้เงิน,เกมส์สล็อตได้เงินจริง,เกมสล็อตออนไลน,slot live22,live22,scr888,scr888 แจกฟรี, 918kiss, 918kiss แจกฟรี'
        ]);
    }

    public function index(Request $request)
    {
        config([
            'page_title' => 'เกมส์มือถือออนไลน์ สล็อตออนไลน์ เกมส์ยิงปลา เล่นง่าย รวยจริง ได้เงินจริง : joker88th.net  เกมส์มือถือออนไลน์ เล่นง่าย รวยจริง ได้เงินจริง',
            'page_name' => 'home'
        ]);
        return view('customer.home', [
            'promotions' => SiteConfig::config('promotions', [])
        ]);
    }

    public function loadgame(Request $request)
    {
        config([
            'page_title' => 'เกมส์มือถือออนไลน์ สล็อตออนไลน์ เกมส์ยิงปลา เล่นง่าย รวยจริง ได้เงินจริง : joker88th.net  เกมส์มือถือออนไลน์ เล่นง่าย รวยจริง ได้เงินจริง',
            'page_name' => 'loadgame'
        ]);
        return view('customer.loadgame');
    }

    public function contact(Request $request)
    {
        $line_link = trim(SiteConfig::config('line_link'));
        if ($line_link) {
            return redirect($line_link);
        } else {
            return redirect(route('home'));
        }
    }

    public function login(Request $request)
    {
        $url = SiteConfig::config('login_url') ?? route('home');
        return redirect($url);
    }

    public function register(Request $request)
    {
        $url = SiteConfig::config('register_url') ?? route('home');
        return redirect($url);
    }
}
