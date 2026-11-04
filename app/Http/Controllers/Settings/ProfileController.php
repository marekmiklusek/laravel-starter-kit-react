<?php

declare(strict_types=1);

namespace App\Http\Controllers\Settings;

use App\Models\User;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Http\Requests\Settings\DeleteProfileRequest;
use App\Http\Requests\Settings\UpdateProfileRequest;

final class ProfileController
{
    public function edit(Request $request): Response
    {
        $user = $request->user();

        return Inertia::render('settings/profile', [
            'mustVerifyEmail' => $user instanceof MustVerifyEmail,
            'status' => $request->session()->get('status'),
        ]);
    }

    public function update(UpdateProfileRequest $updateProfileRequest): RedirectResponse
    {
        /** @var User $user */
        $user = $updateProfileRequest->user();

        $user->fill($updateProfileRequest->validated());

        if ($user->isDirty('email')) {
            $user->forceFill(['email_verified_at' => null]);
        }

        $user->save();

        return to_route('profile.edit');
    }

    public function destroy(DeleteProfileRequest $deleteProfileRequest): RedirectResponse
    {
        /** @var User $user */
        $user = $deleteProfileRequest->user();

        Auth::logout();

        $user->delete();

        $deleteProfileRequest->session()->invalidate();
        $deleteProfileRequest->session()->regenerateToken();

        return redirect('/');
    }
}
