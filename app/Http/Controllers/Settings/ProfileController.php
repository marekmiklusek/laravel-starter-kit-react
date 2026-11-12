<?php

declare(strict_types=1);

namespace App\Http\Controllers\Settings;

use App\Models\User;
use Inertia\Inertia;
use Inertia\Response;
use App\Actions\DeleteUser;
use Illuminate\Http\Request;
use App\Actions\UpdateUserProfile;
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

    public function update(UpdateProfileRequest $updateProfileRequest, UpdateUserProfile $updateUserProfile): RedirectResponse
    {
        /** @var User $user */
        $user = $updateProfileRequest->user();

        $updateUserProfile->execute(
            $user,
            $updateProfileRequest->string('name')->toString(),
            $updateProfileRequest->string('email')->toString(),
        );

        return to_route('profile.edit');
    }

    public function destroy(DeleteProfileRequest $deleteProfileRequest, DeleteUser $deleteUser): RedirectResponse
    {
        /** @var User $user */
        $user = $deleteProfileRequest->user();

        Auth::logout();

        $deleteUser->execute($user);

        $deleteProfileRequest->session()->invalidate();
        $deleteProfileRequest->session()->regenerateToken();

        return redirect('/');
    }
}
