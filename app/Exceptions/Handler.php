<?php

namespace App\Exceptions;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    protected function unauthenticated($request, AuthenticationException $exception) // Use AuthenticationException
    {
        if ($request->expectsJson()) {
            return response()->json(['error' => 'Unauthenticated.'], 401);
        }

        return response()->view('errors.403', [], 403);
    }

    protected function unauthorized($request, AuthenticationException $exception)
    {
        if ($request->expectsJson()) {
            return response()->json(['error' => 'Unauthorized.'], 401);
        }

        return response()->view('errors.401', [], 401);
    }

    public function render($request, Throwable $e)
    {
        if ($e instanceof UnauthorizedException) {
            return response()->view("errors.403", [
                "exception" => $e,
            ], 403);
        }
        return parent::render($request, $e);
    }
}
