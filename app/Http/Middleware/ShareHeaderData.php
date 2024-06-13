<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\ProjectType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ShareHeaderData
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        $types = ProjectType::all();
        View::share("headerTypes",$types);
        return $next($request);
    }
}
