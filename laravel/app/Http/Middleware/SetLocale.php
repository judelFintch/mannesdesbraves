<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SetLocale
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        $locale = $request->route('locale') ?: config('app.locale');
        if (! in_array($locale, ['fr', 'en'])) {
            $locale = config('app.locale');
        }
        App::setLocale($locale);

        return $next($request);
    }
}
