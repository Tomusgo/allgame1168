<?php

namespace App\Http\Controllers;

use App\SiteConfig;

class CoreController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function fetch_data() {
        return SiteConfig::fetch_data();
    }
}
