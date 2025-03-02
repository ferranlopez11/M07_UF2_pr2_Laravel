<?php
namespace App\Http\Middleware;
  
use Closure;
use Illuminate\Http\Request;


class ValidateUrl
{
    /**
     * Handle an incoming request.
     *
     * @param  Request  $request
     * @param  Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->has('img_url')) {
            $url = $request->input('img_url');

            // Validar si es una URL válida
            if (!filter_var($url, FILTER_VALIDATE_URL)) {
                return redirect()
                ->back()
                ->withInput()
                ->withErrors(['img_url' => 'La URL de imagen no es válida.']);
            }
        }
        return $next($request);
    }
}