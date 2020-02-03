<?php

namespace App\Http\Middleware;

use Closure;

class VerifyAccessKey
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
        // Para que esto funcione debemos agregar el middleware al array $middleware dentro
        // del archivo app/Http/Kernel.php para que se ejecute en cada petición.

        // Get the api-key
        $key = $request->headers->get('api-key');
        // Si coincide con el valor almacenado en la aplicacion
        // la aplicacion se sigue ejecutando
        if (isset($key) == env('API_KEY')) {
            return $next($request);
        } else {
            // Si falla devolvemos el mensaje de error
            return response()->json(['error' => 'unauthorized' ], 401);
        }
        return $next($request);
        // add api-key in heades with the token value
    }
}
