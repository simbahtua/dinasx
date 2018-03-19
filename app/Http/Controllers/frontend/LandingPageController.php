<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\frontend\URL;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use DB;
Use View;

class LandingPageController extends Controller {

    function index() {
        // $data ['slider'] = DB::table('app_home_sliders')
        //         ->orderBy('order', 'asc')
        //         ->limit('5')
        //         ->get();
        
        // return \View::make('frontend.landingpage', $data);
        return \View::make('frontend.landingpage');
    }

}
