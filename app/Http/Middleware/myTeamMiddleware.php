<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Services\ApiHockyService;

class MyTeamMiddleware
{
    protected $ApiHockyService;

    public function __construct(ApiHockyService $ApiHockyService)
    {
        $this->ApiHockyService = $ApiHockyService;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        $count = $this->ApiHockyService->getCurrentTeamCount(); 
        
        if ($count == 11) {
            return $next($request);
        }

        return redirect()->back()->with('error', 'Your team does not have exactly 11 players.');
    }
}

