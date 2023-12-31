<?php

namespace App\Http\Middleware;
use Closure;

class Cors
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
        /*$response = $next($request);
        $header = $request->header('Access-Control-Allow-Origin');
        if(!isset($header)){
            $response->header('Access-Control-Allow-Methods', '*');
            $response->header('Access-Control-Allow-Headers', '*');
            $response->header('Access-Control-Allow-Origin', '*');
            $response->header('Content-Type', 'application/application/json');
        }
        return $response; */

        $domain = parse_url($_SERVER['HTTP_REFERER']);
        $host = '*';
        if (isset($domain['host'])) {
            $host = $domain['host'];
        }
        return $next($request)
            ->header('Access-Control-Allow-Origin', $host)
            ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS')
            ->header('Access-Control-Allow-Headers', 'Content-Type, Accept, Authorization, X-Requested-With, Application');

    }
}
