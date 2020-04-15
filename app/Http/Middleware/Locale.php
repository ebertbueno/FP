<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\App;

use Closure;

class Locale
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
        if (!in_array($request->lang, ['en', 'es', 'pt_BR']) && $request->lang !== null) {
            abort(400);
        } else if($request->lang !== null){
            App::setLocale($request->lang);
        }
        return $next($request);
    }
}
