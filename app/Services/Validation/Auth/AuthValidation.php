<?php

namespace App\Services\Validation\Auth;

class AuthValidation {
    public static function registerUser($request){
        return $request->validate([
            'email' => ['required', 'unique:users,email'],
            'name' => ['required', 'string'],
            'password' => ['required', 'min:8', 'string']
        ]);
    }
}
