<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
class SetLanguage
{
    public function handle($request, Closure $next)
    {
        $language = Session::get('language', 'az');
        App::setLocale($language);

        return $next($request);
    }
}

