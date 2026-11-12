<?php

declare(strict_types=1);

use App\Models\User;

test('hides sensitive attributes', function (): void {
    $user = User::factory()->create();

    expect($user->toArray())->not->toHaveKeys([
        'password',
        'two_factor_secret',
        'two_factor_recovery_codes',
        'remember_token',
    ]);
});

test('casts', function (): void {
    $user = new User();

    expect($user->casts())->toBe([
        'id' => 'string',
        'name' => 'string',
        'email' => 'string',
        'password' => 'hashed',
        'two_factor_secret' => 'encrypted',
        'two_factor_recovery_codes' => 'encrypted',
        'two_factor_confirmed_at' => 'datetime',
        'remember_token' => 'string',
        'email_verified_at' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ]);
});
