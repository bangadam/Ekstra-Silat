<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class Pembina
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
        if (Auth::check() && Auth::user()->level == 'pembina') {
            return $next($request);
        }

        return redirect()->back()->with('pesan', 'Maaf Anda Tidak bisa Mengakses halaman ini !');
    }
}
