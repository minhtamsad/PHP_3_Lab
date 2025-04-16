<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use PHPOpenSourceSaver\JWTAuth\Providers\LaravelServiceProvider;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php', // Ensure API routes are included
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withProviders([
        LaravelServiceProvider::class, // Register JWTAuth service provider
    ])
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'auth:api' => \PHPOpenSourceSaver\JWTAuth\Http\Middleware\Authenticate::class, // Register JWTAuth middleware
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
