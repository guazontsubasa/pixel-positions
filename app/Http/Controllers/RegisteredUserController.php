<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rules\Password;
use App\Models\User;
use App\Models\Employer;
use Illuminate\Support\Facades\Auth;

class RegisteredUserController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $userAttributes = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'confirmed', Password::min(8)]
        ]);

        $employerAttributes = $request->validate([
            'employer' => ['required', 'string', 'max:255'],
            'logo' => ['required', File::types(['png','jpg','jpeg','gif'])]
        ]);

        $user = User::create($userAttributes);

        $logoPath = $request->logo->store('logos');

        $user->employer()->create([
            'name' => $employerAttributes['employer'],
            'logo' => $logoPath
        ]);

        Auth::login($user);

        redirect('/');
    }

}
