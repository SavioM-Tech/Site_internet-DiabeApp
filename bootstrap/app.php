<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        // Endpoint de paiement appelé en AJAX : exclu du CSRF pour éviter les 419
        // liés à la désynchronisation du jeton selon le navigateur/cache.
        // Sans risque : créer une session Stripe n'entraîne aucun débit.
        $middleware->validateCsrfTokens(except: [
            'donation/create-checkout-session',
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
