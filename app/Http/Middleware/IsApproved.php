<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsApproved
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //ensure the user's account is approved
        if (!auth()->user()->isApproved()) {
            //log the user out
            auth()->logout();

            //redirect the user back to the home page
            return redirect()->route('home')->with('error', 'Your account is not approved.');
        }

        //proceed to the next request
        return $next($request);
    }
}
