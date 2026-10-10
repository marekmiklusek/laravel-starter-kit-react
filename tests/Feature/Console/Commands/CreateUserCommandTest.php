<?php

declare(strict_types=1);

use App\Models\User;
use Illuminate\Support\Facades\Hash;

it('creates a verified user from the prompted answers', function (): void {
    $this->mockArtisan('user:create')
        ->expectsQuestion('Name', 'Test User')
        ->expectsQuestion('Email address', 'test@example.com')
        ->expectsQuestion('Password', 'password1234')
        ->expectsQuestion('Confirm password', 'password1234')
        ->expectsOutputToContain('User [test@example.com] created successfully.')
        ->assertSuccessful()
        ->run();

    $user = User::query()->sole();

    expect($user->only('name', 'email'))->toBe(['name' => 'Test User', 'email' => 'test@example.com'])
        ->and($user->email_verified_at)->not->toBeNull()
        ->and(Hash::check('password1234', $user->password))->toBeTrue();
});

it('rejects a name that is too long before prompting for the email', function (): void {
    $this->mockArtisan('user:create')
        ->expectsQuestion('Name', str_repeat('a', 256))
        ->expectsOutputToContain('The name field must not be greater than 255 characters.')
        ->assertFailed()
        ->run();

    $this->assertDatabaseEmpty('users');
});

it('rejects an invalid email before prompting for the password', function (): void {
    $this->mockArtisan('user:create')
        ->expectsQuestion('Name', 'Test User')
        ->expectsQuestion('Email address', 'not-an-email')
        ->expectsOutputToContain('The email field must be a valid email address.')
        ->assertFailed()
        ->run();

    $this->assertDatabaseEmpty('users');
});

it('rejects a password that is too short', function (): void {
    $this->mockArtisan('user:create')
        ->expectsQuestion('Name', 'Test User')
        ->expectsQuestion('Email address', 'test@example.com')
        ->expectsQuestion('Password', 'short')
        ->expectsOutputToContain('The password field must be at least 8 characters.')
        ->assertFailed()
        ->run();

    $this->assertDatabaseEmpty('users');
});

it('rejects a password confirmation that does not match', function (): void {
    $this->mockArtisan('user:create')
        ->expectsQuestion('Name', 'Test User')
        ->expectsQuestion('Email address', 'test@example.com')
        ->expectsQuestion('Password', 'password1234')
        ->expectsQuestion('Confirm password', 'different1234')
        ->expectsOutputToContain('The password field confirmation does not match.')
        ->assertFailed()
        ->run();

    $this->assertDatabaseEmpty('users');
});

it('rejects an email that is already taken', function (): void {
    User::factory()->create(['email' => 'test@example.com']);

    $this->mockArtisan('user:create')
        ->expectsQuestion('Name', 'Test User')
        ->expectsQuestion('Email address', 'test@example.com')
        ->expectsOutputToContain('The email has already been taken.')
        ->assertFailed()
        ->run();

    $this->assertDatabaseCount('users', 1);
});
