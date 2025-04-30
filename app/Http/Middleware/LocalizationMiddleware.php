<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LocalizationMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // First check cookie (doesn't need session)
        $locale = $request->cookie('locale');

        // Then check session if cookie not found
        if (!$locale && $request->hasSession()) {
            $locale = $request->session()->get('locale');
        }

        // Fallback to browser preference or default
        $locale = $locale ?? $request->getPreferredLanguage(['en', 'hi', 'gu'])
                 ?? config('app.locale');

        // Set application locale
        App::setLocale($locale);

        return $next($request);
    }
}
