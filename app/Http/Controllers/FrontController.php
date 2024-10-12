<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ipinfo\ipinfo\IPinfo;


class FrontController extends Controller
{
    public function __construct()
    {
        $this->middleware('city');
    }

    public function index(Request $request, $city = null)
    {

        return view('front.index', compact('city'));
    }


    public function setCity(Request $request)
    {
        $request->session()->put('city', $request->city);
        return redirect()->route('front.index');
    }

    public function privacyPolicy()
    {
        return view('front.privacy-policy');
    }
}
