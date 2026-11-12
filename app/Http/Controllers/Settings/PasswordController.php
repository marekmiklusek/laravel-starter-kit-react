<?php

declare(strict_types=1);

namespace App\Http\Controllers\Settings;

use App\Models\User;
use Inertia\Inertia;
use Inertia\Response;
use App\Actions\UpdateUserPassword;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Settings\UpdatePasswordRequest;

final class PasswordController
{
    public function edit(): Response
    {
        return Inertia::render('settings/password');
    }

    public function update(UpdatePasswordRequest $updatePasswordRequest, UpdateUserPassword $updateUserPassword): RedirectResponse
    {
        /** @var User $user */
        $user = $updatePasswordRequest->user();

        $updateUserPassword->execute($user, $updatePasswordRequest->string('password')->toString());

        return back();
    }
}
