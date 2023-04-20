<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name_padre_madre' => ['required', 'string', 'max:255'],
            'surname_padre_madre' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'dni' => ['string', 'max:255', 'unique:users'],
            'beca_comedor' => ['in:si,no'],
            'telefono' => ['string', 'max:255'],
            'direccion' => ['string', 'max:255'],
            'colaboracion_ampa' => ['string', 'max:255'],
            'password' => $this->passwordRules(),
            'is_paid' => ['nullable', 'boolean'],
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        $user = User::create([
            'name_padre_madre' => $input['name_padre_madre'],
            'surname_padre_madre' => $input['surname_padre_madre'],
            'email' => $input['email'],
            'dni' => $input['dni'],
            'beca_comedor' => $input['beca_comedor'],
            'telefono' => $input['telefono'],
            'direccion' => $input['direccion'],
            'colaboracion_ampa' => $input['colaboracion_ampa'],
            'password' => Hash::make($input['password']),
            'is_paid' => $input['is_paid'] ?? false,
        ]);

        $user->createAsStripeCustomer();

        return $user;
    }
}
