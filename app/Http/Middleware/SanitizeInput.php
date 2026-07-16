<?php

namespace App\Http\Middleware;

use Closure;
use App\Helpers\Sanitizer;

class SanitizeInput
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
        $input = $request->all();

        array_walk_recursive($input, function (&$value, $key) {
            if (is_string($value)) {
                // Rich text fields are passed through Sanitizer::clean to retain styling safely
                if (in_array($key, ['description', 'msg', 'message', 'embed'])) {
                    $value = Sanitizer::clean($value);
                } else {
                    // Plain text fields are stripped of all HTML tags
                    $value = strip_tags($value);
                }
            }
        });

        $request->merge($input);

        return $next($request);
    }
}
