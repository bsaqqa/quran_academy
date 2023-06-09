<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $acceptLanguage = $request->header('accept-language') ?? 'ar';
        // handle browser language if it's not supported
        if (!in_array($acceptLanguage, ['ar', 'en'])) {
            $acceptLanguage = 'ar';
        }
        app()->setLocale($acceptLanguage);
        return $next($request);
    }
}
