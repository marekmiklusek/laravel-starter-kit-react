<?php

declare(strict_types=1);

use App\Models\User;

it('redirects root to login page', function (): void {
    $page = visit('/');

    $page->assertPathIs('/login')
        ->assertSee(__('Log in to your account'))
        ->assertNoJavaScriptErrors();
});

it('logs the user in via the login page', function (): void {
    $user = User::factory()->create([
        'email' => 'test@example.com',
    ]);

    $page = visit('/login');

    $page->assertSee(__('Log in to your account'))
        ->fill('email', $user->email)
        ->fill('password', 'password')
        ->click(__('Log in'))
        ->assertPathIs('/dashboard')
        ->assertNoJavaScriptErrors();

    $this->assertAuthenticatedAs($user);
});
