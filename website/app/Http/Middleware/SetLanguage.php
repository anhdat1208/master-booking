<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use App\Models\Domain;

class SetLanguage
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
        $domain = Domain::where('name', $request->getHost())->first();
        $locale = $domain ? $domain->code : 'en';
        App::setLocale($locale);

        return $next($request);
    }
}
