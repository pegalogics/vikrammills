<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

use App\Models\Banner;
use App\Models\Product; 
use App\Models\Clientlogo;

class ShareData
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        view()->share('products', Product::all());
        view()->share('banner', Banner::first());
        view()->share('clientlogo' ,Clientlogo::first());
        return $next($request);
    }
}
