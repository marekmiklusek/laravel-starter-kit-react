<?php

declare(strict_types=1);

use App\Models\User;
use Illuminate\Support\Facades\App;
use Inertia\Testing\AssertableInertia;

it('shares the app name, user, sidebar state, locale and translations with every page', function (): void {
    $user = User::factory()->create();

    $response = $this->actingAs($user)->get(route('dashboard'));

    $response->assertInertia(fn (AssertableInertia $assertableInertia): AssertableInertia => $assertableInertia
        ->where('name', config()->string('app.name'))
        ->where('auth.user.id', $user->id)
        ->where('sidebarOpen', true)
        ->where('locale', App::getLocale())
        ->has('translations'));
});

it('reads the sidebar state from the cookie', function (): void {
    $user = User::factory()->create();

    $response = $this->actingAs($user)
        ->withUnencryptedCookie('sidebar_state', 'false')
        ->get(route('dashboard'));

    $response->assertInertia(fn (AssertableInertia $assertableInertia): AssertableInertia => $assertableInertia
        ->where('sidebarOpen', false));
});
