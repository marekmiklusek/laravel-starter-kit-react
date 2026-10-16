<?php

declare(strict_types=1);

namespace App\Http\Requests\Settings;

use Laravel\Fortify\Features;
use Illuminate\Foundation\Http\FormRequest;
use Laravel\Fortify\InteractsWithTwoFactorState;
use Illuminate\Contracts\Validation\ValidationRule;

final class TwoFactorAuthenticationRequest extends FormRequest
{
    use InteractsWithTwoFactorState;

    public function authorize(): bool
    {
        return Features::enabled(Features::twoFactorAuthentication());
    }

    /**
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [];
    }
}
