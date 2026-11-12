<?php

declare(strict_types=1);

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Middleware\HandleAppearance;
use Symfony\Component\HttpFoundation\Response;

it('shares the appearance cookie with views', function (): void {
    $request = Request::create('/', cookies: ['appearance' => 'dark']);

    new HandleAppearance()->handle($request, fn (): Response => new Response());

    expect(View::shared('appearance'))->toBe('dark');
});

it('shares the system appearance when no cookie is set', function (): void {
    new HandleAppearance()->handle(Request::create('/'), fn (): Response => new Response());

    expect(View::shared('appearance'))->toBe('system');
});
