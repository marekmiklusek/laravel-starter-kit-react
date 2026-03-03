<?php

declare(strict_types=1);

use Laravel\Fortify\Features;
use Illuminate\Support\Facades\Route;

/** @var Illuminate\Routing\Route $route */
$route = Route::inertia('/', 'welcome', [
    'canRegister' => Features::enabled(Features::registration()),
]);
$route->name('home');

Route::middleware(['auth', 'verified'])->group(function (): void {
    /** @var Illuminate\Routing\Route $route */
    $route = Route::inertia('dashboard', 'dashboard');
    $route->name('dashboard');
});

require __DIR__.'/settings.php';
