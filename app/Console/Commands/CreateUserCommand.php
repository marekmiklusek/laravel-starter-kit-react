<?php

declare(strict_types=1);

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

use function Laravel\Prompts\text;
use function Laravel\Prompts\password;

use App\Concerns\ProfileValidationRules;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Attributes\Description;

#[Signature('user:create')]
#[Description('Create a new user')]
final class CreateUserCommand extends Command
{
    use ProfileValidationRules;

    public function handle(): int
    {
        $name = text(label: 'Name', required: true, validate: ['name' => $this->nameRules()]);

        $email = text(label: 'Email address', required: true, validate: ['email' => $this->emailRules()]);

        $password = password(label: 'Password', required: true, validate: ['password' => ['required', 'string', Password::default()]]);

        password(
            label: 'Confirm password',
            required: true,
            validate: fn (string $value): string => Validator::make(
                ['password' => $password, 'password_confirmation' => $value],
                ['password' => ['confirmed']],
            )->errors()->first('password'),
        );

        $user = User::query()->create([
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'email_verified_at' => now(),
        ]);

        $this->components->success(sprintf('User [%s] created successfully.', $user->email));

        return self::SUCCESS;
    }
}
