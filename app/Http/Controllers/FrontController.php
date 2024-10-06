<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ipinfo\ipinfo\IPinfo;


class FrontController extends Controller
{
    public function index()
    {
        return view('front.index');
    }

    public function setCity(Request $request)
    {
        $request->session()->put('city', $request->city);
        return redirect()->back();
    }

    public function detectCity(Request $request)
    {
        $client = new IPinfo();
        $details = $client->getDetails($request->ip());
        dd($details);
        $city = $details->city;
        return response()->json(['city' => $city]);
    }
}
