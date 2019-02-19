<?php

namespace App\Http\Middleware;

use Closure;

class CheckForBannedWordsMiddleware
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
        $string = $request->content;
        $banned_words = ['hate', 'idiot',  'stupid'];

        foreach($banned_words as $banned_word) 
        {
            if(stristr($string, $banned_word))
            {
                return redirect()->route('forbidden-comment');
            }
        }

        return $next($request);
    }
}