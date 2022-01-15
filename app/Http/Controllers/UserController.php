<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Services\Validation\Auth\AuthValidation;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users/index', [
            'users' => $users
        ]);
    }

    public function store(Request $request)
    {
        $attributes = AuthValidation::registerUser($request);
        $attributes['password'] = Hash::make($attributes['password'], [
            'rounds' => 12,
        ]);

        User::create($attributes);

        return redirect('/users');
    }

    // public function update(Todo $todo)
    // {
    //     $todo->update(['isDone' => true]);

    //     return redirect('/');
    // }

    // public function destroy(Todo $todo)
    // {
    //     $todo->delete();

    //     return redirect('/');
    // }
}
