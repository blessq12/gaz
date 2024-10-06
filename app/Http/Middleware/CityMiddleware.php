<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\City;
use Illuminate\Support\Facades\View;

class CityMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!session('city')) {
            session()->put('city', 'tomsk');
        }

        $company = City::where('uri', session('city'))->first();
        View::share('company', $company);

        return $next($request);
    }
}
