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

    public function index(Request $request)
    {
        $client = new IPinfo();
        $details = $client->getDetails($request->ip());
        $city = $details->city;
        return view('front.index', compact('city'));
    }


    public function setCity(Request $request)
    {
        $request->session()->put('city', $request->city);
        return redirect()->back();
    }

    public function privacyPolicy()
    {
        return view('front.privacy-policy');
    }
}
