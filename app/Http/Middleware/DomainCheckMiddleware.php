<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Hexadog\ThemesManager\Http\Middleware\ThemeLoader as HexadogThemeLoader;

class DomainCheckMiddleware extends HexadogThemeLoader
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $theme = null)
    {
        // $host = parse_url($request->headers->get('host'),  PHP_URL_HOST);

        // $middleware = Route::getRoutes()->match($request)->gatherMiddleware();

        // if(in_array('web', $middleware) && !in_array('api', $middleware))
        // {
        //     $company = Company::where('domain', $host)->first();
        
        //     if($company == null)
        //     {
        //         return redirect('http://www.google.de');
        //     }

        //     $theme = $company->theme;
        // }

        $theme = 'hls/sauerland';
        return parent::handle($request, $next, $theme);
    }
}
