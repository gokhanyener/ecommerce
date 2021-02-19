<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AdminCheck
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        Log::info(Auth::user());
        Log::info($request->ip());
        if (Auth::guard('admin')->check() && (Auth::guard('admin')->user()->is_admin === '1')) {

            return $next($request);
        }

        return redirect()->route('admin.login');
    }
}
