<?php

namespace App\Http;

use App\Http\Middleware\AlunoAutenticado;
use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * Global HTTP middleware stack.
     *
     * Estes middleware são executados em *todas* as requisições.
     */
    protected $middleware = [
        \Illuminate\Http\Middleware\HandleCors::class,
        \App\Http\Middleware\TrustProxies::class,
        \Illuminate\Http\Middleware\ValidatePostSize::class,
        \App\Http\Middleware\TrimStrings::class,
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
    ];

    /**
     * Middleware groups para *rotas* web e API.
     */
    protected $middlewareGroups = [
        'web' => [
            \App\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \App\Http\Middleware\VerifyCsrfToken::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],

        'api' => [
            \Illuminate\Middleware\ThrottleRequests::class.':api',
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],
    ];

    /**
     * Middleware de rota (usado com Route::middleware()).
     */
    protected $routeMiddleware = [
        'verified' => \Illuminate\Auth\Middleware\EnsureEmailIsVerified::class,
        'aluno.autenticado' => AlunoAutenticado::class
    ];
}
