<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;

class Language
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (session('applocale')) {
            $configLanguage = config('lang')[session('applocale')];
            setlocale(LC_TIME, $configLanguage[1].'.utf8');
            Carbon::setLocale(session('applocale'));
            \App::setLocale(session('applocale'));
        } else {
            session()->put('applocale', config('app.fallback_locale'));
            setlocale(LC_TIME, 'en_US.utf8');
            Carbon::setLocale(session('applocale'));
            \App::setLocale(session('app.fallback_locale'));
        }
        return $next($request);
    }
}
