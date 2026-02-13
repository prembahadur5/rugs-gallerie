<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\LocaleMiddleware;
//use Illuminate\Foundation\Configuration\Middleware;


return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
   
	/*->withMiddleware(function (Middleware $middleware) {
		$middleware->web(append: [
			\App\Http\Middleware\LocaleMiddleware::class,
		]);
	})*/
	->withMiddleware(function (Middleware $middleware) {
		// DO NOTHING HERE FOR NOW
		
	})
	->withMiddleware(function ($middleware) {
		$middleware->alias([
			'admin' => \App\Http\Middleware\AdminMiddleware::class,
		]);
	})




    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
