<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HockyController extends Controller
{
     public function leagues(){
        return view('front_end.pages.hocky.premier_league');
     }
}
