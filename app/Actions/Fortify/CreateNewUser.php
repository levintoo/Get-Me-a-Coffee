<?php

namespace App\Actions\Fortify;

use App\Helpers\Helper;
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
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'unique:users', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required','regex:/^([0-9\s\-\+\(\)]*)$/','min:10', 'max:255'],
            'national_id' => ['required', 'numeric', 'unique:users', 'max:255'],
            'category' => ['required', 'string', 'max:255'],
            'about' => ['required', 'max:2048'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();
        $uid = Helper::IDGenerator(new User(),'userid',4,'GMAC');
        return User::create([
            'userid' => $uid,
            'name' => $input['name'],
            'username'=> $input['username'],
            'phone' => $input['phone'],
            'national_id' => $input['national_id'],
            'category' => $input['category'],
            'about' => $input['about'],
            'email' => $input['email'],
            'utype' => 'USR',
            'status' => '0',
            'password' => Hash::make($input['password']),
        ]);
    }
}
