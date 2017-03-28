<?php

namespace App\Http\Middleware;

use Closure;
use App\Definitions\FunctionsDefinition;

class LoginMiddleware
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
        $session = session()->has('auth');
        if (!$session) {
            $ret = redirect(FunctionsDefinition::LOGIN_VIEW);
        } else {
            $ret = $next($request);
        }
        return $ret;
    }
}
