<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;

class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{
    /**
     * Validate and update the given user's profile information.
     *
     * @param  array<string, string>  $input
     */
    public function update(User $user, array $input): void
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'photo' => ['nullable', 'mimes:jpg,jpeg,png', 'max:1024'],
            'dni' => ['string', 'max:255', 'unique:users'],
            'beca_comedor' => ['in:si,no'],
            'telefono' => ['string', 'max:255'],
            'direccion' => ['string', 'max:255'],
            'colaboracion_ampa' => ['string', 'max:255'],
            'is_paid' => ['nullable', 'boolean'],
        ])->validateWithBag('updateProfileInformation');

        if (isset($input['photo'])) {
            $user->updateProfilePhoto($input['photo']);
        }

        if ($input['email'] !== $user->email &&
            $user instanceof MustVerifyEmail) {
            $this->updateVerifiedUser($user, $input);
        } else {
            $user->forceFill([
            'name' => $input['name'],
            'surname' => $input['surname'],
            'email' => $input['email'],
            'dni' => $input['dni'],
            'beca_comedor' => $input['beca_comedor'],
            'telefono' => $input['telefono'],
            'direccion' => $input['direccion'],
            'colaboracion_ampa' => $input['colaboracion_ampa'],
            'is_paid' => $input['is_paid'] ?? false,
            ])->save();
        }
    }

    /**
     * Update the given verified user's profile information.
     *
     * @param  array<string, string>  $input
     */
    protected function updateVerifiedUser(User $user, array $input): void
    {
        $user->forceFill([
            'name' => $input['name'],
            'surname' => $input['surname'],
            'email' => $input['email'],
            'email_verified_at' => null,
            'dni' => $input['dni'],
            'beca_comedor' => $input['beca_comedor'],
            'telefono' => $input['telefono'],
            'direccion' => $input['direccion'],
            'colaboracion_ampa' => $input['colaboracion_ampa'],
            'is_paid' => $input['is_paid'],
        ])->save();

        $user->sendEmailVerificationNotification();
    }
}
