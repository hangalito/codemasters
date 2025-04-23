<?php

namespace App\Http;

use App\Http\Middleware\AlunoAutenticado;
use Illuminate\Auth\Middleware\EnsureEmailIsVerified;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Foundation\Http\Kernel as HttpKernel;
use Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull;
use Illuminate\Foundation\Http\Middleware\TrimStrings;
use Illuminate\Http\Middleware\HandleCors;
use Illuminate\Http\Middleware\ValidatePostSize;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class Kernel extends HttpKernel
{
    /**
     * Global HTTP middleware stack.
     *
     * Estes middleware são executados em *todas* as requisições.
     */
    protected $middleware = [
        HandleCors::class,
        ValidatePostSize::class,
        TrimStrings::class,
        ConvertEmptyStringsToNull::class,
    ];

    /**
     * Middleware groups para *rotas* web e API.
     */
    protected $middlewareGroups = [
        'web' => [
            AddQueuedCookiesToResponse::class,
            StartSession::class,
            ShareErrorsFromSession::class,
            SubstituteBindings::class,
        ],

        'api' => [
            SubstituteBindings::class,
        ],
    ];

    /**
     * Middleware de rota (usado com Route::middleware()).
     */
    protected $routeMiddleware = [
        'verified' => EnsureEmailIsVerified::class,
        'aluno.autenticado' => AlunoAutenticado::class
    ];
}
